<?php
include 'models/contactModel.php';

class contactController {
	public $model;

	public function __construct(){
		$this->model = new contactModel();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "views/data_contact/view_contact.php";
	}

	public function viewProfile($id){
		$data = $this->model->select($id);
		$contact = $this->model->fetch($data);
		include "views/data_contact/view_profile.php";
	}

	public function viewUpdate($id){
		$data = $this->model->select($id);
		$contact = $this->model->fetch($data);
		$data2 = $this->model->selectRelation();
		include "views/data_contact/update_contact.php";
	}

	public function viewDelete($id){
		$data = $this->model->select($id);
		$contact = $this->model->fetch($data);
		include "views/data_contact/view_delete.php";
	}

	public function insert() {
		include "views/data_contact/insert_contact.php";
		$fullname = @$_POST['fullname'];
		$relation = @$_POST['relation'];
		$phone = @$_POST['phone'];
		$address = @$_POST['address'];

		if($fullname != '' || $phone != '' || $relation != '' || $address != '') {
			$insert = $this->model->insert($fullname, $relation, $phone, $address);
			if($insert) {
				echo "<script type='text/javascript'>
				alert('Data Berhasil di Tambahkan!');
				window.location.href='?page=';
				</script>";
			} else {
				echo "<script type='text/javascript'>
				alert('Data gagal di Tambahkan!');
				</script>";
			}
		}
	}

	public function edit() {
		$id = $_GET['id'];
		$fullname = $_POST['fullname'];
		$relation = $_POST['relation'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$update = $this->model->update($id, $fullname, $relation, $phone, $address);
		if($update) {
			echo "<script type='text/javascript'>
			alert('Data Berhasil di Ubah!');
			window.location.href='?page=';
			</script>";
		}
		// if($fullname != '' || $phone != '' || $relation != '' || $address != '') {
		// $update = $this->model->update($id, $fullname, $phone, $address);

			// if ($update) {
				// echo "<script type='text/javascript'>
				// alert('Data Berhasil di Ubah!');
				// window.location.href='?page=';
				// </script>";
			// } else {
			// 	echo "<script type='text/javascript'>
			// 	alert('Data gagal di Ubah!');
			// 	</script>";
			// }
		// }
		// if($fullname == '') {
		// 	echo "<script type='text/javascript'>
		// 	alert('Nama Lengkap Tidak Boleh Kosong!');
		// 	</script>";
		// } else if($phone == '') {
		// 	echo "<script type='text/javascript'>
		// 	alert('Nomor Telp Tidak Boleh Kosong!');
		// 	</script>";
		// } else if($address == '') {
		// 	echo "<script type='text/javascript'>
		// 	alert('Alamat Tidak Boleh Kosong!');
		// 	</script>";
		// } else {
		// $update = $this->model->update($fullname, $relation, $phone, $address, $id);

		// }
	}

	public function delete($id){
		$delete = $this->model->delete($id);
		echo "<script type='text/javascript'>
		alert('Data Berhasil di Hapus!');
		window.location.href='?page=';
		</script>";
	}
}
?>