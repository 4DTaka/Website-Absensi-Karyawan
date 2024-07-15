<?php
session_start();

if (isset($_POST['submit']) && isset($_FILES['foto'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "ptigai";

	//create connection
	$connection = mysqli_connect($servername, $username, $password, $database);

	echo "<pre>";
	print_r($_FILES['foto']);
	echo "</pre>";

	$nama = $_POST["nama"];
  	$jenisabsen = $_POST["jenisabsen"];
	$img_name = $_FILES['foto']['name'];
	$img_size = $_FILES['foto']['size'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$error = $_FILES['foto']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO absensi(nama, jenisabsen, foto) 
				        VALUES('$nama','$jenisabsen','$new_img_name')";
				mysqli_query($connection, $sql);
				header("Location: menuuser.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: absenuser copy.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: absenuser copy.php?error=$em");
	}

}else {
	header("Location: index.php");
}