<?php
require_once 'bazakonekcija.php';
if (isset($_REQUEST['ocena']) && isset($_REQUEST['id'])) {
$ocena= $_REQUEST['ocena']; 
$id= $_REQUEST['id'];
$intocena=intval($ocena); // novo unesena ocena
$intid=intval($id);

$b="SELECT brojocena,ocena FROM noviartikal WHERE rid='$intid';";
//$avg="SELECT ocena FROM noviartikal WHERE rid='$intid';";



$ab=mysqli_query($conn,$b);
//$prosek=mysqli_query($conn,$b);

$row = mysqli_fetch_assoc($ab);
$intbr=$row['brojocena'];
$intavg=$row['ocena'];



//$intbr=intval($br); // broj unetih ocena
//$intprosek=intval($prosek); // trenutni proske pre nove ocene u bazi

//header("location: ../signup.php?broj=$intbr&prosek=$intprosek");

$novibroj=$intbr+1; 
$novasrednja=(($intavg*$intbr)+ $intocena) / ($novibroj); 


//$sql="UPDATE noviartikal SET ocena='$intocena' WHERE rid='$intid';";
//$result=mysqli_query($conn,$sql);

$novonovo="UPDATE noviartikal SET brojocena='$novibroj' WHERE rid='$intid';";
$result=mysqli_query($conn,$novonovo);

$sql="UPDATE noviartikal SET ocena='$novasrednja' WHERE rid='$intid';";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
}



