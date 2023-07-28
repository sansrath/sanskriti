<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link rel="stylesheet" href="admin1.css" />
  </head>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
      <img src="images/logo2.png" width = "300" height = "200" title="logo" />
        
      </div>
      

      <!-- (A2) MENU ITEMS -->
      <a href="#" class="current">
      <a href="display.php"><i class="ico">&#9733;</i>
        <i class="txt">Registration Details</i></a>
      </a>
      
        <a href="booking.php"><i class="ico">&#9728;</i>
        <i class="txt">Booking Details</i></a>
      
      <a href="#">
        <i class="ico">&#9737;</i>
        <i class="txt">Owners Details</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
      <center><h1 style="background-color:pink;">My Admin</h2><center>

    
    <?php
//error_reporting(0);

$query = "SELECT * FROM user";
$data = mysqli_query($conn,$query);

 $total = mysqli_num_rows($data); 
 
 $result = mysqli_fetch_assoc($data); 
 //echo $total;
  $result['Name'];
  $result['Email'];

 if($total != 0)
 {
    ?>
    <h2 style="background-color:powderblue;">Users Registration Deatils</h2>
    <html>
    <table border="1" cellsspacing="6">
        <tr>
             <th width="10%">Name</th> 
            <th width ="20%">Email</th>
        </tr>
        </html>
 <?php
   while ($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <th>".$result['Name']."</th>
        <th>".$result['Email']."</th>
    </tr>
    ";
    }
 }
 else{
    echo "no records found";
 }


?>
    </main>

  </body>
</html>



