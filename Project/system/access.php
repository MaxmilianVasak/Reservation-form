<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "booking_calendar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

?>