<?php
	
		$name=$_REQUEST["nickname"];
		$password=$_REQUEST["password"];
		$log =false;
		$database=new mysqli("localhost", "root", "", "data");
		$query="SELECT `name`, `password` FROM `users`";
		$result=$database->query($query);
		while($str=$result->fetch_assoc())
		{	
			if(($str["name"]==$name) && ($str["password"]==$password))
			{	
				$log=true;
			}	

		}
		if ($log)
		{			
			setcookie("log","true");
			setcookie("logname",$name);
			header("Location:index2.php");
		}
		else
		{
			echo '�� ���������� ����� ��� ������</br>';
			echo '������������� ������� ����� 3 �������';
			header("Refresh: 3, url=index.php");
		}
		$database->close();
		