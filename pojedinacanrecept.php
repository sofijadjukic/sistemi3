<?php
include "includes/pojedinacanDODATNO.php";
include "includes/oceneDODATNO.php";
include "includes/commentDodatno.php";
include "hdr.php";
 ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="stillogreg.css">
<link rel="stylesheet" href="pojedinacan.css">
<link rel="stylesheet" href="rating.css">
</head>
<body>


<?php foreach($query as $q) {?>
<div class="tekstito">
    <div class="nasl">
<h5> <?php  echo $q['title'] ?> </h5> </div>
<p> <?php  echo $q['tekst'] ?> </p> 
<p>  Give this recipe a rating! </p>
<div class="rating"> <a href="includes/oceneDODATNO.php?id=<?php echo $q['rid']?>&ocena=1" class="ocena"> &#10039 </a><a href="includes/oceneDODATNO.php?id=<?php echo $q['rid']?>&ocena=2" class="ocena"> &#10039 </a><a href="includes/oceneDODATNO.php?id=<?php echo $q['rid']?>&ocena=3" class="ocena"> &#10039 </a><a href="includes/oceneDODATNO.php?id=<?php echo $q['rid']?>&ocena=4" class="ocena"> &#10039 </a></div>
<p> Current rating is :<?php  echo $q['ocena'] ?> &#10039</p> 
</div>




<div class=comments>

<form action="includes/commentDodatno.php" method="POST">
            <input type="text" placeholder="Title" class="head" name="head" > <br>
            <textarea class="body" cols="50" rows="10" name="body" placeholder="Comment"></textarea> <br>
            <input type="text" hidden name="recept" value="<?php echo $q["rid"];?>">

            <button type="submit" class="button" name="dugme">Add comment</button> <br>
        </form>

        <div class="boxdrugikom">
        <a href="svikomentari.php?id=<?php echo $q['rid']?>" class="drugikom"> View other comments for this post </a>
</div>

<?php } ?> 


</body>
</html>