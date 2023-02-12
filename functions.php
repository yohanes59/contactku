<?php 
include('koneksi.php');

// add new contact
if (isset($_POST['add_contact'])) {
	$fullname = $_POST['fullname'];
	$relation = $_POST['relation'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$query = "INSERT INTO contact (name, relation, phone, address) VALUES ('$fullname', '$relation', '$phone', '$address')";
	$query_run = mysqli_query($con, $query);

	if ($query_run) {
		header("location: home.php");
		exit(0);
	} else {
		header("location: new.php");
		exit(0);
	}
}

// edit contact
if (isset($_POST['update_contact'])) {
	$contact_id = $_POST['contact_id'];
	$fullname = $_POST['fullname'];
	$relation = $_POST['relation'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$query = "UPDATE contact SET name='$fullname', relation='$relation', phone='$phone', address='$address' WHERE id='$contact_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) {
		header("location: home.php");
	}
}

// delete contact
if (isset($_POST['delete_contact'])) {
	$contact_id = $_POST['delete_contact'];

	$query = "DELETE FROM contact WHERE id='$contact_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) {
		header("location: home.php");
		exit(0);
	}
}
?>