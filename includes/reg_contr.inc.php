<?php

declare(strict_types=1); 

//Is Input Empty
function isinputempty(string $firstname, string $lastname, string $email, string $username, string $password){
    if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
        return true;
    } else {
        return false;
    }
}

//Is Email Valid
function isemailinvalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}

//Is Username Taken
function isusernametaken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    } else {
        return false;
    }
}

//Is Email Registered
function isemailregistered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    } else {
        return false;
    }
}

//Create User
function createuser(object $pdo, string $firstname, string $lastname, string $email, string $username, string $password){
    set_user($pdo, $firstname, $lastname, $email, $username, $password);
}