<?php

$host = "localhost";
$user = "root";
$password = '';
$db_name = "book";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$place = $_POST['place'];
$name = $_POST['name'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$contact_num = $_POST['contact_num'];
$email = $_POST['email'];
$package = $_POST['package'];
$totalCost = $_POST['totalCost'];
@$your_query = $_POST['your_query'];

$sql = "INSERT INTO inquiry (place, name, adults, children, contact_num, email, package,totalCost, your_query) VALUES ('$place', '$name', '$adults', '$children', '$contact_num', '$email', '$package','$totalCost', '$your_query')";

$result = mysqli_query($con, $sql);
?>

<html>
<head>
    <script>
        var contact_num = "<?php echo $contact_num; ?>";

        if (contact_num.length != 10) {
            alert("Please enter a valid 10-digit phone number");
            window.location.href = 'book.html';

        } else {
            alert("Your inquiry is sent successfully");
            alert("Our team will contact you within 12 hours for confirmation");
            window.location.href = '/tt/index.php';
        }
    </script>
</head>
<body>
    <!-- Your HTML content goes here -->
</body>
</html>
