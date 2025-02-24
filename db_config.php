<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "my_db";

$connection = mysqli_connect($sname,$uname,$password,$db_name);

if (!$connection) {
    echo "connetion failed";
    exit();
}