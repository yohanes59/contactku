<?php 
$tableContacts = "CREATE TABLE IF NOT EXISTS tbl_contacts(
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	relation varchar(20) NOT NULL,
	phone varchar(20) NOT NULL,
	address varchar (255) NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)";
$createTable = mysqli_query($conn, $tableContacts);
?>