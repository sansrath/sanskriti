
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
     <
     <img src="data:images;base64,'.base64_encode($row[images]).'"alt="Image">
</body>
</html><?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css" type="text/css"></link></script>
   <script src="./login.js"></script>
  <title>Document</title>
</head>
<body>
  <!-- A button to open the popup form -->
<button class="open-button" onclick="openForm()">Open Form</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn" name="login">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login'])){
 $email=$_POST['email'];
  $pass=$_POST['password'];
  

  $query = "SELECT * FROM user WHERE Email='$email' && Password='$pass' ";
  $data = mysqli_query($conn,$query);

  $total=mysqli_num_rows($data);
if($total!=0){
  
  $_SESSION['email']=$email;
  header('location:index.php');
 }
 else{
  
  echo "not login ok";
 }
}
?>



