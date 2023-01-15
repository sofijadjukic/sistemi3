<?php
include "includes/pojedinacanDODATNO.php";
include "includes/oceneDODATNO.php";
 ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="pojedinacan.css">
<link rel="stylesheet" href="rating.css">
</head>
<body>
<div class="header">
            <ul>
                <li> <a href="recepti.php">Our recipes :)</a></li>
                <li> <a href="pocetna.php">Main Page</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
                            </ul>          
</div>

<?php foreach($query as $q) {?>
<div class="tekstito">
    <div class="nasl">
<h5> <?php  echo $q['title'] ?> </h5> </div>
<p> <?php  echo $q['tekst'] ?> </p> 
<p>  Give this recipe a rating! </p>
<div class="rating"> <a href="pojedinacanrecept.php?id=<?php echo $q['rid']?>&ocena=1" class="ocena"> &#10039 </a><a href="pojedinacanrecept.php?id=<?php echo $q['rid']?>&ocena=2" class="ocena"> &#10039 </a><a href="pojedinacanrecept.php?id=<?php echo $q['rid']?>&ocena=3" class="ocena"> &#10039 </a><a href="pojedinacanrecept.php?id=<?php echo $q['rid']?>&ocena=4" class="ocena"> &#10039 </a></div>
<p> Current rating is :<?php  echo $q['ocena'] ?> &#10039</p> 
</div>

<?php } ?> 


</body>
</html>