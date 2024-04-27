<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=dataBlogPoo", "root", "");

    $sql = "CREATE TABLE articles (id int primary key not null AUTO_INCREMENT,categorie varchar(15),titre varchar(60), description varchar(500))";
    $db->exec($sql);
    echo "Table articles cree avec succes !";
    
} catch (Exception $e) {
    echo "Erreur de connexion à la base de données ";
}