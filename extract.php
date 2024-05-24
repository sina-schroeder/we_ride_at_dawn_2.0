<?php

function fetchSunriseSunsetData($lat, $lng, $date) {
    $url = "https://api.sunrise-sunset.org/json?lat=$lat&lng=$lng&date=$date";

    // Initialize a cURL session
    $ch = curl_init($url);

    // Set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL session and get the content
    $response = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response and return data
    return json_decode($response, true);
}

function fetchYearlyData($lat, $lng) {
    $data = [];
    for ($month = 11; $month <= 12; $month++) { // ursprünglich bei 1 angefangen, aber konnten nur zwei Monate auf einmal hochladen, weil es zu lange dauerte
        for ($day = 1; $day <= 31; $day++) {
            $date = sprintf("2024-%02d-%02d", $month, $day);
            if (checkdate($month, $day, 2024)) { // Check if the date is valid
                $response = fetchSunriseSunsetData($lat, $lng, $date);
                if (isset($response['results'])) {
                    $data[] = [
                        'date' => $date,
                        'sunrise' => isset($response['results']['sunrise']) ? $response['results']['sunrise'] : null,
                        'sunset' => isset($response['results']['sunset']) ? $response['results']['sunset'] : null,
                    ];
                }
            }
        }
    }
    return $data;
}

function getAllData() {
    $cities = [
        'Lisbon' => ['lat' => 38.7167, 'lng' => -9.1333],
        'Reykjavik' => ['lat' => 64.1355, 'lng' => -21.8954],
        'Valletta' => ['lat' => 35.8989, 'lng' => 14.5146],
        'Moscow' => ['lat' => 55.7512, 'lng' => 37.6184],
    ];

    $allData = [];

    foreach ($cities as $city => $coords) {
        $allData[$city] = fetchYearlyData($coords['lat'], $coords['lng']);
    }

    // Debug: Save fetched data to a file
    file_put_contents('all_data.json', json_encode($allData, JSON_PRETTY_PRINT));

    return $allData;
}
?>
