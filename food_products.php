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
    <<link href="images/logo.jpg" rel="shortcut icon"> 
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
          
          .hero_main{
	position:relative;
	width:100%;
	background-image:linear-gradient(to top right,rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url(dog.jpg);
	background-size:cover;
	background-position:center;
	height:100vh;
	-webkit-clip-path:polygon(0 0,100% 0,100% 80%,0 100%);
}
.hero-text-box{
	position:absolute;
	width:1140px;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	font-weight:300;
	color:white;
	font-weight:300;
	font-size:40px;
}

@media screen and (max-width:1140px){
	.hero-text-box{
		width:100%;
		font-size:15px;
	}
}
@media screen and (max-width:600px){
	.hero-text-box{
		width:100%;
		font-size:15px;
	}
	.btn{
        align:center;
		margin-left:10px;
		display:block;
		margin-top:20px;
	}
	.btn-take{
        align:center;
		width:18vw;
	}
	.btn-more{
        align:center;
		width:30vw;
	}
}
.btn{
    align:center;
	text-decoration:none;
	font-size:8px;
	border-radius:8px;
	/*background-color:aqua;*/
	padding:2px 15px;
}
.btn-take{
    align:center;
	color:white;
	background-color:#bb7900;
	background-color:#bb7900;
	border:2px solid #bb7900;
	transition-duration:o.3s;
}
.btn-take:hover{
	background-color:#996300;
	border:2px solid #996300;
}
.btn-more{
    align:center;
	color:white;
	border:2px solid #bb7900;
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
                        <li ><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                        <li><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span>  Welcome  <?php echo $fetch_info['name'] ?> <br>Logout</a></li>
                   
                                                            
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
  
		
    
<!--*********************************************START OF Availables************************************************-->

<section class="hero_main">
    <div class="hero-text-box">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color: #8B8B00;">PRODUCTS</div><br>
    <br>
     <!--<h1> SAY HI TO NATURE.<br> WHICH IS BEYOUND SCIENCE<h1>-->
         <ul>
	<li> <a href="dogs_avaliable_food _products.php" class="btn btn-take"  style="font-size:30px; ">DOGS_PRODUCTS</a></li><br><br><br>
	 <li><a href="cats_avaliable_food _products.php" class="btn btn-more" style="font-size:30px;">CATS_PRODUCTS</a></li><br><br><br>
     <li> <a href="birds_avaliable_food _products.php" class="btn btn-take"  style="font-size:30px; ">BIRDS_PRODUCTS</a></li><br><br><br>
    </ul>
    </div>
   <!-- <div class="topnav" id="myTopnav">
	 <a href="#" class="active" >Home</a>
	 <a href="loginpage.html" class="sign up">sign Up</a>
	 <a href="#" class="globe">Globe</a>
	 <a href="#" class="Contact">Contact</a>
	 <a href="#" class="About">About</a>
	 <a href="javascript:void(0)" class="icon" onclick="myFunction()">
	   <i class="fas fa-align-justify"></i>
	 </a>
	 </div>-->
</section>

<!---<section id="tour-packages" class="center wow fadeInDown">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color: #8B8B00; text-align:center;">FOOD FOR PETS</div>
        <p style="text-align:center; font-family:verdana;"><br></p>

            <ul>
            <li><a href="dogs_avaliable_food _products.php" class="btn btn-success btn-sm pull-center wow fadeInDown" style="font-size:30px; background-image: url('images/7.jpeg');">DOGS_PRODUCTS</a></li><br>

            <li><a href="cats_avaliable_food _products.php" class="btn btn-success btn-sm pull-down wow fadeInDown" style="font-size:30px; ">CATS_PRODUCTS</a></li><br>
            <li><a href="birds_avaliable_food _products.php" class="btn btn-success btn-sm pull-down wow fadeInDown" style="font-size:30px; ">BIRDS_PRODUCTS</a></li>
            </ul>
        </div>       
    </section>-->
    <br><br><br><br>

<!--*************************************************** FOOTERS **********************************************-->
</body>
</html>
