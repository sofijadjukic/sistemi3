<?php
require_once 'bazakonekcija.php';

if (isset($_POST["button"])) {
    $tekst=$_POST["glavni"]; 
    $naslov=$_POST["naslov"]; 
    $kategorija=$_POST["category"];  

    $s = "INSERT INTO noviartikal (title,tekst,kategorija,ocena,brojocena) VALUES ('$naslov', '$tekst', '$kategorija', '0', '0')" ;
    mysqli_query($conn,$s);
    header("location: ../novipost.php?info=sveok");
}

$sql="SELECT * FROM noviartikal;";
$result=mysqli_query($conn,$sql);
$rownum =mysqli_num_rows($result);
