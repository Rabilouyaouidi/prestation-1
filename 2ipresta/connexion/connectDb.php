<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2ipresta";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}


// $requete = $conn->query("SELECT * FROM users")->fetchAll();

// echo '<pre>';
// print_r($requete);
// echo '</pre>';

?>