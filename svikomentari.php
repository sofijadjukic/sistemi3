<?php
include "includes/svikomentariDODATNO.php";
 ?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="pojedinacan.css">
<link rel="stylesheet" href="rating.css">
<link rel="stylesheet" href="komentari.css">
</head>
<body>
<div class="header">
            <ul>
                <li> <a href="recepti.php">Our recipes :)</a></li>
                <li> <a href="pocetna.php">Main Page</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
                            </ul>          
</div>


 <?php 
if ($rn > 0) { 
    while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class="celo">
    <div class= "jedan">
       <h5 class="nas"> <?php  echo $row['naslov'] ?> </h5> 
       <p class="bod"><?php echo $row['komentar']?></p> 
      </div>
    </div>
  <?php  } 
} ?>


</body>
</html>

