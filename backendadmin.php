<?php
$un = $_POST["un"];
$pass = $_POST["pass"];

$connection = new mysqli("localhost", "root", "", "ptigai");

if($connection->error){
  die("Failed to connect : " .$connection->error);
}
else{
  $stmt = $connection->prepare("SELECT * FROM pemilik WHERE un=?");
  $stmt->bind_param("s", $un);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result-> num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if($data['pass'] === $pass){
      header("location: pengguna.php");
      exit;
    }
    else{
      header("location: loginadmin.php");
      echo"invalid password";
    }
  }
  else{
    echo"invalid username and password";
    header("location: loginadmin.php");
  }
}
?>