<?php 
include 'controllers/contactController.php';

$contact = new contactController();

$page = @$_GET['page'];
$act = @$_GET['act'];
$id = @$_GET['id'];

if($page == '')
{
	if($act == '')
	{
		$contact->view();
	}
	else if($act == 'tambah')
	{
		$contact->insert();
	}
}
else if($page == 'profile')
{
	if($act == '')
	{
		$contact->viewprofile($id);
	}
	else if($act == 'update')
	{
		$contact->viewUpdate($id);
	}
	else if($act == 'edit')
	{
		$contact->edit($id);
	}
	else if($act == 'delete')
	{
		$contact->viewDelete($id);
	}
	else if($act == 'destroy')
	{
		$contact->delete($id);
	}
}
?>