<?php
require_once 'bazakonekcija.php';

if (isset($_POST["button"])) {
    $tekst=$_POST["glavni"]; 
    $naslov=$_POST["naslov"]; 
    $name=$_POST["name"]; 
    $price=intval($_POST["price"]); 
    $datum=$_POST["datum"]; 
    $date= date('Y-m-d', strtotime($datum));
    $s = "INSERT INTO novideals (title,tekst,price,resname,validdate) VALUES ('$naslov', '$tekst', '$price', '$name', '$date')" ;
    mysqli_query($conn,$s);
    header("location: ../newOffer.php");
}



