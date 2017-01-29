<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="icon" href="kollabora.ico">
  <title>Kollabora</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="orange lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" class="brand-logo" href="index.php">Kollabora</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Berita<i class="material-icons right">arrow_drop_down</i></a></li>
        <script type="text/javascript" src="basdat/jquery-2.1.1.min.js"></script>
        <li><a href="#">Buku</a></li>
        <li><a href="member.php">Member</a></li>
        <li><a href="tentang.html">Tentang</a></li>
        <button type="button" class="btn btn-default navbar-btn">Masuk</button>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<div class="container"> 
  <br>
    <h5 class="sub-header"><center>Daftar Member Proyek Buku Kolaborasi LibreOffice Writer</center></h5>
      <br>
      <br>
      <br>
        <div class="table-responsive">
        <?php include "koneksi.php";
            $sql=mysql_query("SELECT * FROM member ORDER BY id_member ASC");
            $row = mysql_num_rows($sql);
            if($row>0){
          ?>
          <table class="table table-striped">
          <div class="rifqi">
          <a href="form-tambah-member.php"><button type="button" class="btn btn-default navbar-btn">Tambah</button></a>
          <a href="edit-member.php"><button type="button" class="btn btn-default navbar-btn">Sunting</button></a>
          <a href="hapus-member.php"><button type="button" class="btn btn-default navbar-btn">Hapus</button></a>
          </div>
          <br>
          <br>
            <br>
            <br>
            <thead>
              <tr>
                  <th>ID Member</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Jabatan</th>
                  <th></th>
              </tr>
            </thead>

            <tbody>
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
            </tbody>
          </table>
        </div>
</div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Kontak Pengembang</h5>
          <div class="icon-block">
            <ul>
              <li><p><a class="white-text"><div class="material-icons">email</div> yumtaufik1997@gmail.com</a></p></li>
              <li><p><a class="white-text"><div class="material-icons">smartphone</div>085296257704</a></p></li>
            </ul>
          </div>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Alamat Pengembang</h5>
          <ul>
            <li><a class="white-text">Jl. D.I. Panjaitan Gg. Sudagaran 2 RT 02/RW 02 Purwokerto Kab. Banyumas Jawa Tengah</a></li>
          </ul>
        </div> 
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <p> Hak Cipta &copy; 2017 <a class="white-text" href="telegram.me/BLOI">Komunitas Belajar LibreOffice Indonesia</a></p>
      </div>
    </div>
  </footer>

  <!-- Dropdown -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Beli</a></li>
    <li class="divider"></li>
    <li><a href="#!">Catatan Perubahan</a></li>
    <li class="divider"></li>
    <li><a href="#!">Cetak</a></li>
  </ul>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
