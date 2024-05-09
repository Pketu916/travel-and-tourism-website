<?php
session_start();

?>
<html>
<head>
    <title>PHP login system</title>

    <link rel="stylesheet" type="text/css" href="loginpage.css">
</head>

<body>
    <div id="frm">
        <h1>Login</h1>
        <form name="f1" action="authentication.php" method="POST"  >
            <p>
                <label for="email"> Email: </label>
                <input type="email" placeholder="Enter register email" id="email" name="email" require/>
            </p>
            <p>
                <label> Password: </label>
                <input type="password" placeholder="Enter your password" id="psw" name="psw" require/>
            </p>
            <p class="login">
                <input type="submit" id="btn" value="Login" />
            </p>
            <div class="signup">
                <p class="last">Don't Have An Account?<a href="/tt/register/register.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>

</html>