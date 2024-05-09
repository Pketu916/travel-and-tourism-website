<?php
session_start();
?>
<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "book";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
  die("Failed to connect with MySQL: " . mysqli_connect_error());
}


$email = $_POST['email'];
$psw = $_POST['psw'];



$sql = "select *from register where email = '$email' and psw = '$psw'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

// $result = mysqli_query($con, $sql);  
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
// $count = mysqli_num_rows($result);
$sql1 = "SELECT name FROM register WHERE email='$email' ";
$result = mysqli_query($con, $sql1);
$rt = mysqli_fetch_array($result);

if ($count == 1) {
  $name = $rt['name'];
  $_SESSION["name"] = $name;
  echo '<script>';
  // echo 'alert("Login successful");';
  echo 'window.location.href = "/tt/index.php";';
  echo '</script>';
  // exit();
  // header("location:/tt/index.php");
  //  echo "<h1><center> Login successful </center></h1>";  
} else {
  // echo 'alert("Sent successfully!");';
  // echo "<h1> Login failed. Invalid username or password.</h1>";  

  echo '<script>';
  echo 'alert("Login failed. Invalid username or password! try again");';
  // echo 'window.location.href = "loginpage.php";';
  echo 'window.location.href = "/tt/index.php";';
  echo '</script>';
  exit();
}

?>  