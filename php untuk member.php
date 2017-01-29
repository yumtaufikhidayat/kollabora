<?php include "koneksi.php";
            $sql=mysql_query("SELECT * FROM member ORDER BY id_member ASC");
            $row = mysql_num_rows($sql);
            if($row>0){
          ?>



<?php
            while ($tampil=mysql_fetch_array($sql)){
              ?>
                <tr>
                  <td><?php echo $tampil['id_member']; ?></td>
                  <td><?php echo $tampil['nama']; ?></td>
                  <td><?php echo $tampil['email']; ?></td>
                  <td><?php echo $tampil['jenis_kelamin']; ?></td>
                  <td><?php echo $tampil['jabatan']; ?></td>
                </tr>
          <?php } ?>                        
            </tbody>
            </table>
            <?php }else{?>
              <center><h4>Belum ada member yang terdaftar</h4></center>
            <?php }?>