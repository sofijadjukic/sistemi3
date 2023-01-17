<?php
include_once 'includes/newpostDodatno.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stilrecepti.css">
<link rel="stylesheet" href="stillogreg.css">

</head>

<body>
<div class="header">
            <ul>
                <li> <a href="recepti.php">All</a></li>
                <li> <a href="pocetna.php">Main Page</a></li>
                
                            </ul>
                          
            
</div>

    <div>
 <?php 
if ($rownum > 0) { 
    while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class= "jedan">
       <h5> <?php  echo $row['title'] ?> </h5> 
       <p><?php echo substr($row['tekst'], 0, 50)?></p>
        <a href="pojedinacanrecadmin.php?id=<?php echo $row['rid']?>" >Read More </a> </div>
  <?php  } 
} ?>
</div>