<?php
	//�P�_�n�J������ܿ��~
	if(@$_COOKIE["a"]!=null)
		echo "�n�J����";
	//�n�J
	if(@$_POST["mphone"]!="" && @$_POST["mpassword"]!="")
	{
		//�_���\
		$sql="SELECT `mphone` ,`mphone` FROM `member_table` WHERE `mphone`='".$_POST["mphone"]."' AND `mpassword`='".$_POST["mpassword"]."'";		
		$result=@mysqli_query($link,$sql);
		if(mysqli_num_rows($result)==1)
		{
			setcookie("email",$_POST["email"],time()+3600);
			setcookie("a", "", time()-5);
			echo "�n�J���\";
		}
		//����
		else
		{
			setcookie("a", "f", time()+5);
		}
	}
?>