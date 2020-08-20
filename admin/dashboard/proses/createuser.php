<?php
	include('../../../config/query.php');

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$role_id = $_POST['role_id'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$q = new Query();
	$input = $q->query("INSERT INTO users VALUES('', '".$nama."', '".$email."', '".$username."', '".$password."', '".$role_id."', 'avatar.png', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')");
	if($input) {
		$rs = array(
			'status'=> 'true',
			'message' => 'Berhasil'
		);
	} else {
		$rs = array(
			'status'=> 'false',
			'message' => $input
		);
	}

	echo json_encode($rs);