<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'smart');

$link = mysqli_connect("localhost","root","","smart");
if($link ===false){
    die("Error: Could not connect=" .mysqli_error());
}