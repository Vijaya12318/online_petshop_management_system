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

<section id="tour-packages" class="center wow fadeInDown">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color: #8B8B00; text-align:center;">avaliable birds food products</div>
        <p style="text-align:center; font-family:verdana;"><br></p>


        <div class="container" style="height:400px;">
			<iframe src="availableframe_birds_food.php" width="100%;" height="400px;" style="border-style:none;"><button>birds food</button></iframe>

            </div>
           <!-- <ul>
            <li><a href="availableframe_dogs.php" class="btn btn-success btn-sm pull-center wow fadeInDown" style="font-size:30px; background-image: url('images/7.jpeg');">DOGS</a></li><br>

            <li><a href="availableframe_cats.php" class="btn btn-success btn-sm pull-down wow fadeInDown" style="font-size:30px; ">Cats</a></li><br>
            <li><a href="availableframe_birds.php" class="btn btn-success btn-sm pull-down wow fadeInDown" style="font-size:30px; ">Birds</a></li>
            </ul>-->
        </div>       
    </section>

<!--*************************************************** FOOTERS **********************************************-->

</body>
</html>

