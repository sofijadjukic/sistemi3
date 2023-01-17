<?php
require_once 'bazakonekcija.php';

if (isset($_POST["submit"])) {
    $lozinka=$_POST["pass"];
    $s="sofijajenajbolja";


if ($s === $lozinka) {
    session_start();
    header("location: ../receptiadm.php");
    exit();
}
else {
    header("location: ../adminlg.php?error=wrongpassword");
    exit();
} 

}
    
