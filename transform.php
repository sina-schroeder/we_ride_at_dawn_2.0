<?php

// Include the extract script
require_once 'extract.php';

// Get raw data
$data = getAllData();

// Initialize an array to store the transformed data
$transformedData = [];

if (is_array($data)) {
    foreach ($data as $city => $records) {
        foreach ($records as $record) {
            $transformedData[] = [
                'city' => $city,
                'date' => $record['date'],
                'sunrise' => $record['sunrise'],
                'sunset' => $record['sunset'],
            ];
        }
    }
}

// Encode the transformed data in JSON
$jsonData = json_encode($transformedData, JSON_PRETTY_PRINT);

// Debug: Save transformed data to a file
file_put_contents('transformed_data.json', $jsonData);

// Return the JSON data instead of outputting it
return $jsonData;
?>
