<!DOCTYPE html>
<html>
<head>
	<title>register</title>
<style>
.main{
	margin-left: 350px; 
	margin-top:30px;
	border:1px solid gray;
	width: 550px;
	height: 600px;   
	border-radius: 15px;
	background-color:#4A235A  ; 
	 }
.f label{
	font-size:20px;
	margin-left: 20px;
	color: white;
}
.f input{
	height: 40px;
	width: 290px;
	border-radius:10px;
	background-color:#F9E79F;
	margin-left: 40px;

}
.s label{
	font-size:20px;
	margin-left: 20px;
	color: white;
}
.s input{
	height: 40px;
	width: 290px;
	border-radius:10px;
	background-color:#F9E79F;
	margin-left: 70px;

}
.t label{
	font-size:20px;
	margin-left: 20px;
	color: white;
}
.t input{
	height: 40px;
	width: 290px;
	border-radius:10px;
	background-color:#F9E79F;
	margin-left: 40px;

}
.fo label{
	font-size:20px;
	margin-left: 20px;
	color: white;	
}
.fo input{
	height: 40px;
	width: 290px;
	border-radius:10px;
	background-color:#F9E79F;
	margin-left: 20px;

}
.fi label{
	font-size:20px;
	margin-left: 20px;
	color: white;
}
.fi input{
	height: 40px;
	width: 290px;
	border-radius:10px;
	background-color:#F9E79F;
	margin-left: 50px;

}
.header{
	margin-left: 150px;
	font-size: 20px;
	color: white;
 }
.bt input{
	margin-left: 220px;
	height: 40px;
	width: 90px;
	color: white;
	background-color:#34495E   ;
	border:1px  #5D6D7E ;
	border-radius: 10px;
}
.li{
	color: ;
	margin-left: 190px;
	text-decoration: none;
	color: white;
}
.li a{
	text-decoration: none;
	margin-left: 15px;
}


</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">

	<form method="POST" action="" enctype="multipart/form-data">
	<div class="main">
	<div class="header">
	<h1>Registration</h1>
    </div>
	<div class="f">
		<label>Username:</label>
		<input type="text" name="username" id="username" placeholder="enter your name">
	    </div>
		<br><br>
	<div class="s">
		<label>Email:</label>
		<input type="text" name="email" id="email" placeholder="enter your email">
	</div>
		<br><br>
	<div class="t">
		<label>Password:</label>
		<input type="password" name="password" id="password" placeholder="********">
	</div>
		<br><br>
	<div class="fo">
		<label>Confirm-Password:</label>
		<input type="password" name="password1" id="password1" placeholder="********">
	</div>
		<br><br>
	<div class="fi">
		<label>Date:</label>
		<input type="date" name="datep" id="datep" placeholder="dd-mm-yyyy">
	</div>
		<br><br>
	<div class="bt">
		<input type="submit" name="register" value="register">
	</div>
	<div class="li">
	<h3>Click here to<a href="login.php">login</a></h3>
    </div>
	</div>
	</form>

</body>
</html>



<?php

  require "config.php";

if(isset($_POST['register'])){

	$username=addslashes($_POST['username']);
	$email=addslashes($_POST['email']);
	$password=addslashes($_POST['password']);
	$password1=addslashes($_POST['password1']);
	$datep=addslashes($_POST['datep']);
  

	if($password==$password1){
	

      $insert=mysqli_query($conn,"INSERT INTO reg_infop(username,email,password,datep)VALUES('$username','$email','$password','$datep')");
      if($insert){
      	echo $pass;      	echo"<script language='javascript'>";
		echo"document.location.replace('./login.php')";
		echo"</script>";
      	
      }else{
      echo $conn->error;
       }
	}
}
?>