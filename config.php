<?php
$server     ="localhost";
$user       ="root";
$password   ="password";
$database   ="latihan";

$connection =mysqli_connect($server,$user,$password,$database);
if(!$connection) {
    die("Connection Failed Gaes".mysqli_connect_error());
}

?>