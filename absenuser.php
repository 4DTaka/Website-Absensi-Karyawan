<?php
session_start();

$nama = $_SESSION['session_ecode'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "ptigai";

//create connection
$connection = new mysqli($servername, $username, $password, $database);

if (isset($_POST['submit']))
{
    $nama = $_POST["nama"];
    $jenisabsen = $_POST["jenisabsen"];

    $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $sql = "INSERT INTO absensi (nama, jenisabsen, foto) 
            VALUES('$nama','$jenisabsen','$image')";
    $result = $connection->query ($sql);
    if ($result) {
        header("location: menuuser.php");
      }
}
?>

<!DOCTYPE html>
<html lang="id-ID" xml:lang="id-ID">
<head>
  <!--(Viewport) Secara sederhana, fungsi meta viewport adalah menetapkan area mana saja yang terlihat di situs web sekaligus menentukan skala kontennya. Bagian ini akan menginstruksikan browser cara merender halaman pada ukuran layar  berbeda.-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
  <!--(Title) Memberikan informasi mengenai judul dokumen HTML-->
  <title>ABSEN USER</title>
  <!--(Webapp)Web App Manifest  web app Manifes adalah file JSON sederhana yang memberi tahu browser tentang aplikasi web Anda dan bagaimana seharusnya berperilaku ketika ‘diinstal’ pada perangkat seluler atau desktop pengguna.-->
 <link href="json/manifest.json" rel="manifest"/>
  <meta content="loginuser.php" name="msapplication-starturl"/>
  <meta content="loginuser.php" name="start_url"/>
  <meta content="Absensi P3I" name="application-name"/>
  <meta content="Absensi P3I" name="apple-mobile-web-app-title"/>
  <meta content="Absensi P3I" name="msapplication-tooltip"/>
  <meta content="#00B4FF" name="theme_color"/>
  <meta content="#00B4FF" name="theme-color"/>
  <meta content="#FFFFFF" name="background_color"/>
  <meta content="#00B4FF" name="msapplication-navbutton-color"/>
  <meta content="#00B4FF" name="msapplication-TileColor"/>
  <meta content="#00B4FF" name="apple-mobile-web-app-status-bar-style"/>
  <meta content="true" name="mssmarttagspreventparsing"/>
  <meta content="yes" name="apple-mobile-web-app-capable"/>
  <meta content="yes" name="mobile-web-app-capable"/>
  <meta content="yes" name="apple-touch-fullscreen"/>
  <link href="BAHAN/p3i" rel="apple-touch-icon"/>
  <link href="BAHAN/p3i" rel="shortcut icon" type="image/x-icon"/>
  <link href="BAHAN/p3i" rel="icon" sizes="32x32"/>
  <meta content="BAHAN/p3i.png" name="msapplication-TileImage"/>
  <link href="BAHAN/p3i" rel="apple-touch-icon"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="48x48"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="72x72"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="96x96"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="168x168"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="192x192"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="512x512"/>
  <!--(Author) Author dimaksudkan untuk menambahkan nama pembuat kode kedalam HTML, description untuk keterangan tentang kode yang ada di dalam halaman itu, dan keyword berfungsi untuk kata kunci yang mewakili isi keseluruhan halaman.-->
  <meta content="Absensi Magang" name="author" />
  <meta content="P3I"name="publisher"/>

  <!--(verification) alat yang disediakan oleh Google, Bing, Yandex untuk merencanakan, merancang, dan mengola blog yang berhubungan dengan search engini optimization (SEO) -->
  <meta name="yandex-verification" content=""/>
  <meta name="p:domain_verify" content=""/>
  <meta name="msvalidate.01" content=""/>
  <meta name="google-site-verification" content="" />
  <meta name="dmca-site-verification" content=""/>
  <meta name="facebook-domain-verification" content=""/>

  <!--(Location) Ini adalah Meta Tag untuk memberitahu asal negara blog anda. Indonesia bisa anda ganti dengan nama negara blog anda.
-->
  <meta content="ID" name="geo.region"/>
  <meta content="Indonesia" name="geo.country"/>
  <meta content="Indonesia" name="geo.placjenisabsen"/>
  <meta content="x;x" name="geo.position"/>
  <meta content="x,x" name="ICBM"/>

  <!--(resource) Gunakan preconnect untuk mempercepat koneksi ke asal lain di mana URL sumber daya lengkapnya tidak diketahui sebelumnya, contoh: saat menggunakan Google Fonts. -->
  <link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
  <link href="//api.github.com" rel="preconnect dns-prefetch"/>
  <link href="//api.mapbox.com" rel="preconnect dns-prefetch"/>
  <link href="//cdnjs.cloudflare.com" rel="preconnect dns-prefetch"/>
  <link href="//unpkg.com" rel="preconnect dns-prefetch"/>
  <link href="//kit.fontawesome.com" rel="preconnect dns-prefetch"/>

  <!--(CSS) CSS berfungsi untuk menjelaskan dan menata tampilan elemen yang tertulis pada bahasa markup, salah satunya adalah HTML.-->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/sw-custom.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
<div class="loading"><div class="spinner-border text-primary" role="status"></div></div>
  <!-- loader -->
    <div id="loader">
        <img src="BAHAN/p3i.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->
<!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="BAHAN/p3i.png" alt="logo" class="logo">
        </div>
        <div class="right">
            <div class="headerButton" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true"><img src="http://localhost/Absensi/content/avatar.jpg" alt="image" class="imaged w40">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" onclick="location.href='logout.php'" href="logout.php"><ion-icon size="small" name="log-out-outline"></ion-icon>Keluar</a>
                </div>
            </div>
        </div>
    </div>
<!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper"><img src="http://localhost/Absensi/content/avatar.jpg" alt="image" class="imaged w36">
                        </div>
                        <div class="in">
                            <strong><?php print_r($_SESSION['session_ecode']); ?></strong>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
              
                    <!-- menu -->
                    <div class="listview-title mt-1">MENU UTAMA</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="menuuser.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div> Home 
                            </a>
                        </li>
                        <li>
                            <a href="absenuser.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="scan-outline"></ion-icon>
                                </div> Absen
                            </a>
                        </li>
                         <li>
                            <a href="carduser.php" class="item">
                                <div class="icon-box bg-primary">
                                  <ion-icon name="id-card-outline"></ion-icon>
                                </div> ID Card
                            </a>
                        </li>
                        <li>
                            <a href="riwayatuser.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-text-outline"></ion-icon>
                                </div> Riwayat
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div> Keluar
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar --><!-- App Capsule -->
    <div id="appCapsulehome">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title"> Selamat Datang</span>
                        <h4><?php print_r($_SESSION['session_ecode']); ?></h4>
                    </div>
                    <div class="right">
                        <span class="title"><?php echo"".date("j - n - Y"); ?> </span>
                    </div>

                </div>
                <!-- * Balance -->
                <div class="text-center"><h3>Absensi</h3></div>
                <div class="text-center"><h3><span class="clock"></span></h3></div>
                <form nama="form1" method="post" enctype="multipart/form-data">
                <div class="text-center">
                        <div class="form-group">
                            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                            <label class="col-sm-2 control-label" >Foto</label>
                            <div class="text-center">
                            <input type="file" class="btn btn-black" name="foto" required capture>
                            </div>
                            <div>
                            <label class="col-sm-2">Jenis Absen</label>
                            </div>
                            <div>
                                <select class="form-control" name="jenisabsen" value="<?php echo $jenisabsen; ?>" required>
                                <option value="">- Pilih -</option><option value="Sesi 1">Sesi 1</option><option value="Istirahat">Istirahat</option><option value="Sesi 2">Sesi 2</option><option value="Pulang">Pulang</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group basic">
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="upload" >Absen</button>
                        </div>
                </div>
                </form>
                <!-- * Wallet Footer -->
                
            </div>
        </div>
        <!-- Card -->
    </div>
    <!-- * App Capsule -->

<div class="appBottomMenu">
        <a href="menuuser.php" class="item">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="absenuser.php" class="item">
            <div class="col">
                <ion-icon name="camera-outline"></ion-icon>
                <strong>Absen</strong>
            </div>
        </a>
        <a href="carduser.php" class="item">
            <div class="col">
               <ion-icon name="id-card-outline"></ion-icon>
                <strong>ID Card</strong>
            </div>
        </a>
        <a href="riwayatuser.php" class="item">
            <div class="col">
                 <ion-icon name="document-text-outline"></ion-icon>
                <strong>Riwayat</strong>
            </div>
        </a>
    </div>
      <!-- * App Capsule -->
<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Ionicons -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://kit.fontawesome.com/0ccb04165b.js" crossorigin="anonymous"></script>
<!-- Base Js File -->
<script src="js/base.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/webcam.min.js"></script>
<script src="js/sw-script.js"></script><script type="text/javascript">


   var result;
    $(document).ready(function getLocation() {
        result = document.getElementById("latitude");
       // 
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        } else {
            swal({title: 'Oops!', text:'Maaf, browser Anda tidak mendukung geolokasi HTML5.', icon: 'error', timer: 3000,});
        }
    });
    
    // Define callback function for successful attempt
    function successCallback(position) {
       result.innerHTML =""+ position.coords.latitude + ","+position.coords.longitude + "";
    }

    // Define callback function for failed attempt
    function errorCallback(error) {
        if(error.code == 1) {
            swal({title: 'Oops!', text:'Anda telah memutuskan untuk tidak membagikan posisi Anda, tetapi tidak apa-apa. Kami tidak akan meminta Anda lagi.', icon: 'error', timer: 3000,});
        } else if(error.code == 2) {
            swal({title: 'Oops!', text:'Jaringan tidak aktif atau layanan penentuan posisi tidak dapat dijangkau.', icon: 'error', timer: 3000,});
        } else if(error.code == 3) {
            swal({title: 'Oops!', text:'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.', icon: 'error', timer: 3000,});
        } else {
            swal({title: 'Oops!', text:'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.', icon: 'error', timer: 3000,});
        }
    }
</script>
  <!-- </body></html> -->
  </body>
</html>
