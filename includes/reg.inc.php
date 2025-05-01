
<?php
//Registeration
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
try{
    require_once "dbh.inc.php";
    require_once "reg_model.inc.php";
    require_once "reg_contr.inc.php";
    
    $query = "INSERT INTO econs (firstname, lastname, email, username, password) VALUES (?,?,?,?,?);";
    $stmt = $pdo ->prepare($query);
    $stmt->execute([$firstname, $lastname, $email, $username, $password]);
    $pdo = null;
    $stmt = null;
    die();

} catch (PDOException $e){
    die("Query Failed: ". $e->getMessage());
}
