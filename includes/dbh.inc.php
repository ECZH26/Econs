<!-- Database Handler includes php-->
<?php
//data source name
$host = 'localhost';
$dbname = 'econs';
$dsn = "mysql:host=$host;dbname=$dbname"; //anyname of the database
$dbusername = "root";
$dbpassword = "";

try {
    //This is the database connection
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //Below is error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Conntection failed: " . $e->getMessage();
}   