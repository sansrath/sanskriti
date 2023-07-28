

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
.button {width: 1000%;}
</style>
</head>
<body>
<header>
  <h2>City</h2>
</header>
<section>
  <nav>
   <a><img src="images/home2.jpg" width = "350" height = "250"  /></a>
  </nav>
  <article>
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
      echo "<h2 >".$row['Location']."</h2>";
      echo "<h2>".$row['State']."</h2>";
      echo "<h2>".$row['Amenities']."</h2>";
      echo "<h2>".$row['RentPrice']."</h2>";
      }else{
      header('location:index.php');
      die();
    }
   }
?>
  </article>
</section>

<footer>
<button><a href="show1.php"><input type="submit" name="Book" value="Book" style="background: White;" width="100"> </a>
</button>
</footer>
</body>
</html>
