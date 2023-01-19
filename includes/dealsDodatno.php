<?php
require_once 'bazakonekcija.php';

$sql="SELECT * FROM novideals;";
$rez=mysqli_query($conn,$sql);
$rownum =mysqli_num_rows($rez);
