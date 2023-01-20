<?php
include_once 'includes/kategorijeDODATNO.php';
include "hdr.php"
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stilrecepti.css">
<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="dd.css">

</head>

<body>


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