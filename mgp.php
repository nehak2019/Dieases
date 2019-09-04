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
  .main{
    margin-left:500px;
  }
  .label-group{
    margin-left:45px;
  }
  .m{
    color: white;
  }
  .label-group input{
    height: 30px;
    width: 150px;
  }
  .btn{
    height: 30px;
    width: 100px;
    background-color:#212F3D;
    color: white; 
    margin-left: 70px;
  }
</style>
</head>
<body background="bc.jpg" style="background-size:cover; background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <form class="form-signin" method = "POST" action = "show.php">
              <div class="main">
              <div class="m">
              <h1>Insert Post id Here</h1>
            </div>
              <div class="label-group">
                <input type="text" name = "show" class="form-control" placeholder="Insert id" required autofocus><BR>
            
            </div>
            <br>
              <button class="btn" type="submit" name = "submit" value ="submit">SHOW POST</button>
              
            </div>
             

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

?>

<p id = "result"></p>




</body>
</html>
