<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "philip_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("connectin failed " . mysqli_connect_error());

}
