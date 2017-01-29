<?php
	include "koneksi.php";
?>

<?php
	$sql=mysql_query("SELECT * FROM member ORDER BY id_member ASC");
	while ($tampil=mysql_fetch_array($sql)){
		?>
			<tbody>
                <tr>
                  <td><?php echo $tampil['id_member']; ?></td>
                  <td><?php echo $tampil['nama']; ?></td>
                  <td><?php echo $tampil['email']; ?></td>
                  <td><?php echo $tampil['jenis_kelamin']; ?></td>
                  <td><?php echo $tampil['jabatan']; ?></td>
                </tr>
          	</tbody>
          	<?php } ?>
      