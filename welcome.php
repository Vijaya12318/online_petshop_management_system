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



    <meta charset="UTF-8">
  <title>NATOURS</title>
  <style>
	  body{
	margin:0;
	padding:0;
	font-family:Arial;
	overflow-x: hidden;
}
h1{
	margin:0;
}
.topnav{
	position:relative;
	overflow:hidden;
	/*  disc: inline-block;*/
	
	border-radius:10px;
}
.topnav a{
	float:left;
	display:block;
	color:#f2f2f2;
	text-align:center;
	padding:14px 16px;
	padding-bottom:3px;
	text-decoration:none;
	font-size:17px;
	margin-right:25px;
	margin-left:5px;
	transition-duration:0.4s;
}
.topnav a:not(:first-child){
	float:right;
}
.topnav a:hover{
	/*background-color:rgba(0,0,0,0.5);*/
	color:black;
	border-bottom:2px solid orange;
}
.topnav a.active{
	background-color:#4CAF50;
	color:white;
}
.topnav .icon{
	 display:none;
}
@media screen and (max-width:600px){
	.topnav a:not(:first-child){
		display:none;
	}
	.topnav a.icon{
		float:right;
		display:block;
	}
}
@media screen and (max-width:600px){
	.topnav.responsive{
	background-color:#333;
	position:relative;
	}
	.topnav.responsive .icon{
		position:absolute;
		right:0;
		top:0;
	}
	.topnav.responsive a{
		float:none;
		display:block;
		text-align:left;
	}	
}
.hero_main{
	position:relative;
	width:100%;
	background-image:linear-gradient(to top right,rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url(lab.jpg);
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
		margin-left:10px;
		display:block;
		margin-top:20px;
	}
	.btn-take{
		width:18vw;
	}
	.btn-more{
		width:30vw;
	}
}
.btn{
	text-decoration:none;
	font-size:8px;
	border-radius:8px;
	/*background-color:aqua;*/
	padding:2px 15px;
}
.btn-take{
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
	color:white;
	border:2px solid #bb7900;
}
 
 .section_globe{
	/* background-color:green;*/
	 height:100vh;
	 position:relative;
	 width:100vw;
 }
 .col_1_of_2{
	 width:50%;
	 float:left;
 }
 .main_head{
	 margin:40px 0px;
 }
 .globe_head{
	 text-align:center;
	 font-size:30px;
	 background-image: linear-gradient(to right,#16A085,#F4D03F);
	 -webkit-background-clip:text;
	 color:transparent;
 }
 .sub_head{
	 text-transform:uppercase;
	 font-size:25px;
 }
 .composition{
	 background-color:red;
	 position:relative;
 }
 .composition_photo{
	 position:absolute;
	 width:55%;
	 z-index:10;
	 box-shadow:9 15px 40px rgpa(0,0,0,0.4);
	 border-radius:3px;
	 opacity:1;
	 transition-duration:0.4s;
	 /*outline-color:aqua;*/
	 outline:3px solid black;
	 outline-offset:20;
 }
 .composition_photo_1{
	 left:0;
	 top:-20px;
 }
 .composition_photo_2{
	 right:0;
	 top:20px;
 }
 .composition_photo_3{
	 left:20%;
	 top:100px;
 }
 .composition_photo:hover{
	 transform:scale(1.05) translateY(-5px);
	 box-shadow: 0 25px 40px rgba(0,0,0,0.5);
	 z-index:20;
	  outline:15px solid aqua;
 }
 .composition:hover
 .composition_photo:not(:hover){
	 transform:scale(0.95);
	 opacity:0;
 }
 .left_para{
	 width:80%;
	 color:grey;
	 text-align:left;
 }
 .btn-anchor{
	 background-color:orange;
	 color:white;
 }
 @media screen and (max-width:600px){
	 .composition_photo{
		 position:relative;
		 width:100%;
	 }
	 .composition_photo_3{
		 left:0;
		 top:60px;
		 }
}
.section_features{
	position:relative;
	background-image:linear-gradient(to right bottom,rgba(182,213,111,0.0),rgba(40,180,133,0.8)),url(pets_d.jpg);
	background-position:center;
	background-size:cover;
	height:100vh;
	width:100vw;
	@-webkit-clip-path:polygon(0 20% 100% 0,100% 80%,0 100%);
}
.inner_fea{
	width:90%;
	position:absolute;
	margin-top:200px;
	margin-left:5%;
}
.grid-container{
	display:grid;
	grid-gap:50px 100px;
	grid-template-columns:auto auto auto auto;
	padding:10px;
}
.grid-item{
	/*box-sizing:border-box;*/
	background-color:rgba(255,255,255,0.7);
	height:55vh;
	width:90%;
	padding:20px;
	border-radius:5px;
	text-align:center;
	color:#575656;
	box-shadow:0 15px 40px rgba(0,0,0,0.4);
	transition-duration:0.4s;
	
}
.icon{
	transform:scale(2);
	box-sizing:border-box;
	padding-top:5px;
	padding-bottom:5px;
	color:rgba(182,213,111,0.8);
}
.fea_head{
	margin:15px 0;
	margin-top:5px;
	font-size:15px;
	text-transform:uppercase;
}
.fea_text{
	letter-spacing:1px;
	text-align:center;
}
.grid-item:hover{
	
	transform:scale(1.2) translateY(-7px);
	box-shadow:0 25px 40px rgba(0,0,0,0.5);
}

</style>
  
  <script src="https://kit.fontawesome.com/113f6bf594.js" crossorigin="anonymous"></script>

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
                      <img src="images/dog_logo1.jfif"  width="15% "/>  Online Pet Shop Website</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="welcome.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
						<li>  <a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span>  Welcome  <?php echo $fetch_info['name'] ?> <br>Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color:#000; padding:10px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="">

                <div class="">
                  <img src="images/Cats and Dogs Wallpaper.jpg" alt="" class="">
                </div>
                
               
              </div>
                              
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

<!--*********************************************Food PACKAGES************************************************-->
 
            
               
            </div>

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our Petshop<i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Petshop On Special Offer </div>
              <ul class="list-group">
               
                <li class="list-group-item wow fadeInDown">Dog - <span style="color:#8B8B00; font-weight:bold;">Php 500 to 600 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 <li class="list-group-item wow fadeInDown">Fish  - <span style="color:#8B8B00; font-weight:bold;">Php 150 to 300 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  <li class="list-group-item wow fadeInDown">Bird  - <span style="color:#8B8B00; font-weight:bold;">Php 300 to 450 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  
                   <li class="list-group-item wow fadeInDown">Cat- <span style="color:#8B8B00; font-weight:bold;">Php 200 to 350 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 -->

            
              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
            </div>
            <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown"">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview wow fadeInDown" href="images/MAP-1.png" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                </div>  
        </div>

        
</div><!--/.container-->
<br><br>

<section class="hero_main">
    <div class="hero-text-box">
     <h1> SAY HI TO NATURE.<br> WHICH IS BEYOUND SCIENCE<h1>
	 <a href="#" class="btn btn-take">Take Tour</a>
	 <a href="information.php" class="btn btn-more">Show me more!</a>
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
<section  class="section_globe">
   <div class="row">
       <h2 class="globe_head">RELATION BETWEEN PETS AND HUMANS</h2><br>
   </div>
   <div class="row">
        <div class="col_1_of_2">
		 <div class="left_para">
	      <h3 class="sub_head">-->Animals Helping People</h3>
		<p class="para">
		       .....Dogs are very present. If someone is struggling with something, they know how to sit there and be loving,” says Dr. Ann Berger, a physician and researcher at the NIH Clinical Center in Bethesda, Maryland. “Their attention is focused on the person all the time.”
		</p>
	      <h3 class="sub_head">-->Exprience you never had before</h3>
		<p class="para">
		    ....Lorem ipsum dolor sit amet, consectetur adipisicing elit.Expeditantotam facere laudantium lacoriosam,maxime vel provident,sapiente voluptates
		quibusdam officlis aspernatur, ad officia minus quidem tenetur ipsam ipsa perferendis inventore.
		</p>
		<a href="" class="btn btn-anchor">Learn more!</a>
		 </div>
		</div>
		<div class="col_1_of_2">
		     <div class="composition">
			    <img src="b3.jpg" alt="img1" class="composition_photo composition_photo_1">
				<img src="4.jpg " alt="img1" class="composition_photo composition_photo_2">
				<img src="c1.jpg" alt="img1" class="composition_photo composition_photo_3">
			</div>
		</div>
   </div>
</section><br><br><br><br>
<section class="section_features">
      <div class="inner_fea">
	      <div class="grid-container">
		         <div class="grid-item grid-item-1">
				     <div class="feature-box">
					 <i class="fas fa-globe-asia icon"></i>
					 <h3 class="fea_head">BIRDS</h3>
					 <p class="fea_text">Many birds kept as pets, including doves, parakeets, and lovebirds, enjoy living in pairs for companionship. The smallest bird egg belongs to the hummingbird and is the size of a pea. The largest bird egg, from which the ostrich hatches
		</p>
					 </div>
				 </div>
			     <div class="grid-item grid-item-2">
				  <div class="feature-box">
					<i class="fas fa-compass travel icon"></i>
					 <h3 class="fea_head">DOGS</h3>
					 <p class="fea_text">Best dog bed: Give your pooch the perfect night’s sleep - Best dog food: Make sure your faithful friend gets the best diet possible - Best dog treats: Seven tasty treats for very good dogs
		  </p>
					 </div>
				 </div>
				 <div class="grid-item grid-item-3"> 
				 <div class="feature-box">
					<i class="far fa-map icon"></i>
					 <h3 class="fea_head">CATS</h3>
					 <p class="fea_text">Cat is good to keep as a pet in apartments as they are comfortable staying in small areas unlike dogs. Indoor cats require a litter box where they can eliminate waste. Litter boxes need to be cleaned daily.
		
		</p>
					 </div>
					</div>
				 <div class="grid-item grid-item-4">
				  <div class="feature-box">
					<i class="fas fa-heart icon"></i>
					 <h3 class="fea_head">FISH</h3>
					 <p class="fea_text">Fish Facts There are over 33,000 varieties of fish in the world Fish are cold-blooded and they cannot control their own body temperature. They have a good sense of sight, touch, and taste. 
                         
		</p>
					 </div>
				 </div>
		  </div>
	  </div>
</section>

</section>
				
 <script>
  function myFunction(){
  var x = document.getElementById("myTopnav");
  if(x.className==="topnav"){
     x.className+="responsive";
     }
  else{
        x.className==="topnav";
       }
  }
  const signupButton= document.getElementById('signUp');
  const signupButton= document.getElementById('signUp');
  const container= document.getElementById('container');
  singUpButton.addEventListener('click',() =>{
     container.classList.add("right-panel-active");
	 });
	  singUpButton.addEventListener('click',() =>{
     container.classList.add("right-panel-active");
	 });
  </script>

  <br><br>

<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
               &copy; 2022 <a target="_blank" href="#" title="#">Petshop Online Website</a>.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="welcome.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <!--<li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	</body>
</html>

<?php 
