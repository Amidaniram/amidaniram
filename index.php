<?php
	if(isset($_COOKIE['log']))
		{
		if($_COOKIE['log']=='true')
			{
			header("Location:index2.php");
			}
		}
?>
<html>

	<head>
	<title>Страница входа</title>
	</head>

	<body>
		<form action="login.php"method="GET"> 
		<p>Имя<input type="text" name="nickname" value=""/></p>
		<p>Пароль<input type="password" name="password" value=""/></p>
		<input type="submit" name="login" value="Войти"/></br>
		<a href="reg.php">Зарегестрироваться</a></br>
	</body>

</html>
	
	