
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="register.css">
</head>

<body>
<?php
session_start();
$massage = '';
if (isset($_SESSION['email_alert'])) {
  $massage = 'Email ID Already Exists';
}
?>

  <div id="frm">
  <form name="f1" action="action_page.php" onsubmit="return validation()" method="post">
      <div class="container">
        <h1>Register</h1>
        <h1 class="alert"><?php echo ("$massage") ?></h1>

        <p class="title">Please fill in this form to create an account.</p>

        <p>
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
        </p>
        <p>
          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="email" id="email" required>
        </p>
        <p>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        </p>
        <p>
          <label for="pswrepeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required>
        </p>
        <p class="title">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
        <p class="title">Already have an account? <a href="/tt/loginpage/loginpage.php">Sign in</a>.</p>

      </div>
    </form>
  </div>

  <script>
  function validation() {
  var psw = document.f1.psw.value;
  var pswrepeat = document.f1.pswrepeat.value;
  if (psw != pswrepeat) {
    alert("Password Doesn't Match");
    return false; // Prevent form submission
  }
  return true; // Allow form submission if validation passes
}

  </script>
  <?php unset($_SESSION['email_alert']); ?>
</body>

</html>