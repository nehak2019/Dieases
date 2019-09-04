<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<style>
		.main{
			color:white;
			margin-left: 430px;
		}
		.l label{
			font-size:20px;
		}
		.l input{
			height: 30px;
			width: 140px;
		}
		.bt{
			margin-left: 70px;
		}
		.bt input{
			height: 30px;
			width: 100px;
			color: white;
			background-color:#212F3D;
		}
	</style>
</head>

<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">
	<?php
	include 'config.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	    $sql=mysqli_query($conn,"SELECT * FROM publish_dnews WHERE id='$id'");
	    $num_rows=mysqli_num_rows($sql);
	    if ($num_rows>0) {
	    	while ($row=$sql->fetch_assoc()) {
	    		$id=$row['id'];
	    		$title=$row['title'];
	    		$image=$row['image'];
	    		$comment=$row['comment'];

	    		
	    	

	?>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="main">
		<h1>Edit Manage Publication</h1>
		<div class="l">
		<label>title</label>
		<input type="text" name="title" value="<?php echo $title; ?>"><br><br>
		<label>Image</label>
		<?php
			echo "<img src=data:image/jpg;base64,$image width='5%'>";
		?>
		<input type="file" name="image"><br><br>
        <label>Comments</label>
		<textarea name="comment"><?php  echo $comment;?></textarea><br><br><br>
		<div class="bt">
		<input type="submit" name="Edit" value="Edit">
	</div>
	</div>
    </div>
	</form>

	<?php
	

	if(isset ($_POST['Edit'])){
		$title=addslashes($_POST['title']);
		$comment=addslashes($_POST['comment']);
	    $datep= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$image =base64_encode($binary);

		 	echo $image;
		 	
		 	$update=mysqli_query($conn,"UPDATE publish_dnews SET title='$title',image='$image',comment='$comment',datep='$datep' WHERE id='$id'");
		 	if($update){
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
		 	$update=mysqli_query($conn,"UPDATE publish_dnews SET title='$title',comment='$comment',datep='$datep' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./page.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}
		 }
		 }
		 
	    }
	}




	
}








	?>


</body>
</html>