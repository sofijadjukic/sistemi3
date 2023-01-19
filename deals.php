<?php
include_once 'includes/dealsDodatno.php';
include 'header.php'
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
    while ($row=mysqli_fetch_assoc($rez)) { ?>
    <div class= "jedan">
       <h5> <?php  echo $row['title'] ?> </h5> 
       <p> <?php echo $row['resname']?></p>
       <p>Price: <?php echo $row['price']?> $ </p>

       <?php  $vd=$row['validdate']; $cd=date("Y/m/d");
       $vdc= strtotime($vd);
       $cdc= strtotime($cd);
        if ($vdc < $cdc) {echo "THIS DEAL HAS EXPIRED";}  else {echo "VALID UNTIL $vd";}
        
        ?>
<br>
        <a href="pojedinacanrecept.php?id=<?php echo $row['rid']?>" >Read More </a> </div>
  <?php  } 
} ?>
</div>