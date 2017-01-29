<?php
	include "koneksi.php";
?>

<?php
	if(isset($_POST['id_member'])){
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$jabatan=$_POST['jabatan'];
	
	$kueri="INSERT INTO member (id_member, nama, email, jenis_kelamin, jabatan)".
	" VALUES ('".$id_member."', '".$nama."', '".$email."', '".$jenis_kelamin."', '".$jabatan."')";


	$hasil=mysql_query($kueri);
	if ($hasil) {
		include "member.php";
	}
	else{
		echo mysql_error();
	}

	}
	else{?>
	<script type="text/javascript">
		alert("maaf anda salah");
		window.location="member.php";
	</script>
<?php	}
?>