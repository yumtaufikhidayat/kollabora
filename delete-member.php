<?php
	include "koneksi.php";

	if(isset($_GET['id_member'])){
		$id_member=$_GET['id_member'];
		$query="SELECT * FROM member WHERE id_member='$id_member'";
		$hasil=mysql_query($query);
	}
	else{
		die("Error");
	}

	if (!empty($id_member)&&($id_member!="")) {
		$delete="DELETE FROM member WHERE id_member='$id_member'";
		$sql=mysql_query($delete);
		if ($sql) {
			?>

				<script language="javascript">
				alert("Seluruh Data Member <?=$id_member?> Berhasil Dihapus!");
				document.location='member.php';
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("Data gagal terhapus. Silakan kembali ke halaman utama");
					window.location='hapus-member.php';
				</script>
			<?php
		}
	}
?>