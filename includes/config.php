<?php
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("Europe/London");

try {
    $con  = new PDO("mysql:dbname=busayoflix;host=busayoflix1.mysql.database.azure.com", "busayo@busayoflix1", "Password12");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage()); 
}
?>
