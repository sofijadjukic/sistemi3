<?php

if (isset($_POST["submit"])) {
$ime=$_POST["ime"];
$mejl=$_POST["mejl"];
$lozinka=$_POST["lozinka"];
$ponovoloz=$_POST["ponovolozinka"];

require_once 'bazakonekcija.php';
require_once 'testovi.php';

// some fields are not filled
if (missingfields($ime,$mejl,$lozinka,$ponovoloz) !== false) {
header("location: ../signup.php?error=missingfield1");
exit();
}

// matching password

if (samepass($lozinka,$ponovoloz) !== false) {
    header("location: ../signup.php?error=passwordmissmatch");
    exit(); 
}

// already taken username

if (sameun($conn, $ime)!== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
}

AddNewUser($conn,$ime,$mejl,$lozinka);}

else {header("location: ../signup.php");
    exit();}


