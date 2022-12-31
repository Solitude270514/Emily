<?php

		include("db.php");

		//登入
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$phone=$_POST["phone"];
			$password=$_POST["password"];
			if(@$_POST["phone"]!="" && @$_POST["password"]!="")
			{
				//否成功
				$sql="SELECT `mphone` ,`mpassword` FROM `member_table` WHERE `mphone`='".$_POST['phone']."' AND `mpassword` = '".$_POST['password']."'";		
				$result=@mysqli_query($link,$sql);
				$sql2="SELECT `aphone` ,`apassword` FROM `admin_table` WHERE `aphone`='".$_POST['phone']."' AND `apassword` = '".$_POST['password']."'";
				$result2=@mysqli_query($link,$sql2);
				if(mysqli_num_rows($result)==1)
				{
					setcookie("phone",$_POST["phone"],time()+3600);
					setcookie("a", "", time()-5);
					echo "<script>alert('登入成功');document.location.href='index.php';</script>";
				}
				//失敗
				else if(mysqli_num_rows($result2)==1)
				{
					setcookie("phone",$_POST["phone"],time()+3600);
					setcookie("a", "", time()-5);
					echo "<script>alert('登入成功');document.location.href='backindex.php';</script>";
				}
				else
				{
					setcookie("a", "f", time()+5);
					echo "<script>alert('登入失敗');document.location.href='index.php';</script>";
					exit;
				}
			}
		}
				//判斷登入失敗顯示錯誤
				if(@$_COOKIE["a"]==null){
					echo "<script>alert('登入失敗');document.location.href='index.php'</script>";
					exit;
				}

?>