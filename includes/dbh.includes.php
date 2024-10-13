<?php

$severName = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername = "wevq715pk0aczspm";
$dBPassword = "ljuyiscekm3jh9d2";
$dBName = "m68su2qjsgrlqvu2";

$conn = mysqli_connect($severName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}