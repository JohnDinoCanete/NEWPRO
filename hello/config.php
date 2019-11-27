<?php
$host = 'localhost';
$mydatabase = 'mydatabase';
$username = 'root'; #root;
$password = ''; #blank;
"config.php";
try{
    $conn = new PDO("mysql:host = {$host}; mydatabase = {$mydatabase} ", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>