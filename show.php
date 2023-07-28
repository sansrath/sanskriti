
<?php
include("connection.php");
   
   if(isset($_GET['Location']) && $_GET['Location']>0 &&  isset($_GET['t']) && $_GET['t']!='')
   {
    $Location=mysqli_real_escape_string($conn,$_GET['Location']);
    $t=mysqli_real_escape_string($conn,$_GET['t']);
    if($t=="places"){
      $table="places";
     $sql="SELECT Location, State,Amenities,RentPrice FROM $table WHERE Location='$Location'";
    }else{
      header('location:index.php');
      die();
    }
    $res=mysqli_query($conn,$sql);
    if($res){
      $row=mysqli_fetch_assoc($res);
      echo "<h2>".$row['Location']."</h2>";
      echo "<h2>".$row['State']."</h2>";
      echo "<h2>".$row['Amenities']."</h2>";
      echo "<h2>".$row['RentPrice']."</h2>";
      }else{
      header('location:index.php');
      die();
    }
   }

     
      
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
 
<form action="" method="POST" enctype ="multipart/form-data">
  <!--  General -->
    <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
      <input type="text" id="name"  name="name"  required>
      <label for="name">Name</label>
    </div>
    <div class="controls">
      <input type="text" id="email"  name="email"  required>
      <label for="email">Email</label>
    </div>       
    <div class="controls">
      <input type="tel" id="phone" name="phone"  required>
      <label for="phone">Phone</label>
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
           <input type="text" id="address"  name="address"  required>
           <label for="address">Address</label>
          </div>          
        </div>
        
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city"  name="city"  required>
            <label for="city">City</label>
          </div>         
        </div>
        
      <div class="controls">
        <input type="text" id="country"  name="country"  required>
        <label for="country">Country</label>
      </div>
  </div>
 
  <div >
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive"  name="arrive" value="<?php echo date('Y-m-d'); ?>"  required>
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart"  name="depart" value="<?php echo date('Y-m-d'); ?>"  required >
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit" name="people"  required>&nbsp;&nbsp;People</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="deluxe" selected>With Bathroom</option>
        <option value="Zuri-zimmer">Without Bathroom</option>
      </select>
      <label for="fruit" name="room" required>Room</label>
     </div>     
    </div>

 
      
     </div>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments"  required>Comments</label>
          </div>
          <button type="submit" class="Bookbt"  class="floatLabel"value="Book" name="Book" >Book</button>
      </div>  
  
</form>
</body>
</html>
<?php
   include("connection.php");
?>

<?php
   if($_POST['Book']){
     $name = $_POST['name'];
     $email=$_POST['email'];
     $ph=$_POST['phone'];
     $add=$_POST['address'];
     $city = $_POST['city'];
     $country=$_POST['country'];
     $arrive=$_POST['arrive'];
     $dep=$_POST['depart'];
     $people = $_POST['people'];
     $room=$_POST['room'];
     $comment=$_POST['comments'];


     if($name != "" && $email != "" && $ph != "" && $add != "" && $city != "" && $country != ""
      && $arrive!= "" && $dep != "" && $people != "" && $room != "" && $comment != "" )
   {
     $query = "INSERT INTO booking VALUES('$name','$email','$ph','$add','$city','$country','$arrive',
     '$dep','$people','$room','$comment')";
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