<?php 
	session_start();
	mysql_connect("localhost", "root", "");
	mysql_select_db("dbtoko");
	// Koneksi ke database menggunakan PDO
// try {
// 	$dsn = 'mysql:host=localhost;dbname=catering';
// 	$user = 'root';
// 	$password = '';
 
// 	$pdo = new PDO($dsn, $user, $password);
// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  } catch (PDOException $e) {
// 	echo 'Koneksi gagal: ' . $e->getMessage();
//  }
 
	// settings
	$url = "http://localhost/toko/";
	$title = "Toko Mulia Pati";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>