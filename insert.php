<?php


	$connect = mysqli_connect("127.0.0.1","root","","twitter");
		 	
	$text_query = "SELECT * FROM twits";
	$query = mysqli_query($connect, $text_query);
	$text_zaprosa_vstavit = "INSERT INTO twits (author, title, img)
		 				VALUES('{$_GET["aut"]}', '{$_GET["tit"]}', '{$_GET["img"]}')";
	$query_insert = mysqli_query($connect, $text_zaprosa_vstavit);



	$connect = mysqli_connect("127.0.0.1","root","","twitter");
		 	
	$text_query1 = "SELECT * FROM followings";
	$query = mysqli_query($connect, $text_query1);
	$text_zaprosa_vstavit1 = "INSERT INTO followings (author, title, img)
		 				VALUES('{$_GET["auth"]}', '{$_GET["cha"]}', '{$_GET["imgg"]}')";
	$query_insert = mysqli_query($connect, $text_zaprosa_vstavit1);



	header('Location: 1.php');
          						
?>
