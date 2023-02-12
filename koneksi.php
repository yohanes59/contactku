<?php 
$servername='localhost';
$username='root';
$password='';

// create connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if(!$conn)
{
	die("Sory we failed to connect: " . mysqli_connect_error());
}


// Create a db
$database='dbContact';
$sql = "CREATE DATABASE IF NOT EXISTS " . $database;
$result = mysqli_query($conn, $sql);

// Create table user
$con = mysqli_connect($servername, $username, $password, $database);
$tableUser = "CREATE TABLE IF NOT EXISTS `user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`password` varchar(250) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$result1 = mysqli_query($con, $tableUser);

// Create table contact
$con = mysqli_connect($servername, $username, $password, $database);
$tableContact = "CREATE TABLE IF NOT EXISTS `contact` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`relation` varchar(20) NOT NULL,
	`phone` varchar(20) NOT NULL,
	`address` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$result2 = mysqli_query($con, $tableContact);
?>