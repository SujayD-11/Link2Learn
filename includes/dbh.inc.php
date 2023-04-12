<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "step4career";

//Using mysqli as it is updated version of mysql as it is not secured.
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);
if(!$conn)
{
    die("<h3 style='font-weight:bold;text-align:center;'>Connection failed: " . mysqli_connect_error() . "</h3>");
}

