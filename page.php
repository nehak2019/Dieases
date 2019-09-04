<!DOCTYPE html>
<html>
<head>
	<title>page</title>
<style>
.main a{
	text-decoration: none;
	padding-left: 1px;
	margin-left: 100px;
	color: white;
	font-size: 20px;
}
.set{
  color: white;
}
.gallery{
  color: white;
}
</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">

<div class="main">
	<a href="home.php">HOME</a><a href="publish.php">PUBLISH</a><a href="mgp.php">MANAGE PUBLICATION</a><a href="logout.php">LOGOUT</a>
</div>


<?php
   include 'config.php';
  
   

//select all post according to the user id
	$sql = mysqli_query($conn,"SELECT * FROM publish_dnews");
    $n_post=mysqli_num_rows($sql);
    echo' <div class="set">';
    if ($n_post>1) {
    	echo " You have  ".$n_post."  posts" ;
    }
    else{
    	echo " You have  ".$n_post."  post" ;
    }
    echo '</div>';
    echo "<br>";
    
   

if ($n_post>0) {//if there are somes results do this
    while ($your_post=mysqli_fetch_assoc($sql)) {
      $id=$your_post['id'];
        $title=$your_post['title'];
        $image=$your_post['image'];
        $comment=$your_post['comment'];
        $webl=$your_post['webl'];
        $comment = substr($comment,0,30).'...';
         $datep=$your_post['datep'];
      $link="edit.php?id=".$id;
      $link2="delete.php?id=".$id;
    echo' <div class="gallery">';
    echo' <div class="desc"><h3>'.$title.'</h3></div>';
   echo "<img src= data:image/jpg;base64,$image width='5%' height='5%'>";
 echo' <div class="desc"><h4>'.$comment.'</h4></div>';
 echo '<a href="'.$webl.'">'.$webl.'</a>';
 echo"<br>";
 echo' <div class="desc"><h4>'.$datep.'</h4></div>';

 
    }
   
 echo '</div></div><br>
 <br>';
    


   

    
} else {
    echo "0 results";
}
	?>



</body>
</html>