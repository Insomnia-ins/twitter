<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

Если сделал, добавление нового твита, создай таблицу 'img', в которой хранятся:
	- аватар автора,
	- картинка поста.
	
Выведи на странице изображения из таблицы 'img'.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2  shadow p-3 mb-5 bg-white rounded" style="padding-bottom: 20%">
						<div class="row">
							<div class="col-2 " >
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-10 pb-4">



								<form action="insert.php" method="GET">
          							<div class="form-group">
             
            							<label for="exampleInputName">Автор</label>
            							<input type="zag" name="aut" class="form-control" placeholder="Напишите свое имя"  >

          							</div>

           							<div class="form-group">
            							<label for="exampleInputEmail1" required="required">Что нового?</label>
            							<input  type="op" name="tit" class="form-control" placeholder="Напишите описание твита" style="height: 70px;">
          							</div>
           							
          							
          								<div class="form-group mt-3">
           									<label class="mr-2">Загрузить картинку</label>
            								<input type="file" name="img">
          								</div>
         							

          							<button type="submit" class="btn btn-primary mt-1">Опубликовать</button>

       							</form>


							</div>

						</div>
						<!-- новый пост -->

						
						<div class="row mt-4" >
							<div class="col-2">

								<img src="img/avatar.jpg" class="rounded-circle">
							
							</div>
							<div class="col-xl-10">
									<h5>

										<?php
											/*echo $_GET["aut"];"<h5 >" .$result1["author"]. "</h5>"*/;
										?>

									</h5>
									<p>

										<?php
											/*echo $_GET["tit"];/*"<p>".$result1["title"]."</p>"*/;
										?>
										
									</p>

									<?php
									
										/*echo "<img class='w-100' src='".$_GET["img"]."'>";/*"<img class='w-100' src=".$result1["img"].">"*/;
									?>

							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<?php

		 					$connect = mysqli_connect("127.0.0.1","root","","twitter");

		 	
		 					$text_query = "SELECT * FROM twits";
		 					$query = mysqli_query($connect, $text_query);
		 					
		 					$result1 = $query->fetch_assoc();
		 					$result2 = $query->fetch_assoc();
		 					$result3 = $query->fetch_assoc();
		 					$result4 = $query->fetch_assoc();
		 					$result5 = $query->fetch_assoc();

		 					
		 	
						?>
						<hr style="width: 60%; margin-top: 100px;">
						<div class="row" style="margin-top: 10%">
							<!-- account_image -->

							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									
									<h5>
										<?php
											echo "<h5 >" .$result1["author"]. "</h5>";
										?>

									</h5>
									
									
								</div>
								<div>
									
									<p>

										<?php
											echo "<p>".$result1["title"]."</p>";
										?>
										
									</p>


									<?php
									
										echo "<img class='w-100' src=".$result1["img"].">";
									?>

								</div>
							</div>
						</div>
						<hr style="width: 60%; margin-top: 100px;">
						<div class="row " style="margin-top: 10%">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo "<h5 >" .$result2["author"]. "</h5>";
										?>

									</h5>
									
									
								</div>
								<div>
									
									<p>

										<?php
											echo "<p>".$result2["title"]."</p>";
										?>
										
									</p>


									<?php
									
										echo "<img class='w-100' src=".$result2["img"].">";
									?>
									
								</div>
							</div>
						</div>
					<hr style="width: 60%; margin-top: 100px;">
					<div class="row " style="margin-top: 10%">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo "<h5 >" .$result3["author"]. "</h5>";
										?>

									</h5>
									
									
								</div>
								<div>
									
									<p>

										<?php
											echo "<p>".$result3["title"]."</p>";
										?>
										
									</p>


									<?php
									
										echo "<img class='w-100' src=".$result3["img"].">";
									?>
									
								</div>
							</div>
						</div>

						<hr style="width: 60%; margin-top: 100px;">
						<div class="row " style="margin-top: 10%">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo "<h5 >" .$result4["author"]. "</h5>";
										?>

									</h5>
									
									
								</div>
								<div>
									
									<p>

										<?php
											echo "<p>".$result4["title"]."</p>";
										?>
										
									</p>


									<?php
									
										echo "<img class='w-100' src=".$result4["img"].">";
									?>
									
								</div>
							</div>
						</div>

						<hr style="width: 60%; margin-top: 100px;">
						<div class="row " style="margin-top: 10%">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo "<h5 >" .$result5["author"]. "</h5>";
										?>

									</h5>
									
									
								</div>
								<div>
									
									<p>

										<?php
											echo "<p>".$result5["title"]."</p>";
										?>
										
									</p>


									<?php
									
										echo "<img class='w-100' src=".$result5["img"].">";
									?>
									
								</div>
							</div>
						</div>
				</div>
				
				
			</div>
			<div class="col-sm-12 col-md-4 col-xl-3">
					
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<form action="insert1.php" method="GET" class="pb-4">
          							<div class="form-group">
             
            							<label for="exampleInputEmail1" required="required">Канал</label>
            							<input  type="op" name="cha" class="form-control" placeholder="Напишите имя канала " style="height: 70px;">

          							</div>

           							<div class="form-group">
            							
            							<label for="exampleInputName">Автор</label>
            							<input type="zag" name="auth" class="form-control" placeholder="Напишите имя канала"  >
          							</div>
           							
          							
          								<div class="form-group mt-3" >
           									<label  class="mr-1">Загрузить картинку</label>
            								<input style="width: 135px;" type="file" name="imgg">
          								</div>
         							

          							<button type="submit" class="btn btn-primary mt-1">Опубликовать</button>

       							</form>
       							<?php

		 					$text_query_1 = "SELECT * FROM followings";
		 					$query = mysqli_query($connect, $text_query_1);
		 					
		 					$result_1 = $query->fetch_assoc();
		 					$result_2 = $query->fetch_assoc();
		 					$result_3 = $query->fetch_assoc();
		 					$result_4 = $query->fetch_assoc();
		 					$result_5 = $query->fetch_assoc();
       							?>

						<div class="col-4">
							<h6>Читаемые</h6>
						</div>
						

						<div class="row mb-3">
							<div class="col-4">
								<?php
									
										echo "<a href=''><img class='w-100' src=".$result_1["img"]."></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<?php
											echo "<a href=''>" .$result_1["channel"]."</a>";
									?>		
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
								<div>
									<?php
											
											echo "<span style='font-size: 12px;'>" .$result_1["name"]."</span>";
									?>
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<?php
									
										echo "<a href=''><img class='w-100' src=".$result_2["img"]."></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<?php
											echo "<a href=''>" .$result_2["channel"]."</a>";
											echo "<span style='font-size: 12px;'>" .$result_2["name"]."</span>";
									?>
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-4">
								<?php
									
										echo "<a href=''><img class='w-100' src=".$result_3["img"]."></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<?php
											echo "<a href=''>" .$result_3["channel"]."</a>";
											echo "<span style='font-size: 12px;'>" .$result_3["name"]."</span>";
									?>
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-4">
								<?php
									
										echo "<a href=''><img class='w-100' src=".$result_4["img"]."></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<?php
											echo "<a href=''>" .$result_4["channel"]."</a>";
											echo "<span style='font-size: 12px;'>" .$result_4["name"]."</span>";
									?>
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-4">
								<?php
									
										echo "<a href=''><img class='w-100' src=".$result_5["img"]."></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<?php
											echo "<a href=''>" .$result_5["channel"]."</a>";
											echo "<span style='font-size: 12px;'>" .$result_5["name"]."</span>";
									?>
									  <!-- имя юзера -->
									<!--название аккаунта-->
								</div>
							</div>
						</div>

					</div>
					<!-- Ссылки © Twitter, 2018 -->
					
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
				</div>
		</div>
	</div>
	
</body>
</html>