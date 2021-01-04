<?php
session_start();


include "../cores/crudAdmine.php";


if (isset($_POST['login']) and isset($_POST['password'])) {

    $ad = new crudadmine();
    $user = $ad->login($_POST['login'], $_POST['password']);



    if ($user != null) {
        $_SESSION["connectedUsername"] = $_POST['login'];
        $_SESSION["connectedUserId"] = $user->getId();

       
            header('Location:  index.php');
        
} else {
    echo "verifier les champs";
}
}
?>