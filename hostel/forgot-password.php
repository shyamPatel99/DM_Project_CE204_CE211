<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email_post=$_POST['email'];


$stmt=$mysqli->prepare("SELECT firstName,email,token FROM userregistration WHERE (email=?) ");
				$stmt->bind_param('s',$email_post);
				$stmt->execute();
				$stmt -> bind_result($username,$email,$token);
				$rs=$stmt->fetch();
				if(!$rs)
				{
					
					echo "<script>alert('Invalid Email/Contact no or password');</script>";				
				}

			
			if($email==$email_post) {
				$to = $email_post;
				 $txt = "Hi, $username. Click http://localhost:82/project/DM_Project_CE204_CE211/hostel/reset_password.php?token=$token to reset the password";	
				//$txt = "Hi, $username. Click http://localhost:82/project/hostelsystem/hostel/reset_password.php?token=$token to reset the password";
				$headers = "From: 20ceuod016@ddu.ac.in";
				$subject = "Reset Password";
				 $msg=mail($to,$subject,$txt,$headers);
				if($msg){
				  $_SESSION['msg'] = 'password link sent';
				}
				else{
				echo "mail was not sent!!";			}
			  } 
							else{
								echo 'invalid userid';
							}
			}	
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>User Forgot Password</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head
<body>
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Forgot Password</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Your Email</label>
									<input type="email" placeholder="Email" name="email" class="form-control mb">
									<!-- <label for="" class="text-uppercase text-sm">Your Contact no</label>
									<input type="text" placeholder="Contact no" name="contact" class="form-control mb"> -->
									

									<input type="submit" name="login" class="btn btn-primary btn-block" value="Send Mail" >
								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="index.php" class="text-light">Sign in?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>