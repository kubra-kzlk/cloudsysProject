<?php
$databaseHost = 'db';
$databaseUsername = 'root';
$databasePassword = 'root';
$databaseName = 'backend';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insert visitor data into the database
$sql = "INSERT INTO users (idusers) VALUES (NULL)";
$result = $mysqli->query($sql);

// Close connection
$mysqli->close();
?>
