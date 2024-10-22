<?php
function displayClassement(){
    include(__DIR__ . '/../models/configuration.php');
    $requete = $bdd->query('SELECT nom, ca, taux_atteinte FROM users');
    $reponse = $requete->fetchAll();
    return $reponse;
}

function cheakCountUser(){
    include(__DIR__ . '/../models/configuration.php');
    $sql = $bdd->query("SELECT COUNT(*) FROM users");
    $reponse = $sql->fetchColumn();
    return $reponse;
}

?>
