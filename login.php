<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
 .main{
			margin-left: 450px;
			margin-top: 40px;
			color: white;
			border:1px solid gray;
	        width: 350px;
	        height: 300px;   
	       border-radius: 15px;
	       background-color:#4A235A  ; 

		}
		.main div{
			margin-left:50px;
		}
		.main label{
			font-size: 20px;
		}
		.main input{
			height: 30px;
			width: 150px;
		}
		.main h1{
			margin-left: 120px;
          }
		.bt input{
			height: 40px;
			width: 90px;
			margin-left:70px;
			background-color: #34495E  ;
		}	
	</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">
	

<form method="POST" action="" enctype="multipart/form-data">
<div class="main">
	<h1>Login</h1>
  <div class="f">
<label>Username</label>
<input type="text" name="username">
</div>
<br><br>
<div class="s">
<label>Password</label>
<input type="password" name="password">
</div>
<br><br>
<div class="bt">
<input type="submit" name="submit" value="Login"><br>
</div>
</form><br>
</div>
</body>
</html>


<?php
	//Make connection
	include 'config.php';
	

	if(isset ($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		//select some information inside table
		$select=mysqli_query($conn,"SELECT * FROM reg_infop WHERE username='$username' AND password='$password'");
		$number=mysqli_num_rows($select);
			if($number>0){
				session_start();
				$userinfo=$select->fetch_assoc();
				$userid=$userinfo['id'];
				$_SESSION['id']=$userid;
				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./page.php')";
		 		echo "</script>";
			}
			else{
				echo "wrong password";
			}


	}
?>