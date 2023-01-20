<?php
if (isset($_REQUEST["delete"])) {
    $id= $_REQUEST['id'];
     
    $s="DELETE FROM novideals WHERE did=$id";
    $query= mysqli_query($conn, $s);
    header("location: dealsADMIN.php");
    exit();

    } 
    ?>