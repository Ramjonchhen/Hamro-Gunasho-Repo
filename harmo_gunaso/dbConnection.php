<?php

$host = "localhost";
$user = "root";
$pwd = "";
$dbName = "hamro_gunaso";

$conn = new mysqli($host, $user, $pwd, $dbName);

if ($conn->connect_error) {
    echo "connection failed";
}
