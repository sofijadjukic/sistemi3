<?php
include_once 'nasvakom.php';
echo "Student signup page ";
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stillogreg.css">
    <link rel="stylesheet" href="dd.css">
</head>
<body>
<div class="header">
            <ul>
                <li> <a href="login.php">Login</a></li>
                <li> <a href="signup.php">Register</a></li>
                <li> <a href="adminlg.php">Admin</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
                            </ul>
                        
            
</div>
<div class="middle">
<section class="signup-form">
    <h1> Insert your information</h1>
        <form action="includes/signupDODATNO.php" method="post"> 
         <p> Username </p>   <input type="text" name="ime" > 
         <p> Email </p>   <input type="text" name="mejl" > 
         <p> Password </p>  <input type="password" name="lozinka" >  
         <p>Repeat password </p>   <input type="password" name="ponovolozinka">  <br>
         <button type="submit" name="submit" class="button">Done </button>
        </form>
<h3> Already have an account? <a href="login.php"> click here!</a> </h3>
</section>
</div>



            
</body>
</html>
