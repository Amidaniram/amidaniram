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
	<title>�������� �����</title>
	</head>

	<body>
		<form action="login.php"method="GET"> 
		<p>���<input type="text" name="nickname" value=""/></p>
		<p>������<input type="password" name="password" value=""/></p>
		<input type="submit" name="login" value="�����"/></br>
		<a href="reg.php">������������������</a></br>
	</body>

</html>
	
	