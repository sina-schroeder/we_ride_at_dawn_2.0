<?php

// Datenbankkonfiguration einbinden
require_once 'config.php';

// Header setzen, um JSON-Inhaltstyp zurückzugeben
header('Content-Type: application/json');

// Den Standort- und Datumsparameter aus der URL holen
if (isset($_GET['city']) && isset($_GET['date'])) {
    $city = $_GET['city'];
    $date = $_GET['date'];
} else {
    echo json_encode(['error' => 'Stadt- und Datumsparameter werden benötigt.']);
    exit;
}

try {
    // Erstellt eine neue PDO-Instanz mit der Konfiguration aus config.php
    $pdo = new PDO($dsn, $username, $password, $options);

    // SQL-Query, um Daten basierend auf der Stadt und dem Datum auszuwählen
    $sql = "SELECT sunrise, sunset, date FROM sunrise_sunset_data WHERE city = ? AND date = ?";

    // Bereitet die SQL-Anweisung vor
    $stmt = $pdo->prepare($sql);

    // Führt die Abfrage mit den Variablen aus, die in einem Array übergeben werden
    $stmt->execute([$city, $date]);

    // Holt den passenden Eintrag
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Gibt das Ergebnis im JSON-Format zurück
        echo json_encode($result);
    } else {
        echo json_encode(['error' => 'Keine Daten für die ausgewählte Stadt und das Datum gefunden.']);
    }
} catch (PDOException $e) {
    // Gibt eine Fehlermeldung zurück, wenn etwas schiefgeht
    echo json_encode(['error' => $e->getMessage()]);
}
?>
