<?php
require_once 'bazakonekcija.php';
if (isset($_REQUEST["id"])) {
$id= $_REQUEST["id"];
$s="SELECT * FROM noviartikal WHERE rid=$id;";
$query= mysqli_query($conn, $s);
}

if (isset($_REQUEST["delete"])) {
    $id= $_REQUEST['id'];
     
    $s="DELETE FROM noviartikal WHERE rid=$id";
    $query= mysqli_query($conn, $s);
    header("location: ../receptiadm.php");
    exit();

    }