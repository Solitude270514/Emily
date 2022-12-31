<?php
	//判斷登入失敗顯示錯誤
	if(@$_COOKIE["a"]!=null)
		echo "登入失敗";
	//登入
	if(@$_POST["mphone"]!="" && @$_POST["mpassword"]!="")
	{
		//否成功
		$sql="SELECT `mphone` ,`mphone` FROM `member_table` WHERE `mphone`='".$_POST["mphone"]."' AND `mpassword`='".$_POST["mpassword"]."'";		
		$result=@mysqli_query($link,$sql);
		if(mysqli_num_rows($result)==1)
		{
			setcookie("email",$_POST["email"],time()+3600);
			setcookie("a", "", time()-5);
			echo "登入成功";
		}
		//失敗
		else
		{
			setcookie("a", "f", time()+5);
		}
	}
?>