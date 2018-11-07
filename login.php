<?php 
	$conn = mysqli_connect("localhost","root","","logindb");
	mysqli_query($conn, "SET NAMES 'utf8'");

	$correo = $_POST['Correo'];
	$contra = $_POST['Password'];

	$query = "select id from usuario where correo = '$correo' and pass ='$contra'";
	$result = mysqli_query($conn,$query) or die("Error: ".mysqli_error());

	if (mysqli_num_rows($result) == 1) {
		echo "success";
	}else{
		echo "error";
	}

 ?>