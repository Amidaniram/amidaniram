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
		echo '������� �����������</br>';
		echo '������������� ������� ����� 3 �������';
		header("Refresh: 3, url=index.php");		
	}
	else
	{
		echo '���� ����� ��� �����</br>';
		echo '������������� ������� ����� 3 �������';
		header("Refresh: 3, url=reg.php");
	}
	$database->close();	