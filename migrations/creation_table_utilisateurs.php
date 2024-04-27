<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=dataBlogPoo", "root", "");

    $sql = "CREATE TABLE Utilisateurs(id int primary key not null AUTO_INCREMENT,nom varchar(30),email varchar(60), mdp varchar(200))";
    $db->exec($sql);
    echo "Table Utilisateurs cree avec succes !";

} catch (Exception $e) {
    echo "Erreur de connexion à la base de données ";
}