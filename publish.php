<!DOCTYPE html>
<html>
<head>
	<title>Post Something</title>
	<style>
		.main{
			color: white;
			margin-left: 480px;
			margin-top: 50px;
			font-size: 20px;

		}
		.header{
			margin-left:30px;
		}
		.bt{
			margin-left: 80px;
		}
		.bt input{
			height: 50px;
			width: 90px;
			background-color: #212F3D;
			color:white;
			font-size: 15px;

		}
	
	</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">
	<?php
	include 'config.php';
	?>

	<form method="POST" action="" enctype="multipart/form-data">
	<div class="main">
	<div class="header">
	<h1>PUBLISH</h1>
    </div>
	<div class="f">
		<label>Title:</label>
		<input type="text" name="title" id="title" placeholder="title">
	    </div>
		<br><br>
	<div class="s">
		<label>Comment:</label>
		<textarea name="comment"></textarea>
	</div>
		<br><br>
	<div class="t">
		<label>Image:</label>
		<input type="file" name="image" id="file">
	</div>
		<br><br>
	<div class="fo">
		<label>Website Link:</label>
		<input type="url" name="webl" id="file">
	</div>
		<br><br>
		<div class="bt">
		<input type="submit" name="post" value="post">
	</div>
    </div>
</form>

<?php
    include 'config.php';


	if(isset ($_POST['post'])){
		$title=addslashes($_POST['title']);
		$comment=addslashes($_POST['comment']);
		$imagepath=$_FILES['image']['tmp_name'];
		$webl=addslashes($_POST['webl']);
	    $datep= date('y-m-d');
		 	
	
       	 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$image =base64_encode($binary);

		 	echo $image;
		 	
$insert=mysqli_query($conn,"INSERT INTO publish_dnews(title,comment,image,webl,datep) VALUES ('$title','$comment','$image','$webl','$datep')");
		 	if($insert){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./page.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 }
		 else{
		 	//echo "choose your image profile";
		 }


		}



	




		 
		
		




	


	?>
</body>
</html>





	