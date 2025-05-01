<!DOCTYPE html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = htmlspecialchars($_POST["firstname"]);
        
        if($firstname != ""){
            header("Location: /project/index.php");
            exit();
        }
    }
    else{
        header("Location: /project/index.php");
    }    
    echo "HI";
?>