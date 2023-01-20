<?php
include_once 'includes/newpostDodatno.php';
include 'hdr.php'

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
if ($rownum > 0) { 
    while ($row=mysqli_fetch_assoc($result)) { ?>
    <div class= "jedan">
       <h5> <?php  echo $row['title'] ?> </h5> 
       <p><?php echo substr($row['tekst'], 0, 150)?></p>
        <a href="pojedinacanrecept.php?id=<?php echo $row['rid']?>" >Read More </a> </div>
  <?php  } 
} ?>
</div>


