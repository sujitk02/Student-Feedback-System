<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vetrivel Pandian">
	<title>Student Feedback System</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#0366fc;padding: 10px;font-weight: bold;font-size: 16px">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Student Feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Register</a></li>
	 <li>
	 	<li><a style="color:#FFFFFF" href="index.php"><i class="fa fa-sign-in fa-fw"></i>Login</a></li>
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						
						 
						 if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedback.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedback1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feedback3.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container" style="width: 100%">

        <div class="row">
            <div class="col-lg-12">
				
				
			<div class="col-sm-10" style="margin-top:200px;margin-bottom:80px">
							
			<div>

<span style="margin-left: 255px"><img src="images/studentm.png" style="border-radius: 30px">
</span>
<span style="margin-left: 115px"><img src="images/faculty.jpg" style="border-radius: 30px">
</span>
<span style="margin-left: 105px"><img src="images/admin.png"></span>
<br><br><br>
<span style="margin-left: 300px"> <a href="index.php?info=login"> <input type="button" value="Student Login" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>

<span style="margin-left: 195px"> <a href="index.php?info=faculty_login"> <input type="button" value="Faculty Login" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>

<span style="margin-left: 180px"> <a href="admin"> <input type="button" value="Admin Login" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span><br><br><br>
<span style="margin-left: 613px;"> <a href="index.php?info=registration"> <input type="button" value="Create Account" style="width: 250px;height: 60px;background-color: #36a832;color: white;border-radius: 5px;font-weight: bold" ></a></span>
			</div>


			</div>
			
				<?php } ?>
            </div>
            
    </div>
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:20px;height:60px; background:#0366fc">
		<span style="color:#FFFFFF">Powerd By <a href="http://gpambad.ac.in/" style="text-decoration: none;font-weight:bold;color: white">GPA Students</a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
