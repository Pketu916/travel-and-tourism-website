<?php

include("connection.php");
  

   if(isset(($_GET['id']))){
    $mm = $_GET['id'];
 
   $sql= "SELECT * FROM register WHERE id ='$mm'";
   $result = mysqli_query($con, $sql);
   $rt = mysqli_fetch_array($result);

   // $id =$rt['id'];
   $name =$rt['name'];
}
?>

<html>
<head>
   <title>Profile Page</title>
</head>
<body>
   <h1>Welcome, <?php echo $name; ?></h1>
   <!-- Display other profile information here -->
</body>
</html>
