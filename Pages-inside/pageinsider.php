<?php

$host = "localhost";
$user = "root";
$password = '';
$db_name = "book";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}


if (isset(($_GET['id']))) {
    $mm = $_GET['id'];

    $sql = "SELECT * FROM destination WHERE id ='$mm'";
    $result = mysqli_query($con, $sql);
    $rt = mysqli_fetch_array($result);

    // $id =$rt['id'];
    $destination = $rt['destination'];
    $description = $rt['description'];
    $aka1 = $rt['aka1'];
    $image = $rt['image'];
    $related_pic1 = $rt['related pic1'];
    $related_pic2 = $rt['related pic2'];
    $related_pic3 = $rt['related pic3'];
    $related_pic4 = $rt['related pic4'];

    $base64Image = 'data:image/jpg;base64,' . base64_encode($image);
    // echo '<img src="' . $base64Image . '" alt="Image" style="width: 100%;">';
    $base64Image1 = 'data:image/jpg;base64,' . base64_encode($related_pic1);
    $base64Image2 = 'data:image/jpg;base64,' . base64_encode($related_pic2);
    $base64Image3 = 'data:image/jpg;base64,' . base64_encode($related_pic3);
    $base64Image4 = 'data:image/jpg;base64,' . base64_encode($related_pic4);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageinsider.css">
    <title>travel and tourism</title>
</head>

<body>
    <nav class="navbar">
        <ul class="navlist">
            <div class="right">Travel&Tourism</div>
            <li class="home"><a href="/tt/index.php">Home</a></li>
        </ul>
    </nav>
    <h1><?php echo $destination ?></h1>
    <section>
        
        <div class="main">
            <?php echo '<img class="img-fluid" src="' . $base64Image . '" alt="Image" ;">' ?>
            <div class="contain">
                <h3>Description</h3>
                <p><?php echo $description ?> </p>
                <h3>Also Known as</h3>
                <ul>
                    <li><?php echo $aka1 ?></li>
                    <!-- <li>$aka2</li> -->
                    
                </ul>
            </div>
            <!-- <button class="btn"><a href="/tt/book/book.html">BOOK NOW</a></button> -->
            <div class="dp">
                <h3 class="rp">Related Pictures</h3>
                <div class="rp1"><?php echo '<img class="img-fluid" src="' . $base64Image1 . '" alt="Image" ;">' ?>
                    <?php echo '<img class="img-fluid" src="' . $base64Image2 . '" alt="Image" ;">' ?>
                    <?php echo '<img class="img-fluid" src="' . $base64Image3 . '" alt="Image" ;">' ?>
                    <?php echo '<img class="img-fluid" src="' . $base64Image4 . '" alt="Image" ;">' ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="foot">Copyright © Travel And Tourism</footer>
</body>

</html>