<?php
include "hdr.php"
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stillogreg.css">
    <link rel="stylesheet" href="stilclanak.css">
    <link rel="stylesheet" href="dd.css">
</head>




<body>




    <div class=centar>
<form action="includes/newpostDodatno.php" method="POST">
            <input type="text" placeholder="Recipe name" class="title" name="naslov"> <br>
            <textarea class="glavni" cols="30" rows="10" name="glavni"></textarea> <br>
            <label > Select a category </label><br>
            <input type= "radio" name="category" value="vegan">  <label > vegan</label><br>
            <input type= "radio" name="category" value="glutenfree"> <label >gluten free</label><br>
            <input type= "radio" name="category" value="underten"> <label >under 10$</label><br>
            <input type= "radio" name="category" value="underfiveminutes"> <label >under 5 minutes</label><br>

            <button type="submit" class="button" name="button">Add Post</button> <br>
        </form>
</div>
</body>
</html>