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
        <i class="txt">MY ADMIN</i>
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

      
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <center><h1 style="background-color:pink;">My Admin</h2><center>
      <?php
      $query = "SELECT * FROM book";
$data = mysqli_query($conn,$query);

 $total = mysqli_num_rows($data); 
 
 $result = mysqli_fetch_assoc($data); 
 //echo $total;
  $result['Name'];
  $result['Email'];
 $result['Phone'];
 $result['Address'];
  $result['City'];
 $result['Country'];


 if($total != 0)
 {
    ?>
    <h2 style="background-color:powderblue;">Booking Details</h2>
    <html>
    <table border="1" cellsspacing="7">
        <tr>
             <th width="10%">Name</th> 
            <th width ="20%">Email</th>
            <th width="10%">Phone</th> 
            <th width ="20%">Address</th>
            <th width="10%">City</th> 
            <th width ="20%">Country</th>
        </tr>
        </html>
 <?php
   while ($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <th>".$result['Name']."</th>
        <th>".$result['Email']."</th>
        <th>".$result['Phone']."</th>
        <th>".$result['Address']."</th>
        <th>".$result['City']."</th>
        <th>".$result['Country']."</th>
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