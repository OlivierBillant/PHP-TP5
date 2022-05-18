<?php

function checkEmail(&$email)
{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception(("Email non valide !"));
    }
}

if (isset($_POST['submit'])) {
    try{
        $email = $_POST["email"];
        checkEmail($_POST['email']);
        var_dump($email);
    }catch(Exception $e){
        $erreur = $e->getMessage();
}
}

/*
if (isset($_POST['submit'])) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        var_dump($_POST['email']);
        var_dump($email);
    } else {
        echo "email non valide";
    }
}
*/
