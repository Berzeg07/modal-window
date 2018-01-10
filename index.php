<!doctype html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>Поп ап с обработчиком письма</title>
</head>

<body>

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			outline: none;
		}

		.container {
			width: 200px;
			margin: 60px auto;
		}

		.pop {
			display: inline-block;
			padding: 10px;
			height: 40px;
			line-height: 20px;
			border: 1px solid black;
			color: black;
			font-size: 20px;
			text-decoration: none;
		}

		.input {
			width: 100%;
			margin-bottom: 10px;
			border: 1px solid black;
		}

		.pop-up {
			padding: 10px;
			text-align: center;
		}

		.textarea {
			width: 100%;
			border: 1px solid black;
			resize: none;
			margin-bottom: 10px;
		}

		.close-btn {
			text-align: right;
			cursor: pointer;
		}

		/* стили всплывающих окон */

		#mask {
			position: absolute;
			left: 0;
			top: 0;
			z-index: 9000;
			background-color: #000;
			width: 100%;
			height: 100%;
			display: none;
		}

		.window {
			display: none;
			position: absolute;
			left: 50% !important;
			top: 15%;
			-o-transform: translate(-50%, 0);
			-webkit-transform: translate(-50%, 0);
			-moz-transform: translate(-50%, 0);
			transform: translate(-50%, 0);
			z-index: 9998;
			background: white;
		}
	</style>

	<div class="container">
		<a class="pop" href="#login" name="modal">Вызов поп апа</a>
	</div>

	<div id="mask"></div>
	<div class="window" id="login">
		<div class="pop-up">
			<p class="close-btn">X</p>
			<h3>Заголовок</h3>
			<form class="form" method="post" action="spasibo.php">
				<input type="text" placeholder="Имя" class="input" name="uname">
				<br>
				<input type="text" class="phone input" name="phone" placeholder="phone">
				<input type="email" name="email" placeholder="Email" class="input" required>
				<textarea class="textarea" name="text" placeholder="Введите сообщение" type="text"></textarea>
				<input type="submit" name="submit" value="Отправить">
			</form>
		</div>
	</div>

	<a href="#thanks" name="modal"></a>
	<div class="window pop-up" id="thanks">
		<p class="close-btn">X</p>
		<p>Спасибо за ваше обращение,
			<br> мы ответим вам в ближайшее время
		</p>
	</div>


	<!-- JS_BLOCK -->
	<script src="libs/jquery-3.2.1.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script> -->
	<script src="js/main.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>



</body>

</html>