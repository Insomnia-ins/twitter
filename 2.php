<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
	
	$log = $_GET["email"];
	
	$pas = $_GET["password"];
	

?>
<div class="" style="">
<div class=" mx-auto shadow p-3 mb-5 bg-white rounded" style="height: 150px; width: 150px;">
<?php
	
	if ($log=="kolya@mail.ru" && $pas=="1234" ) {


		echo "<form action='1.php'><button type='submit' class='btn btn-primary '>Перейти на сайт</button> </form>";

		}else{

		echo "Пароль или Логин неверен<form action='index.php'> <button type='submit' class='btn btn-primary mt-2'>Попробовать ещё</button> </form>";
    
    }
	
	
	
?>
</div>
</div>
