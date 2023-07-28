<?php
  $folder="images/";
  

$filename= $_FILES["file"]["name"];
$tempname= $_FILES["file"]["tmp_name"];

 $folder="images/".$filename;

 echo $folder;

 move_uploaded_file($tempname,$folder);

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
<form action="" method="POST" enctype ="multipart/form-data">
  <div class="container">
    
    
    <!-- <hr>
    <label for="Location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" id="location" required>
    <label for="State"><b>State</b></label>
    <input type="text" placeholder="State" name="State" id="State" required>

    <label for="Rent Price"><b>Rent Price</b></label>
    <input type="text" placeholder="Enter Rent Price" name="rentprice" id="rentprice" required>

    <label for="Contact No."><b>Contact No.</b></label>
    <input type="number" placeholder="Enter Contact No. " name="contact" id="contact" required>

    <label for="Amenities"><b>Amenities</b></label>
    <input type="text" placeholder="Amenities" name="Amenities" id="Amenities" required> -->

    <label for="file"><b>Choose File</b></label>
    <input type="file"  name="file" value="Upload file" required>
    <hr>

    
    <button type="submit" class="submitbt" value="submit" name="submit" >submit</button>
  </div>

  
</form>
    
</body>
</html>