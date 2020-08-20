<?php
	include('../../../config/query.php');

	$id = $_POST['id'];
	$date = date('Y-m-d H:i:s');
	$output = "";
	$q = new Query();
	$sql = "UPDATE master_bagian SET status = '0', updated_at = '".$date."', deleted_at = '".$date."' WHERE id = '".$id."'";
	// $input = true;
	$hapus = $q->query($sql);
	if($hapus) {
		$output = "true";
	} else {
		$output = "false";
	}
	echo $output;
?>