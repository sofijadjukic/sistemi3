<?php
require_once 'bazakonekcija.php';

if (isset($_REQUEST['id'])) {
$broj= $_REQUEST['id'];
$intbroj=intval($broj);
$sql="SELECT * FROM novikomentar WHERE broj='$intbroj'";
$result=mysqli_query($conn,$sql);
$rn =mysqli_num_rows($result);
}
