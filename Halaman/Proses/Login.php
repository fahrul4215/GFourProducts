<?php
	session_start();
	include('../../assets/koneksi.php');

	$User_name = mysql_escape_string($_POST['username']);
	$Pass_word = mysql_escape_string($_POST['password']);

	$Pass_Acak = md5($Pass_word);

	$SQL = "SELECT * FROM tb_player WHERE user_name_pl = '$User_name' AND pass_word_pl = '$Pass_Acak'";
	$CMD = mysql_query($SQL);

	if($DR = mysql_fetch_array($CMD)) {
		$_SESSION['User_name'] = $User_name;

		echo "<script type='text/javascript'>alert('Berhasil Login !');location.href = '../Player/avatar.php';</script>";
	}
	else {
		echo "<script type='text/javascript'>alert('Username/Password Salah Silahkan Login Kembali !');location.href = '../../';</script>";
		//$_SESSION['Login'] = "Gagal";
	}
?>