<?php

declare(strict_types=1); 

//Dont have to declare dbh file already in reg.inc.php which calls this. 
function get_username(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query); //safety prevents sql inject. Separting the data from the actually querying
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email){
    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query); //safety prevents sql inject. Separting the data from the actually querying
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $firstname, string $lastname, string $email, string $username, string $password){
    $query = "INSERT INTO users (firstname, lastname, email, username, password) VALUES (:firstname, :lastname, :email, :username, :password);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->execute();
}