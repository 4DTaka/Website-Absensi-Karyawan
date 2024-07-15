<?php
if( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ptigai";

  //create connection
  $connection = new mysqli($servername, $username, $password, $database);

  $sql = "DELETE FROM pemilik WHERE id=$id";
  $connection->query($sql);
}

header("location: administrator.php");
exit;
?>