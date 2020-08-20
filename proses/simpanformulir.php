<?php

	include '../config/query.php';
	
	$status = $_POST['status'];
	$nama = $_POST['nama'];
	$tmplahir = $_POST['tmplahir'];
	$tgllahir = date('Y-m-d', strtotime($_POST['tgllahir']));
	$jenkel = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$nipp = $_POST['nipp'];
	$instansi = $_POST['instansi'];
	$telprumah = $_POST['telprumah'];
	$telphp = $_POST['hp'];
	$now = date('Y-m-d H:i:s');

	$q = new Query();
	$sql = "INSERT INTO tr_calonanggota VALUES(DEFAULT, '".$_POST['nik']."', '".$_POST['email']."', '".$nama."', '".$tmplahir."', '".$tgllahir."', '".$jenkel."', '".$alamat."', '".$telprumah."', '".$telphp."', '".$status."', '".$nipp."', '".$instansi."', '".$_POST['gaji']."', '0', '".$now."', '".$now."')";
	$input = $q->query($sql);
	if($input) {
		$id = $q->lastid();
		$res = array(
			'status' => 'true',
			'id' => $id
		);
	} else {
		$res = array(
			'status' => 'false',
			'message' => $input
		);
	}

	echo json_encode($res);

?>