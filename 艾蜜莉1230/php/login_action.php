<?php

		include("db.php");

		//�n�J
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$phone=$_POST["phone"];
			$password=$_POST["password"];
			if(@$_POST["phone"]!="" && @$_POST["password"]!="")
			{
				//�_���\
				$sql="SELECT `mphone` ,`mpassword` FROM `member_table` WHERE `mphone`='".$_POST['phone']."' AND `mpassword` = '".$_POST['password']."'";		
				$result=@mysqli_query($link,$sql);
				$sql2="SELECT `aphone` ,`apassword` FROM `admin_table` WHERE `aphone`='".$_POST['phone']."' AND `apassword` = '".$_POST['password']."'";
				$result2=@mysqli_query($link,$sql2);
				if(mysqli_num_rows($result)==1)
				{
					setcookie("phone",$_POST["phone"],time()+3600);
					setcookie("a", "", time()-5);
					echo "<script>alert('�n�J���\');document.location.href='index.php';</script>";
				}
				//����
				else if(mysqli_num_rows($result2)==1)
				{
					setcookie("phone",$_POST["phone"],time()+3600);
					setcookie("a", "", time()-5);
					echo "<script>alert('�n�J���\');document.location.href='backindex.php';</script>";
				}
				else
				{
					setcookie("a", "f", time()+5);
					echo "<script>alert('�n�J����');document.location.href='index.php';</script>";
					exit;
				}
			}
		}
				//�P�_�n�J������ܿ��~
				if(@$_COOKIE["a"]==null){
					echo "<script>alert('�n�J����');document.location.href='index.php'</script>";
					exit;
				}

?>