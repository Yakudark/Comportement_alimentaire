<?php
require('././Models/modelsUser.php');
require('././Models/modelsFood.php');
require('././Models/modelsDate.php');

// Affiche la liste de tous les employés de l'entreprise
function accueil()
{
    // $clients = getClients();
    require './Vues/VueAccueil.php';
}

function signInUser()
{
}

function logInUser()
{
    if(isset($_POST)){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $result = logIn($email, $pwd);
    }
}

function logOutUser()
{
    session_destroy();
}

function addUserInfo()
{
}

// Affiche une erreur
function erreur($msgErreur)
{
    require './Vues/vueErreur.php';
}
