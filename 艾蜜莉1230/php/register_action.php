
<?php 
	include("db.php");
	//include("index.php");
	
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$name=$_POST["username"];
			$gender=$_POST["sex"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			//�ˬd�b���O�_����
			if($name != null && $gender != null && $phone != null && $email != null && $password != null){
			$check="SELECT * FROM `member_table` WHERE `mphone`='".$phone."'";
				if(@mysqli_num_rows(mysqli_query($link,$check))==0){
					$sql="INSERT INTO `member_table` (`mname` , `msex` , `mphone`, `memail` , `mpassword`)VALUES('".$name."','".$gender."','".$phone."','".$email."','".$password."')";
					
					if(@mysqli_query($link, $sql)){
						echo "<script>alert('���U���\!');</script>";
						/* echo "<a href='index.php'>�����\���୶�����I����</a>";*/
						header("refresh:0.3;url=index.php"); 
						exit;
					}else{
						echo "Error creating table: " . @mysqli_error($link);
					}
				}
				else{
					echo "<script>alert('�ӱb���w���H�ϥ�!');</script>";
					//echo "<a href='index.php'>�����\���୶�����I����</a>";
					//header('HTTP/1.0 302 Found');
					header("refresh:0.1;url=index.php",true);
					exit;
				}			
			}
			else{
				echo "<script>alert('��ƿ��~!�Э��s��J���!');document.location.href='index.php';</script>";
				//header("refresh:0.1;url=index.php",true); 
			}
		}
		


		@mysqli_close($link);
	/*
		function function_alert($message) { 
			  
			// Display the alert box  
			echo "<script>alert('$message');
			 window.location.href='index.php';
			</script>"; 
			
			return false;
		} */
		?>
<!--<script src="../js/register.js"></script>--?