
<?php
//Registeration
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
try{
    require_once "dbh.inc.php";         //database connection
    require_once "reg_model.inc.php";   //the only file allowed to query the data
    require_once "reg_contr.inc.php";
    
    $errors = [];

    //Error Handlers
    if(isinputempty($firstname, $lastname, $email, $username, $password)){
        $errors["empty_input"] = "Fill in all fields!";
    }
    if(isemailinvalid($email)){
        $errors["invalid_email"] = "Invalid email!";
    }
    if(isusernametaken($pdo, $username)){
        $errors["username_taken"] = "Username not available!";
    }
    if(isemailregistered($pdo, $email)){
        $errors["email_used"] = "Email already registered!";
    }

    require_once "config_session.inc.php";

    if($error){
        $_SESSION["errors_signup"] = $errors;

        $signupData = [
            "username" => $username, 
            "email" => $email
        ];
        $_SESSION["signup_data"] = $signupData;

        header("Location: ../registration.php");
        die();
    }

    createuser($pdo, $firstname, $lastname, $email, $username, $password);

    header("Location: ../index.php?signup=success");

    $pdo = null;
    $stmt = null; 

    die();


} catch (PDOException $e){
    die("Query Failed: ". $e->getMessage());
}
