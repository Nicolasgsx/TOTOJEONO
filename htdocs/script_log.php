<?php
require_once('connection.php');
$isEmpty = false;

$username = mysqli_real_escape_string($pripoj, $_POST['meno']);
$password = mysqli_real_escape_string($pripoj, $_POST['heslo']);
$hash = md5($_POST["heslo"]);

if (empty($username)) {
    $isEmpty = true;
}
if (empty($password)) {
    $isEmpty = true;
}

if ($isEmpty == true) {
    echo "Nieco si nezadal, zadaj vsetky potrebne udaje k prihlaseniu" . "<br>";
}

if ($isEmpty == false) {
    $query = "SELECT * FROM udaje_reg WHERE meno='$username' AND heslo='$hash'";

    $results = mysqli_query($pripoj, $query);
    
    if (mysqli_num_rows($results) == 1) {
        session_start();
        $_SESSION["meno"] = $username;
        echo "Uspesne si sa prihlasil" . "<br>";
    }
    else {
        echo "Zadal si nespravne meno alebo heslo" . "<br>";
    }
}
?>