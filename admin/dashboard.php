<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">
<caption><h1 align="center"><u>Admin Dashboard</u></h1></caption>
    <div style="margin-top: 120px">

    <span style="margin-left: 250px"> <a href="dashboard.php?info=add_faculty"> <input type="button" value="Add Faculty" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>


    <span style="margin-left: 250px"> <a href="dashboard.php?info=show_faculty"> <input type="button" value="Manage Faculty" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>

    <span style="margin-left: 250px"> <a href="dashboard.php?info=display_student"> <input type="button" value="Manage Student" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>


</div>

<div style="margin-top: 120px">

    <span style="margin-left: 250px"> <a href="dashboard.php?info=feedback"> <input type="button" value="Feedback" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>

     <span style="margin-left: 250px"> <a href="dashboard.php?info=update_password"> <input type="button" value="Update Password" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>

      <span style="margin-left: 250px"> <a href="dashboard.php?info=contact"> <input type="button" value="Contact Page" style="width: 160px;height: 50px;background-color: #fc0366;color: white;border-radius: 5px;font-weight: bold" ></a></span>
</div>

<div style="margin-top: 120px">

    
   
     <span style="margin-left: 660px"> <a href="logout.php"> <input type="button" value="Logout" style="width: 160px;height: 50px;background-color: green;color: white;border-radius: 5px;font-weight: bold" ></a></span>


</div>

<div style="margin-top: 50px">
    
</div>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                    <?php 
                                @$id=$_GET['id'];
                                @$info=$_GET['info'];
                                if($info!="")
                                {
                                    if($info=="add_faculty")
                                        {
                                            include('add_faculty.php');
                                        }
                                        
                                    elseif($info=="show_faculty")
                                        {
                                            include('show_faculty.php');
                                        }
                                        
                                        
                                    elseif($info=="edit_faculty")
                                        {
                                            include('edit_faculty.php');
                                        }   
                                        
                                    elseif($info=="display_student")
                                        {
                                            include('display_student.php');
                                        }
                                    
                                        
                                        
                                    elseif($info=="contact")
                                        {
                                            include('contact.php');
                                        }   
                                    elseif($info=="feedback")
                                        {
                                            include('feedback.php');
                                        }
                                        elseif($info=="feedback_average")
                                        {
                                            include('feedback_average.php');
                                        }       
                                        
                                        
                                    
                                        
                                        
                                        
                                        else if($info=="update_password")
                                        {
                                        include('update_password.php');
                                        }
                                    
                                }
                                else
                                {
                                include('dashboard_home.php');
                                }
                            
                            
                            ?>
                
                </div>

            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
