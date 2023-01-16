
<?php
require_once 'bazakonekcija.php';
if (isset($_REQUEST['kat'])) {
$cat= $_REQUEST['kat'];
$sql="SELECT * FROM noviartikal WHERE kategorija='$cat'";
$result=mysqli_query($conn,$sql);
$rn =mysqli_num_rows($result);
}
?>