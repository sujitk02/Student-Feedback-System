<?php
	include('../dbconfig.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($conn,"select user and pass from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$email;
				header('location:dashboard.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Section</title>

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

    <div class="container" style="margin-top: 130px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="admin@gmail.com">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="admin" name="pass" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<span style="margin-left: 600px"> <a href="../index.php"> <input type="button" value="Homepage" style="width: 160px;height: 50px;background-color: #32a4a8;color: white;border-radius: 5px;font-weight: bold" ></a></span>

    <!-- jQuery -->
    <script src="../../demo/css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../demo/css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../..demo/css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../demo/css/css/sb-admin-2.js"></script>

</body>

</html>
