
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="container">
    <div class="myform">
    <form action="" method="POST">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="admin">
        <input type="password" placeholder="Password" name="passw">
        <button type="submit" name="login" value="login">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="village.jpg" width="300px">
    </div>
  </div>

   </body>
   </html>
   <?php
   include("connection.php");
?>
<<?php
   if($_POST['login']){
     $name = $_POST['admin'];
     
     $pass=$_POST['passw'];
     

     if($name != ""  && $pass != "" )
   {
     $query = "INSERT INTO admin VALUES('$name','$pass')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted into database";
        header('location:display.php');
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