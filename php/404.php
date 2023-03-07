<?php

$servername = "database";
$username = "root";
$password = "root";
$dbname = "person";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
}



$sql = "INSERT INTO `personne` (`first_name`, `last_name`, `color`) VALUES ('404', '404', '404')";
$toto = $db->prepare($sql);
$toto->execute();


$sql2 = $db->prepare("SELECT * FROM `personne`");
$sql2->execute();
print_r($sql2->fetchAll(PDO::FETCH_ASSOC));