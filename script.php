<?php 

echo "Hostname 'redis' can be found at: " . gethostbyname('redis') ."\b";

$hostname = 'mysql';
$username = 'root';
$password = 'root';
$dbname = 'satelite_test';

try{
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Connected to the database at hostname 'mysql': " . gethostbyname('mysql')."\b";
} catch(Exception $e) {
    echo $e->getMessage();
}