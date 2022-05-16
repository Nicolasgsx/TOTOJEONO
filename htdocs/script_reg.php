<?php
require_once("connection.php");

$meno =  $_POST['meno'];
$priezvisko =  $_POST['priezvisko'];
$email = $_POST['email'];
$heslo =  $_POST['heslo'];
$isEmpty = false;
$passLenght = true;
$passVerify = true;
$passNumber = true;
$nicknameEmail = false;

    if(empty($_POST["email"])){
        $isEmpty = true;
    }
    if(empty($_POST["meno"])){
        $isEmpty = true;
    }
    if(empty($_POST["priezvisko"])){
        $isEmpty = true;
    }
    if(empty($_POST["heslo"])){
        $isEmpty = true;
    }
    if(empty($_POST["passwordcheck"])){
        $isEmpty = true;
    }
    if($isEmpty == true){
        echo "Nieco si nezadal, musis to doplnit";
    }
   
    
    
    $sqlm = "SELECT * FROM udaje_reg WHERE meno ='$meno'";
    $sqle = "SELECT * FROM udaje_reg WHERE email ='$email'";
    $r_u = mysqli_query($pripoj, $sqlm);
    $r_e = mysqli_query($pripoj, $sqle);

    if (mysqli_num_rows($r_u) > 0) {
        $nicknameEmail = true;
        echo "Tento nickname uz existuje, skus si zvolit iny" . "<br>";
    }	
    if(mysqli_num_rows($r_e) > 0){
        $nicknameEmail = true;
        echo "Na tento email je uz ucet registrovany, zvol si iny email" . "<br>"; 
    }


if (!preg_match('@[0-9]@', $heslo)) {
    $passNumber = false;
    echo "Tvoje heslo musi kvoli bezpecnosti obsahovat aspon jedno cislo" . "<br>";
}
if (($_POST["heslo"]) == ($_POST["passwordcheck"]))
{
    $passVerify = true;
}
else{
    $passVerify = false;
    echo "Heslo nesedí s prvým, ktoré si zadal" . "<br>";

}


if(strlen($heslo) < 6){
    $passLenght = false;
    echo "Tvoje heslo musi kvoli bezpecnosti obsahovat aspon 6 znakov" . "<br>";
} 
else{
    $passLenght = true;
}

if($isEmpty == false && $passLenght == true && $passNumber == true && $passVerify == true  && $nicknameEmail == false){
    $cryptovanie = password_hash($heslo, PASSWORD_BCRYPT);


        $sql = "INSERT INTO udaje_reg (email, meno, priezvisko, heslo) VALUES ('$email', '$meno','$priezvisko','$cryptovanie')";

        if ($pripoj->query($sql) === TRUE) {
            echo "Bol si uspesne zaregistrovany :)";
            header('Location: login.php');

        }
        else {
            echo "Niekde nastala zrada musis to opravit" . "<br>";
        }
        
        $pripoj->close();
        
    }
    else{
        echo "Niekde nastala zrada musis to opravitaaaaaaaaaaaaaa" . "<br>"; 

    }

?>