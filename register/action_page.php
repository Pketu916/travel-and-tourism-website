<?php
session_start();
include('connections.php');

@$name = $_POST['name'];
@$email = $_POST['email'];
@$psw = $_POST['psw'];
@$pswrepeat = $_POST['pswrepeat'];

$sql = "SELECT * FROM register WHERE email='$email'";
$result = mysqli_query($con, $sql);
$present = mysqli_num_rows($result);

if ($present > 0) {
    echo '<script>';
    echo 'alert("Email ID already exists. Try To Login.");';
    echo 'window.location.href = "/tt/index.php";'; // Redirect to registration page
    echo '</script>';
    // exit();
} else {
    $query = "INSERT INTO register(name, email, psw) VALUES (('$name'),('$email'),('$psw'))";
    $result = mysqli_query($con, $query);

    echo '<script>';
    echo 'alert("Registration is Successful");';
    echo 'window.location.href = "/tt/index.php";'; // Redirect to login page
    echo '</script>';
    // exit();
}
?>
