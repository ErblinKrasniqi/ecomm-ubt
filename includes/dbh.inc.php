<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$serverName = "localhost";
$dBUsername = "Erblin";
$dBPassword = "";
$dBName = "erblin";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}