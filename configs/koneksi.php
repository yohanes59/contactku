<?php 
$SERVER='localhost';
$USER='root';
$PASS='';

// create connection
$con = mysqli_connect($SERVER,$USER,$PASS);

// Die if connection was not successful
if(!$con) die("Sory we failed to connect: " . mysqli_connect_error());

// create Database
$DB='contact_db';
$sql = 'CREATE DATABASE IF NOT EXISTS ' . $DB;
$database = mysqli_query($con, $sql);

$conn = mysqli_connect($SERVER,$USER,$PASS,$DB);

include 'create_table.php';
?>