<?php
	include "koneksi.php";

	if (isset($_POST['id_member'])) {
		$id_member=$_POST['id_member'];
		$query="SELECT * FROM member WHERE id_member='$id_member'";
	}else{
		die("Error");
	}

	$sql=mysql_query($query);
	$hasil=mysql_fetch_array($sql);
	$id_member=$hasil['id_member'];
	$nama=$hasil['nama'];
	$email=$hasil['email'];
	$jenis_kelamin=$hasil['jenis_kelamin'];
	$jabatan=$hasil['jabatan'];
	
	if(isset($_POST['Sunting'])){
		$id_member=$_POST['id_member'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$jabatan=$_POST['jabatan'];
		
		$query="UPDATE member SET nama='$nama', email='$email', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan' WHERE id_member='$id_member'";
		$sql=mysql_query($query);
		if ($sql) {
			include "edit-member.php";
		}else{
			echo mysql_error();
		}
	}
?>