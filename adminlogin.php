<?php
include("connection.php");
?>
<?php
session_start();
?>

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
        <h2>Owner Login</h2>
        <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Admin name" name="name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" class="btn" name="login">Login</button>
      </form>
    </div>
    <div class="image">
      <img src="village.jpg" width="300px">
    </div>
  </div>

   </body>
   </html>
   <?php



if(isset($_POST['login'])){
 $name=$_POST['name'];
  $pass=$_POST['password'];
  echo "chl rha h";

  $query = "SELECT * FROM owner WHERE Name='$name' && Password='$pass' ";
  $data = mysqli_query($conn,$query);

 $total=mysqli_num_rows($data);

 // echo $total;
 if($total!=0){
  echo "Hello Sansi";
  $_SESSION['name']=$name;
  header('location:owner1.php');
 }
 else{
  
  echo "not login ok";
 }




}
?>