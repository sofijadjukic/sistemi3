<?php
include_once 'includes/kategorijeDODATNO.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stilrecepti.css">
<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="dd.css">

</head>

<body>
<div class="header">
            <ul>
                <li> <a href="recepti.php">Our recipes :)</a></li>
                <li> <a href="pocetna.php">Main Page</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
                <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Categories</a>
    <div class="dropdown-content">
    <a href="kategorije.php?kat=vegan">Vegan</a>
    <a href="kategorije.php?kat=glutenfree">Gluten free 2</a>
    <a href="kategorije.php?kat=underten"> Under 10$</a>
    <a href="kategorije.php?kat=underfiveminutes"> Under 5 minutes</a>
  </div> 
  </li>
                            </ul>
                          
            
</div>

    <div>
 <?php 
if ($rn > 0) { 
    while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class= "jedan">
       <h5> <?php  echo $row['title'] ?> </h5> 
       <p><?php echo substr($row['tekst'], 0, 50)?></p>
        <a href="pojedinacanrecept.php?id=<?php echo $row['rid']?>" >Read More </a> </div>
  <?php  } 
} ?>
</div>