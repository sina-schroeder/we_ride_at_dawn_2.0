<?php

// Include the transform script
$jsonData = include('transform.php');

// Decode the JSON data to an array
$dataArray = json_decode($jsonData, true);

// Debug: Save data array to a file
file_put_contents('data_array_debug.json', json_encode($dataArray, JSON_PRETTY_PRINT));

require_once 'config.php'; // Include the database configuration

try {
    // Create a new PDO instance with the configuration from config.php
    $pdo = new PDO($dsn, $username, $password, $options);

    // Check if data already exists to avoid duplicates
    $checkSql = "SELECT COUNT(*) FROM sunrise_sunset_data WHERE city = ? AND date = ?";
    $checkStmt = $pdo->prepare($checkSql);

    // SQL query with placeholders for inserting data
    $sql = "INSERT INTO sunrise_sunset_data (city, date, sunrise, sunset) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Insert each item in the array into the database
    if (!empty($dataArray) && is_array($dataArray)) {
        foreach ($dataArray as $item) {
            // Ensure date format and time conversion
            $date = $item['date'];
            $sunrise = date('H:i:s', strtotime($item['sunrise']));
            $sunset = date('H:i:s', strtotime($item['sunset']));

            // Check if the record already exists
            $checkStmt->execute([$item['city'], $date]);
            $exists = $checkStmt->fetchColumn();

            if (!$exists) {
                $stmt->execute([
                    $item['city'],
                    $date,
                    $sunrise,
                    $sunset,
                ]);
            }
        }
        echo "Data successfully inserted.";
    } else {
        // Handle the error when $dataArray is not an array or empty
        die("Invalid data format.");
    }
} catch (PDOException $e) {
    // Handle database errors
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
