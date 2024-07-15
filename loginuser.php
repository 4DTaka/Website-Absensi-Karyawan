<?php 
session_start();
error_reporting(0);
ini_set('display_errors',0);

//atur koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "ptigai";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);
//atur variabel
$err        = "";
$ecode   = "";
$epassword   = "";
$ingataku   = "";

if(isset($_COOKIE['cookie_ecode'])){
    $cookie_ecode = $_COOKIE['cookie_ecode'];
    $cookie_epassword = $_COOKIE['cookie_epassword'];

    $sql1 = "select * from pengguna where ecode = '$cookie_ecode'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if($r1['epassword'] == $cookie_epassword){
        $_SESSION['session_ecode'] = $cookie_ecode;
        $_SESSION['session_epassword'] = $cookie_epassword;
    }
}

if(isset($_SESSION['session_ecode'])){
    header("location:backenduser.php");
    exit();
}

if(isset($_POST['login'])){
    $ecode   = $_POST['ecode'];
    $epassword   = $_POST['epassword'];
    $ingataku   = $_POST['ingataku'];

    if($ecode == '' or $epassword == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from pengguna where ecode = '$ecode'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['ecode'] != $ecode){
            $err .= "<li>Username <b>$ecode</b> tidak tersedia.</li>";
        }elseif($r1['epassword'] != $epassword){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_ecode'] = $ecode; //server
            $_SESSION['session_epassword'] = $epassword;

            if($ingataku == 1){
                $cookie_name = "cookie_ecode";
                $cookie_value = $ecode;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_epassword";
                $cookie_value = $epassword;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:backenduser.php");
        }
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
  <title>LOGIN USER</title>
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
  <meta content="Indonesia" name="geo.placename"/>
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
 
 <!-- App Capsule -->
    <div id="appCapsule">
       <h4 style="color:#029DD6;font-size: 20px;padding-top:10px;"class="section text-center">Pusat Pengajaran dan Pembelajaran Inovatif</h4>
        <div style=" background-image: url(BAHAN/batik.png); background-color:#029DD6;border-radius:30px;margin:0 16px;padding:10px 15px" class="section text-center">
            <h1 style="color:#FFFFFF;font-size:19px;"><i class="fa fa-user"></i> Login</h1>
            <img src="BAHAN/robot.png" height="90">
            <h1 style="color:#FFFFFF;font-size:19px;">USER</h1>
            
        </div>
        <div class="section mb-5 p-2">
        <?php if($err){ ?>
            <div id="login-alert" class="alert alert-danger col-sm-12">
                <ul><?php echo $err ?></ul>
            </div>
        <?php } ?>   
            <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                
                                <label class="label">Username</label>
                                <input type="text" class="form-control" id="ecode" name="ecode" value="<?php echo $ecode ?>" placeholder="Masukkan Username" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                
                            </div>
                        </div>
        
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Password</label>
                                <input type="password" class="form-control" id="epassword" name="epassword" value="<?php echo $epassword ?>" placeholder="Masukkan Password" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                <input id="login-remember" type="checkbox" name="ingataku" value="1" <?php if($ingataku == '1') echo "checked"?>> Ingat Aku
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-button-group transparent">
                   <button type="submit" class="btn btn-success btn-block" name="login"><ion-icon name="log-in"></ion-icon> Login Magang</button>
                   <a href="loginadmin.php" class="btn btn-warning btn-block"><i class="fa fa-user" ></i>Login Admin</a>
                </div>    
            </form>
        </div>

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
<script src="js/sw-script.js"></script>  <!-- </body></html> -->
  </body>
</html>
