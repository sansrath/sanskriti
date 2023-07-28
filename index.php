
<?php
   include("connection.php");
   if(isset($_POST['submit'])){
  
   $str=mysqli_real_escape_string($conn,$_POST['str']);
	 $sql="SELECT Location, State,Amenities,RentPrice,'places' FROM places where 
	 Location like '%$str%' or State like '%$str%' or Amenities like '%$str%'
	  or RentPrice like '%$str%'

	
	 UNION
	 SELECT Location, State,Amenities,RentPrice,'places' FROM places where 
	 Location like '%$str%' or State like '%$str%' or Amenities like '%$str%'  or RentPrice like '%$str%' ";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
        echo "<a href='show2.php?Location=".$row['Location']."&t=".$row['places']."'>".$row['State']."</a>";
	    }
	} 
	else{
		echo "no";
	}
}
?> 
 <!DOCTYPE HTML>
<html>
	<head>
		<title>Homestay Website | Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		 
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.html"><img src="images/logo2.png" width = "100" height = "100" title="logo" /></a>
						</div>
<style>  
.searchbox {  
float: left;  
}  
input[type=text] {  
padding: 6px;  
margin-top: 8px;  
font-size: 17px;  
border: none;  
}  
.searchbox button {  
  
padding: 8px;  
margin-top: 10px;  
margin-left: 10px;  
background: orange;  
font-size: 20px;  
border: none;  
cursor: pointer;  
}  
.searchbox button:hover {  
background: blue;  
}  
.searchbox{
    width: 50%;
    text-align:center;
}
</style>  
 
<Body>   

<div class="searchbox">  
<form action="" method="POST">   
<input type="text" placeholder=" Search...." name="str">   
<button type="submit" name="submit" value="search">Submit</button>   
</form>  
</div>   
</Body>  
   
						<div class="contact-info">
							<p class="phone">Call us : <a href="#"><strong>7024457519</strong></a></p>
							<!-- <p class="gpa">Gpa : <a href="#">View map</a></p> -->
							<p class="code">BROUGHT TO YOU BY: <strong>COZYNEST</strong></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<!-- <li><a href="about.html">About</a></li> -->
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="owner.php">Owner</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
						    <ul class="rslides">
						      <li><img src ="images/ghar.jpg" width="100"></li>
						      <li><img src="images/ghar2.jpg" ></li>
						      <li><img src="images/bedroom.jpg" ></li>
						    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
			<!---start-content----->
			<div class="content">
				<div class="quit">
					<p><span class="start"></span>Leave one home behind, get 1000 on the <span class="end"> way </span></p>
				</div>
					<div class="content-grids">
						<div class="wrap">
						
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/icon2.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>24x7 phone support</h3>
								<!-- <p>"DESCRIPTION"</p>
								<a href="#">Read More</a> -->
							</div>
							<div class="clear"> </div>
						</div>
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/iocn3.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>Best Home Services</h3>
								<!-- <p>"DESCRIPTION"</p>
								<a href="#">Read More</a> -->
							</div>
							<div class="clear"> </div>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
				<div class="content-box">
					<div class="wrap">
					<div class="content-box-left">
						<div class="content-box-left-topgrid">
							<h3>Welcome to CozyNest</h3>
							<p> ' Feel Like Home :)</p>
							<p> Hotel's Description</p>	
							
							<span>For more information about Homestay, Call 7024457519</span>
							<h3>Take vacations, and go as many places as you can.</h3>
						</div>
						<div class="content-box-left-bootomgrids">
							<div class="content-box-left-bootomgrid">
								<h3>Homestay Rooms</h3>
								
								<a href="#"><img src="images/home1.jpg" title="image-name" /></a>
							</div>
							<div class="content-box-left-bootomgrid">
								<h3>Beautifull Rooms</h3>
								
								<a href="#"><img src="images/home2.jpg" title="image-name" /></a>
							</div>
							<div class="content-box-left-bootomgrid lastgrid">
								<h3>Executive Rooms</h3>
								
								<a href="#"><img src="images/home3.jpg" title="image-name" /></a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="content-box-right">
						<div class="content-box-right-topgrid">
							<h3>To days Specials</h3>
							<a href="#"><img src="images/slider1.jpg" title="imnage-name" /></a>
							<h4>Super Discount Offer</h4>
							<p>"DESCRIPTION"</p>
							
						</div>
						<div class="content-box-right-bottomgrid">
							
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
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


