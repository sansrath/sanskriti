<?php
   include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="booking form"><h1> Booking Form </h1></div>
        <div id="name">
            <h2 class= "name ">Name</h2>
            <input class="name" type="text" name="name">
            <h2 class= "name ">Email</h2>
            <input class="email" type="text" name="email">
            <h2 class= "name ">Phone</h2>
            <input class="phone" type="number" name="phone">
            <h2 class= "name ">Address</h2>
            <input class="address" type="text" name="address">
            <h2 class= "name ">City</h2>
            <input class="city" type="text" name="city">
            <h2 class= "name ">Country</h2>
            <input class="country" type="text" name="country">
            
   
    <div>
          <button type="submit" class="Bookbt"  class="floatLabel"value="Book" name="Book" >Book</button>
      </div>  


</form>

</body>
</html>
<?php
   if($_POST['Book']){
     $name = $_POST['name'];
     $email=$_POST['email'];
     $ph=$_POST['phone'];
     $add=$_POST['address'];
     $city = $_POST['city'];
     $country=$_POST['country'];
    


     if($name != "" && $email != "" && $ph != "" && $add != "" && $city != "" && $country != "" )
   {
     $query = "INSERT INTO book VALUES('$name','$email','$ph','$add','$city','$country')";
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
        echo "<script>alert('fill the form first ');</script>";
     } 
   }
?>