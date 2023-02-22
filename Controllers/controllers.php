<?php
require('././Models/models.php');

// Affiche la liste de tous les employés de l'entreprise
function accueil()
{
    // $clients = getClients();
    require './Vues/VueAccueil.php';
}




// Affiche une erreur
function erreur($msgErreur)
{
    require './Vues/vueErreur.php';
}
