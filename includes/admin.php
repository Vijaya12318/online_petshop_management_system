<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../images/foods/logo.png" rel="shortcut icon">
    <title>ADMIN | Petshop Online Website</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

<style>
p{
  background-image: url('admin.webp');
  background-repeat: no-repeat;  
  background-size: cover;
  height:1000px;
  font-size:50px;
  color:blue;
}
</style>

</head><!--/head-->
<body >
     <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"><i class="fa fa-coffee"></i> Ordering Of Product</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th"></span> Product <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="addcnp.php"> Add Product </a></li>
                              <li><a href="update_cnp.php"> Update Product </a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th"></span> orders <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="admin_dogs.php">orders_dogs</a></li>
                              <li><a href="admin_cats.php">orders_cats </a></li>
                              <li><a href="admin_birds.php">orders_birds</a></li>
                              <li><a href="admin_dogs_food.php">orders_dogs_food </a></li>
                              <li><a href="admin_cats_food.php">orders_cats_food</a></li>
                              <li><a href="admin_birds_food.php"> orders_birds_food </a></li>
                            </ul>
                        </li>
                       <!-- <li id="reservation" class=" active wow fadeInDown"><a href="index.php"><span class="glyphicon glyphicon-calendar"></span> Orders</a></li>-->
                        <li id="admin" class="wow fadeInDown"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span> Admin Account</a></li>
                        <li id="logout" class="wow fadeInDown">i><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span> Logout</a></l                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


        <center><h2 style="font-size:60px;">Welcome to the Admin Page</h2>
<br><br>
<p ><br>Admin is the only Persion having all rights to change the <br><br><br>information<br><br><br>
present in this website.<br><br><br>
He can add the avaliable products or pets in they shop through<br><br><br> this site<br><br><br>
And also do not share your details with others.<br><br><br>
Admin must and should  maintain the rule for this website<br><br><br>
How to add the data into the site<br><br><br>
And also updations of the data present in the site<br><br><br>
Your are  the only person eligiable to open this section or page<br><br><br>
you can also have an option to change the details of your <br><br>account<br><br><br>
you can see the order to each products in the site<br><br><br>
And also add the products in your shop.<br><br><br>
</p>
</center>
<!--*************************************************** FOOTERS **********************************************-->
  
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>&copy; 2022 <a target="_blank" href="#" title="#">Petshop Online Website</a></center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<script type="text/javascript">
    $('#filter').change(function() {
    $.post( $("#formFilter").attr("action"),
                 $("#formFilter :input").serializeArray(),
                 function(filter) { 
                    //alert (filter);
                    $("#tablebody").empty();
                    $("#tablebody").html(filter);
                 });    
        $("#formFilter").change( function() {
           return false;    
        });
    });

</script>

    
</body>
</html>