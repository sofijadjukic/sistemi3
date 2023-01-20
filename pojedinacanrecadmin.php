<?php
include "includes/pojedinacanrecadminDODATNO.php"
 ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="pojedinacan.css">
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
<div class="tekstito" id="lol">
    <div class="nasl">
<h5> <?php  echo $q['title'] ?> </h5> </div>
<p> <?php  echo $q['tekst'] ?> </p> </div>
<p id="ovo"> Current rating is :<?php  echo $q['ocena'] ?> &#10039</p> 
<p> Current number of ratings is :<?php  echo $q['brojocena'] ?></p> 
<form method="POST">
    <input type="text" hidden name="id" value="<?php echo $q["rid"];?>">
    <button name="delete"> Delete </button>
</form> 
<?php } ?>
</body>
</html>