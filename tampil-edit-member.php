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
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<div class="container">
  <div class="section no-pad-bot" id="index-banner">
  <center><h4 class="sub-header">Edit Member</h4></center>
  <br>
  <br>
    <form action="tampilkan-edit-member.php" method="POST">
      <?php
        if (isset($_POST['id'])){
        $id=$_POST['id'];
        $kueri = mysql_query("SELECT * FROM member where id_member='$id'");
        $data=mysql_fetch_array($kueri);
        $q_get_field=mysql_query("DESC member;");
        $ambil = array();
        
        while($row=mysql_fetch_array($q_get_field)){
              $ambil[] = $row['Field'];
        }
  
              $n=(count($data)/2);
              $label = array(
                'ID Member'
                ,'Nama'
                ,'Email'
                ,'Jenis Kelamin'
                ,'Jabatan'
              );

              for($x=0; $x<$n; $x++){          
      ?>
           <div class="form-group">
              <label for="exampleInputEmail1"><?php echo $label[$x]?></label>
              <input type="text" name="<?php echo $ambil[$x];?>" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $data[$x]; ?>">
            </div>
            
            <?php }
            } ?>
            <button type="submit" class="btn btn-default navbar-btn" name="Sunting">Sunting</button>
          </form>
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
        <div class="col l6 s12">
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