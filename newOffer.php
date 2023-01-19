<?php
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stillogreg.css">
    <link rel="stylesheet" href="stilclanak.css">
    <link rel="stylesheet" href="dd.css">
</head>




<body>

<div class="header">
            <ul>
                <li> <a href="recepti.php">Our recipes :)</a></li>
                <li> <a href="pocetna.php">Main Page</a></li>
                <li> <a id="aboutus.php" href="login.html">AboutUs</a></li>
  </div> 
  </li>
                            </ul>          
</div>


    <div class=centar>
<form action="includes/newOfferDodatno.php" method="POST">
            <input type="text" placeholder="Offer name" class="title" name="naslov"> <br>
            <textarea class="glavni" cols="30" rows="10" name="glavni"></textarea> <br>
            <input type="text" placeholder="Restaurant name"  name="name"> <br>
            <input type="text" placeholder="Offer price"  name="price"> <br>
            <input type="date" placeholder="date"  name="datum"> <br>

            <button type="submit" class="button" name="button">Add Offer</button> <br>
        </form>
</div>
</body>
</html>