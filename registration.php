<?php

	$name=$_REQUEST["nickname"];
	$password=$_REQUEST["password"];
	$database=new mysqli('localhost', 'root', '', 'data');
	$query="SELECT `name` FROM `users`";
	$result=$database->query($query);
	$reg=true;
	while($str=$result->fetch_assoc()) 
	{
		if($str['name']==$name)
		{	
			$reg=false;
		}	
		}
	if ($reg)
	{
		$query="INSERT INTO users(`name`,`password`) VALUES('$name','$password')";
		$database->query($query);
		echo 'Удачная регистрация</br>';
		echo 'Переадресация пройдет через 3 секунды';
		header("Refresh: 3, url=index.php");		
	}
	else
	{
		echo 'Этот логин уже занят</br>';
		echo 'Переадресация пройдет через 3 секунды';
		header("Refresh: 3, url=reg.php");
	}
	$database->close();	