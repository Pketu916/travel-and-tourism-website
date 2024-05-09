<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "book";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

$sql = "INSERT INTO contactus(name, phone, email, text) VALUES ('$name', '$phone', '$email', '$text')";

$result = mysqli_query($con, $sql);

if ($result) {

    echo '<script>';
    echo 'alert("Sent successfully!");';
    echo 'window.location.href = "index.php";'; // Redirect to index.php
    echo '</script>';
    exit();
}
