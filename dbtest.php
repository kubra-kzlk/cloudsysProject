<?php
$databaseHost = 'localhost';
echo "Step 1: Database host is $databaseHost<br>";
$databaseUsername = 'root';
echo "Step 2: Database username is $databaseUsername<br>";
$databasePassword = 'root';
echo "Step 3: Database password is $databasePassword<br>";
$databaseName = 'users';
echo "Step 4: Database name is $databaseName<br>";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli->connect_error) {
    die("Connection failed: ". $mysqli->connect_error);
} else {
    echo "Database connection successful!";
}
?>