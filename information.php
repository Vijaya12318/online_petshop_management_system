<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
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
  height: 13px;
  width: 13px;
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
</style>


</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="welcome.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                        <!--      <img src="images/logo.jpg"  width="15% "/> --> Petshop Online Website</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="welcome.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                        <li>  <a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span>  Welcome  <?php echo $fetch_info['name'] ?> <br>Logout</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
       
    <table border="0" align="center" width="100%" cellspacing="0" cellpadding="10">
<tr height="20px" background="image/1.jpg">
<td colspan="3" align="center"> <!--<h1>Welcome To RRF</h1>--></td>
</tr>
<div class="title-wrapper">
        <center>
        <h2>Facts About Pets</h2>
    </div>
<tr height="50px" bgcolor="gray">
<td colspan="3"> 
<!---<a href="index.html">Home</a>&nbsp; &nbsp;&nbsp;|
<a href="Gallery.html">Gallery</a>&nbsp;&nbsp;&nbsp;|
<a href="contactus.html">Contract us</a>&nbsp;&nbsp;&nbsp;|
<a href="aboutus.html">About US</a>&nbsp;&nbsp;&nbsp;-->
</tr>
<tr height="100px">
<!--<td bgcolor="green" width="20%" valign="top"  align="center"> 
<h3 align="center"><font color="#fff">Loging Hear</font> </h3>
<p>ID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text"/></p>
<p>
Password :<input type="password"/></p>
<img src="image/PFU-B3-013.jpg" width="200px" height="250" align="center"/>
</td>-->
<td width="60%" valign="top">
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/cat1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/dog1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/cat2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<center><h2>Pet Facts</h2></center>
<p align="justify">
94% of pet owners say their animal pal makes them smile more than once a day.
The American Veterinary Dental Society states that 80% of Dogs and 70% of cats show signs of oral disease by age 3.
</p>
<center><h2>Cats Facts</h2></center>
<p align="justify">
  Cats have 32 muscles in each ear.
  Cats have 4 rows of whiskers.
  Cats have no collarbone, which is one reason they are so flexible.
  Cats spend approximately 30% of their waking hours grooming themselves.
   “American Shorthair” is the designation reserved for pedigreed cats, while similar-looking cats of mixed or unknown origin are called “domestic shorthairs.”
  Feline’s jaws cannot move sideways.
  Cats have over one hundred vocal sounds, while dogs have about ten!
  Cat whiskers are so sensitive they can detect the slightest change in air current.
  Cats have 26 baby teeth and 30 permanent teeth.
</p>
<center><h2>Dogs Facts</h2></center>
<p align="justify">
  Dalmatians are born without spots!  They are born with plain white coats with their first spots appearing after they are 1week old.
  Dogs sweat through their foot pads to help keep them cool.  They also keep cool by panting.
  Greyhounds are the world’s fastest dogs with the ability to reach up to 45 mph.
  Every dog has a unique nose print with no two alike.
  The Basenji, an African wolf dog, does not bark in a normal way but may yodel or scream when excited!
  Snoopy, from Charles M. Schultz’s “Peanuts” comic strip, is a beagle.
  A dog’s sense of smell is 1000 times greater than a human!
  Nine percent of dog owners will have a birthday party for their pet.
  Dogs have 28 baby teeth and 42 permanent teeth.
</p>
</td>
<!--<td bgcolor="blue"  align="center"> 
<h3 align="center"><font color="#fff">Loging Hear</font> </h3>
<p>ID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text"/></p>
<p>
Password :<input type="password"/></p>
<img src="image/PFU-B3-013.jpg" width="200px" height="250" align="center"/>
</td>-->
</tr>
<tr height="80px">
<td colspan="3" bgcolor="gray" align="center"> 
All Right Reserved &copy; RRF
</td>
</tr>
</table>





        
<!--*************************************************** FOOTERS **********************************************-->
  
</body>
</html>
