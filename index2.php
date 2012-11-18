<?php
	echo 'Здравствуйте, '.$_COOKIE['logname'];
?>
<html>

	<head>
	<title>Страница входа</title>
	</head>

	<body>
		<form action="logout.php"method="GET"> 		
		<input type="submit" name="logout" value="Выйти"/></br>
	</body>

</html>
	
	