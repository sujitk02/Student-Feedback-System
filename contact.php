<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8"><br><br><br>
     <caption><h2 align="center">Contact Us</h2></caption>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<br><br><br><br>
                </form>
            </div><br><br><br><br><br><br>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    Ambad,<br>Jalna(Dt),Maharashtra-431204<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: 7420969116</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="sujeet:sujeetk@gmail.com">sujeetk@gmail.com</a>
                </p>
               
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.youtube.com"><i class="fa fa-youtube-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
    <br/><br/>
    
    </div>