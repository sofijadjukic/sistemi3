<?php
function missingfields($ime,$mejl,$lozinka,$ponovoloz){
    $fin;
    if (empty($ime)|| empty($mejl)|| empty($lozinka)|| empty($ponovoloz)) {$fin=true;}
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
    $tabela = "SELECT * FROM noviclanovi WHERE uusername= ?;" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    
    if (!mysqli_stmt_prepare($stmt,$tabela)){
        header("location: ../signup.php?error=ovdegreska1");
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




function AddNewUser($conn,$ime,$mejl,$lozinka) {
    $tabela = "INSERT INTO noviclanovi (uusername,uemail,upassword) VALUES (?, ?, ?);" ;
    $stmt= mysqli_stmt_init($conn); //using prepared stmt to make it more secure- user can write code in input and change our db
    if (!mysqli_stmt_prepare($stmt, $tabela)){
        header("location: ../signup.php?error=fejlovde2");
    exit();
    }

    $skrivenalozinka= password_hash($lozinka, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $ime, $mejl, $skrivenalozinka); // data bound to the stms
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=sveradi");
    exit();
}



//////////////////////////////////////////////

