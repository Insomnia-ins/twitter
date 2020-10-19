<?php


	$connect = mysqli_connect("127.0.0.1","root","","twitter");
		 	
	$text_query = "SELECT * FROM followings";
	$query = mysqli_query($connect, $text_query);
	$text_zaprosa_vstavit = "INSERT INTO followings (name, channel, img)
		 				VALUES('{$_GET["auth"]}', '{$_GET["cha"]}', '{$_GET["imgg"]}')";
	$query_insert = mysqli_query($connect, $text_zaprosa_vstavit);



	header('Location: 1.php');
          						
?>
