<!-- Database Handler includes php-->
<?php
//data source name
$host = 'localhost';
$dbname = 'econs';
$dbusername = "root";
$dbpassword = "";
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    //This is the database connection
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //Below is error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Conntection failed: " . $e->getMessage();
}   