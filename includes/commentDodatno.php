<?php
require_once 'bazakonekcija.php'; 

if (isset($_POST["dugme"])) {
    $komentar=$_POST["body"]; 
    $naslov=$_POST["head"]; 
    $broj=$_POST["recept"];  

    $s = "INSERT INTO novikomentar (naslov,komentar,broj) VALUES ('$naslov', '$komentar', '$broj')" ;
    mysqli_query($conn,$s);
    header("location: ../pojedinacanrecept.php?id=$broj");
}


