<?php

class contactModel{
	public function execute($query){
		include 'configs/koneksi.php';
		return mysqli_query($conn, $query);
	}

	public function fetch($var){
		return mysqli_fetch_array($var, MYSQLI_ASSOC);
	}

	public function select($id){
		$query = "SELECT * FROM tbl_contacts WHERE id='$id'";
		return $this->execute($query);
	}

	public function selectAll(){
		$query = "SELECT * FROM tbl_contacts";
		// $query = "SELECT * FROM tbl_contacts ORDER BY name ASC";
		return $this->execute($query);
	}

	public function selectRelation(){
		$query = "SELECT DISTINCT relation FROM tbl_contacts";
		return $this->execute($query);
	}

	public function insert($fullname, $relation, $phone, $address) {
		$query = "INSERT INTO tbl_contacts (name, relation, phone, address) VALUES ('$fullname', '$relation', '$phone', '$address')";
		return $this->execute($query);
	}

	public function update($id, $fullname, $relation, $phone, $address) {
		$query = "UPDATE tbl_contacts SET name='$fullname', relation='$relation', phone='$phone', address='$address' WHERE id='$id'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tbl_contacts WHERE id='$id'";
		return $this->execute($query);
	}

	// public function cari($cari){
	// 	$query = "SELECT * FROM tbl_contacts WHERE name LIKE %$cari%";
	// 	return $this->execute($query);
	// }
}
?>