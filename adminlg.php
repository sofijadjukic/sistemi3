<?php
include_once 'nasvakom.php';
echo "Student login page ";
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stillogreg.css">
</head>
<body>
<div class="header">
            <ul>
                <li> <a href="login.php">Login</a></li>
                <li> <a href="signup.php">Register</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
                            </ul>
            
</div>
<div class="middle">
<section class="signup-form">
    <h1> Welcome admin</h1>
        <form action="includes/adminlogDODATNO.php" method="post"> 
         <p> Admin password </p>  <input type="password" name="pass" placeholder="Enter password">  <br>
         <button type="submit" name="submit" class="button">Done </button>
        </form>
<h3> Don't have an account? <a href="signup.php"> click here!</a> </h3>
</section>
</div>
            
</body>
</html>