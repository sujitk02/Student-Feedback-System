<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty/index.php?page=feedback');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	<caption><h2 style="margin-top: 180px" align="center">Faculty Login Form</h2></caption><br>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control" placeholder="rushi@gmail.com" /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control" placeholder="rushi" /></div>
	</div>
	<div class="row" style="margin-top:20px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" style="width: 120px;height: 40px" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>
</div>
</div>