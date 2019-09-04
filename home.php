<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  color: white;
  margin-left: 100px;
  margin-top: 50px;
  border-radius: 20px;
}

div.gallery img {
 
}

div.desc {
  padding: 15px;
  text-align: center;
  color: white;
  max-height: 75px;
}
div.desc1 {
  padding: 15px;
  text-align: center;
  color: white;
  max-height: 75px;
}

h1{
  color: white;
  text-align: center;
  font-size: 300%;
}
.log{
  margin-left:1000px;
  margin-top: 0px;
  margin-bottom:10px;
  font-size: 20px;
  border:1px solid black;
  padding: 5px 18px;

}
.log,.hover{
  border:2px;
  background-color: grey;
}
.pagenation{
  margin-top: 60%;
}
body{
font-size: 120%;
background: #F8F8FF;
background-size: cover;
background-repeat: no-repeat;

}
.container{
color: #000;
}
</style>
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-md-3">
    <img src="logo1.png" align="right" style="height: 180px; width: 280px; margin-top: 10px;">
    </div>
    <div class="col-md-4" style="margin-top: 50px;">
        <h3>020-7448027354</h3>
    </div>

    <div class="col-md-3" style="margin-top: 50px;">
      <div class="mail">
        <h3>kaurneha550@gmail.com</h3>
    </div>
  </div>

  </div>
</div><br>
    
  

<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="1.jpg"  style="height:600px; width:130%">
  <img class="mySlides" src="8.jpg"  style="height:600px; width:130%">
  <img class="mySlides" src="10.jpg"  style="height:600px; width:130%">
  <img class="mySlides" src="3.jpg"  style="height:600px; width:130% ">
  <img class="mySlides" src="7.jpg"  style="height:600px; width:130%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script><br><br>

</body>
</html> 

<?php
  include 'config.php';

//select all

$perpage = 6;
          if(isset($_GET["page"]))
          {
             $page = intval($_GET["page"]);
          }
          else
          {
             $page = 1;
          }
         $calc = $perpage * $page;
         $start = $calc - $perpage;
         $result = mysqli_query($conn, "SELECT * FROM publish_dnews ORDER BY id DESC  Limit $start, $perpage");
         $rows = mysqli_num_rows($result);
         if($rows)
         {
         $i = 0;
       while($your_post = mysqli_fetch_assoc($result))
       {
            $id=$your_post['id'];
            $title=$your_post['title'];
            $comment=$your_post['comment'];
            $image=$your_post['image'];
            $webl=$your_post['webl'];
            $datep= date('y-m-d');
            ?>

      
  <div class="row" style="width:40%;">
    <div class="col-md-4" style="margin-bottom: 6%">
     <div class="gallery-box">
       <div class="gallery-img">
       <?php echo "<img src=data:image/jpg;base64,$image width='100%' height='100%'>";?>
  </div>
    </div>
       </div>
  <div class="col-md-8">
     <div class="gallery-details">
        <h4>Title:<?php echo $title; ?><font color="black"><?php echo"(".$id.")";?></font>
      </h4>
    <div>
        <?php echo $comment; ?><font color="black">
    </div>
        <a href="<?php echo $webl;?>"><font color="black"></a>
    <div>
        <a href="<?php echo $webl;?>"><?php echo $webl;?></a><br>
        <div class="d">
        <span style="float:right;"><font color="black"><?php echo $datep;?></font></span>
      </div>
      </div>
    </div>  
  </div>
 </div>
      
      


      <?php
    }//while
      }//if rows
?>
    <br><br>
   

    </div>
    
    
    </body>
    </html>

