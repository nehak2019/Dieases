<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
<style>
  .f1 a{
    text-decoration:none;
    color: white;
    padding-left: 10px;
  }
  .t{
    color:white;
  }
  .main{
    color: white;
  }
</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">
<?php
include 'config.php';
$id=$_POST['show'];


if (isset($_POST['submit'])) {
  

  $result=mysqli_query($conn,"SELECT * FROM publish_dnews WHERE id='$id'");
  $rows=mysqli_num_rows($result);
  if ($rows==1) {
  $show=$result->fetch_assoc();
    $title=$show['title'];
    $comment=$show['comment'];
    $image=$show['image'];
    $webl=$show['webl'];
    $datep=$show['datep'];
   
    
     

  }

}
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <center><h1 class="t">MANAGE PUBLICATION</h1></center>
            <p><div class="main"><?php echo $title; ?></p>
            <p><?php echo "<img src= data:image/jpg;base64,$image width='10%'>"?></p>
            <p><?php echo $comment; ?></p> 
            <p><?php echo '<a href="'.$webl.'">'.$webl.'</a>';?></p>
            <p><?php echo $datep; ?></p></div>
            <div class="f1">
            <a href="edit.php?id=<?php echo $id;?>">edit</a>
            <a href="delete.php?id=<?php echo $id;?>">Delete</a>
             </div>
             
           
              
              
              
            
            

             

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

?>
</body>

<p id = "result"></p>




</body>
</html>
