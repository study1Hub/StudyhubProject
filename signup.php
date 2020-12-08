<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<!-- PHP CODE FROM HERE -->
<?php
        if(isset($_POST['create'])){
            echo 'form submitted successfully';
        }
?>
</div>



<div class="mynav">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="../prc/contact us.html">Contact Us</a></li>
    </ul>
</div>
<div class="sign-up-form">
    <img src="../images/user icon.png">
    <h1> Sign Up Now</h1>
    <form action="registration.php" method="post">


        <!--<label for="firstname" ><b>First Name</b></label>-->
        <input class="form-control input-box"  id="firstname" type="text" name="firstname" required placeholder="first name">

        <input class="form-control input-box" id="lastname"  type="text" name="lastname" required placeholder="last name">

        <input class="form-control input-box" id="email"  type="email" name="email" required placeholder="email">

        <input class="form-control input-box" id="password"  type="password" name="password" required placeholder="password">

        <input class="btn btn-primary signUp-btn" type="submit" id="register" name="create" value="Sign Up">


        <!-- copy style class from here to above -->
        <!--
        <input type="text" name="fname" class="input-box" placeholder="First Name">
        <input type="text" name="lname" class="input-box" placeholder="Last Name">
        <input type="email" name="email" class="input-box" placeholder="your email">
        <input type="password" name="password" class="input-box" placeholder="Password">
        <p><span><input type="checkbox"></span>I agree to the terms of service</p>

        <button type="button" name="create" class="signUp-btn">Sign Up</button>
        <input type="submit" name="create" value="signUp">
        -->
         <hr>
         <p class="or">OR</p>
      <button type="button" class="facebook-btn">Login with Facebook</button>
        <p>Do you have an account ? <a href="login.php">Sign In</a></p>
    </form>
</div>
</body>
</html>

