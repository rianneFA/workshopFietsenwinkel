<?php

require_once ("databaseFunctions.php");

function registerUser($username, $email, $password){

    $result = db_insertData("INSERT INTO user (username, email, password) VALUES ('$username', '$email','$password')");
    return $result;
}

function getUser($username, $email, $password){
    $user = db_getData("SELECT * FROM user WHERE username = '$username' AND email = '$email' AND wachtwoord = '$password'");
    if ($user->num_rows > 0){
        return $user;
    }
    return "No user found!";
}

?>