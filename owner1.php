<?php
include("connection.php");
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="owner1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<form action="" method="POST" enctype ="multipart/form-data">
  <div class="container">
    
    
    <hr>
    <label for="Location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" id="location" required>
    <label for="State"><b>State</b></label>
    <input type="text" placeholder="State" name="State" id="State" required>

    <label for="Rent Price"><b>Rent Price</b></label>
    <input type="text" placeholder="Enter Rent Price" name="rentprice" id="rentprice" required>

    <label for="Contact No."><b>Contact No.</b></label>
    <input type="number" placeholder="Enter Contact No. " name="contact" id="contact" required>

    <label for="Amenities"><b>Amenities</b></label>
    <input type="text" placeholder="Amenities" name="Amenities" id="Amenities" required>

    <label for="file"><b>Choose File</b></label>
    <input type="file"  name="file" value="Upload file" required>
    

    
   <center> <button type="submit" class="submitbt" value="submit" name="submit"  width="200">submit</button></center>
  </div>

  
</form>

</body>
</html>

<?php
error_reporting(0);
if($_POST['submit']){

    $filename= $_FILES["file"]["name"];
$tempname= $_FILES["file"]["tmp_name"];

 $folder="images/".$filename;

 move_uploaded_file($tempname,$folder);
     $loc = $_POST['location'];
     $s = $_POST['State'];
     $rent=$_POST['rentprice'];
     $con=$_POST['contact'];
     $am=$_POST['Amenities'];
    
$query = "INSERT INTO places
VALUES('$loc','$s','$rent','$con','$am','$folder')";
$data = mysqli_query($conn,$query);
if($data)
    {
        echo "data inserted into database";
    }
    else{
        echo "failed";
    }
     }
    
     
   
?>