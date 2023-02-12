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

// Check for the database creation success
// if ($result) {
// 	echo "The db was created successfully<br>";
// }
// else
// {
// 	echo "The db was not created successfully because of this error ---> " . mysqli_error($conn);
// }

// Create table user
$con = mysqli_connect($servername, $username, $password, $database);
$tableUser = "CREATE TABLE IF NOT EXISTS `contact` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`relation` varchar(20) NOT NULL,
	`phone` varchar(20) NOT NULL,
	`address` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$result1 = mysqli_query($con, $tableUser);

// Check for the table creation success
// if ($result1) {
// 	echo "The table user was created successfully<br>";
// }
// else
// {
// 	echo "The table was not created successfully because of this error ---> " . mysqli_error($con);
// }
?>