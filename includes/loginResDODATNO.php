<?php

if (isset($_POST["submit2"])) {
    $ime=$_POST["name"];
    $lozinka=$_POST["pass"];
   
    
    require_once 'bazakonekcija.php';
    require_once 'funkcije.php';


    if (missingfieldlog($ime,$lozinka) !== false) {
        header("location: ../loginRes.php?error=emptyinp");
        exit();
        }

        ExistingUser($conn, $ime, $lozinka);
}

else {
    header("location: ../log.php");
    exit(); 
}