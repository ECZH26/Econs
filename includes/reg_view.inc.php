<?php

declare(strict_types=1); 

function check_signup_errors(){
    if(isset($_SESSION["errors_signup"])){   //Checking if the errors array have anything
        $errors = $_SESSION["errors_signup"]; //Saving the errors array

        echo "<br>";

        foreach ($errors as $error){
            echo "<p> ERRORS: </p>" . $error;
        }

        unset($_SESSION); //Removing session data for security  
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p> Signup Success!</p>';
    }
}