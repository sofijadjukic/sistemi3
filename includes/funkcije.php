<?php
function missingfields($ime,$mejl,$cn,$lozinka,$ponovoloz){
    $fin;
    if (empty($ime)|| empty($mejl)||empty($cn)|| empty($lozinka)|| empty($ponovoloz)) {$fin=true;}
 else {$fin=false;}
 return $fin;
}
function samepass($lozinka,$ponovoloz) {
    $fin;
if ($lozinka !== $ponovoloz){$fin= true;}
else {$fin=false;}
return $fin;
}

function sameun($conn, $ime) {
    $tabela = "SELECT * FROM restaurants WHERE rusername= ?;" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    
    if (!mysqli_stmt_prepare($stmt,$tabela)){
        header("location: ../registerRes?error=ovdegreska1");
    exit();
    }


    mysqli_stmt_bind_param($stmt, "s", $ime); // data bound to the stms
    mysqli_stmt_execute($stmt);


    $finaldata= mysqli_stmt_get_result($stmt);

    if ($row=mysqli_fetch_assoc($finaldata)) {
        return $row; // if it exists we return everything about this user - this row of table 
    }
    else {
        $final= false;
         return $final;
    }
    mysqli_stmt_close($stmt);
}

function valcn($conn, $cn){
 $sql="SELECT * FROM listofcn WHERE compnum=$cn;";
$result=mysqli_query($conn,$sql);
$rownum =mysqli_num_rows($result);
if ($rownum==0) return true;
else return false;
}

function AddNewUser($conn,$ime,$mejl,$cn,$lozinka) {
    $tabela = "INSERT INTO restaurants (rusername,remail,rcn,rpassword) VALUES (?, ?, ?, ?);" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    if (!mysqli_stmt_prepare($stmt, $tabela)){
        header("location: ../registerRes?error=fejlovde2");
    exit();
    }

    $skrivenalozinka= password_hash($lozinka, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $ime, $mejl, $cn, $skrivenalozinka); // data bound to the stms
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../loginRes.php");
    exit();
}

///////////////////////////////////////////////////////////////


function missingfieldlog($ime,$lozinka) {
    $fin;
    if (empty($ime)||empty($lozinka)) {$fin=true;}
 else {$fin=false;}
 return $fin;
}

function  ExistingUser($conn, $ime, $lozinka){
    $validusername= sameun($conn, $ime); 

    if ($validusername === false) { header("location: ../loginRes.php?error=UsernameNotFound");
    exit(); }


$skrivenalozinka= $validusername["rpassword"];
$tacnalozinka= password_verify($lozinka,$skrivenalozinka);
if ($tacnalozinka === false) {
    header("location: ../loginRes.php?error=wrongpassword");
    exit();
}
else if ($tacnalozinka === true) {
    session_start();
    // session variables - super variable
    $_SESSION["sessid"] = $validusername["rid"];
    $_SESSION["sessusername"] = $validusername["rusername"]; //username
    header("location: ../newOffer.php");
    exit();
}
}