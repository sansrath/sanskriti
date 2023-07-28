
<?php
   include("connection.php");
   if(isset($_POST['submit'])){
	echo $str=$_POST['str'];

}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<Body>   

<div class="searchbox">  
<form action="" method="POST">   
<input type="text" placeholder=" Search...." name="str">   
<button type="submit" name="submit" value="search">Submit</button>   
</form>  
</div>   
</Body>  
</html>