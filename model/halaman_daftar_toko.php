<?php
session_start();
$anony = "anony";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

}else {
  $username = 'Anony';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\halaman-daftar-toko.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Crafty Artisan</title>
</head>

<body>
<header>
        <nav class="navbar">
        <div class="logo">
        <div class="nav-left">
            <strong>Crafty Artisan</strong>
        </div>
        </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="..\model\index.php" class="bar">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="..\model\chat_forum.php" class="bar">Forum</a>
                </li>
                <li class="nav-item">
                    <a href="..\model\pembelian.php" class="bar">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="bar">Kontak</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar-btn"></span>
                <span class="bar-btn"></span>
                <span class="bar-btn"></span>
            </div>

            <script>
              const hamburger = document.querySelector(".hamburger");
              const navMenu = document.querySelector(".nav-menu");

              hamburger.addEventListener("click", mobileMenu);

              function mobileMenu() {
              hamburger.classList.toggle("active");
              navMenu.classList.toggle("active");
              }

            </script>
            
            <div class="nav-right">
            <div class="dropdown">
                <button class="dropdown-button">Akun</button>
                <div class="dropdown-content">
                    <div class="user"><?php echo $username; ?> </div>
                    <a class="bar"href="#">Profile</a>
                    <a class="bar"href="..\controller\logout.php">Logout</a>
            </div>
            </div>
            </div>
        </nav>


</header>

  <content>
    <div class="content">
    <form action="">
    <div class="container">
    <div class="tag">  
    <h1>Daftar Toko</h1>
    </div>
    <hr>
           
    <label for="name-shop"><b>Nama Toko</b></label>
    <input type="text" placeholder="Nama Toko...." name="name-shop" id="name-shop" required>

    <label for="desk-shop"><b>Deskripsi Toko</b></label>
    <textarea type=long-text placeholder="Deskripsi Toko...." name="name-shop" id="name-shop" required></textarea>

    <label for="adress"><b>Alamat Toko</b></label>
    <textarea type=long-text placeholder="Alamat Toko...." name="name-shop" id="name-shop" required></textarea>
    <hr>

    <button type="submit" class="registerbtn">Daftar</button>
  </div>
</form>

    </div>
</content>

    <footer>
        <div class="ending">

            <div class="box">
                <div class="box-about">
                    <h1>Crafty Artisan</h1>
                    <p>Kerajinan Tangan adalah kegiatan menciptakan suatu produk atau barang yang
                         dilakukan oleh tangan dan memiliki fungsi pakai atau keindahan sehingga memiliki nilai jual.</p>
                </div>
            </div>

            <div class="box">
                <div class="box-explore">
                <h2>Tentang Kami</h2>
                <li><a href="#" class="bar">Forum</a></li>
                <li><a href="#" class="bar">Pembelian</a></li>
                <li><a href="#" class="bar">Galeri</a></li>
                </div>
            </div>
            <div class="box">
                <div class="banner">
                <div class="networks">
                    <div id="facebook" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-facebook"> </i>
                      </a>
                    </div>
                  </div>
                  <div class="networks">
                    <div id="instagram" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                  <div class="networks">
                    <div id="whatsapp" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>
</html>

<?php 
  if(isset($_POST['proses'])){
    echo '<script>';
    echo 'alert("Foto berhasil diupload")';
    echo '</script>';
    echo '<script>window.location.href = "../model/index.php";</script>';
  }
?>