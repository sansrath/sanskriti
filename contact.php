<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Homestay Website | Login/signup </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo2.png" width = "180" height = "150" title="logo" /></a>
				</div>
				<div class="contact-info">
					<p class="phone">Call us : <a href="#"><strong>7024457159</strong></a></p>
					<!-- <p class="gpa">Gpa : <a href="#">View map</a></p> -->
					<p class="code">BROUGHT TO YOU BY: <strong>COZYNEST</strong></p>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!-- <li><a href="about.html">About</a></li> -->
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
</div>
				<centre><div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Register</h3>
					    <form method="POST" action="">
						
               
    
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeatpassword" id="repeatpassword" required>
    

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" value="Register" name="Register" >Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<a href="login.php"><input type="submit" name="login" value="LogOut" style="background: blue;"> </a>
    
					    </form>

				    </div></centre>
  				</div>				
			  </div>
			</div>
					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				
				<div class="box">
					 
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
			<p>"THIS PROJECT IS BROUGHT TO YOU BY COZYNEST"</a></p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>
<?php
   include("connection.php");
?>

<?php
   if($_POST['Register']){
     $name = $_POST['name'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $rp=$_POST['repeatpassword'];

     if($name != "" && $email != "" && $pass != "" && $rp != "")
   {
     $query = "INSERT INTO user VALUES('$name','$email','$pass','$rp')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted into database";

    }
    else{
        echo "failed";
    }
     }
     else{
        echo "fill the form first";
     }
   }
?>