<?php
require_once 'bazakonekcija.php';
if (isset($_REQUEST["id"])) {
$id= $_REQUEST["id"];
$s="SELECT * FROM noviartikal WHERE rid=$id;";
$query= mysqli_query($conn, $s);
}