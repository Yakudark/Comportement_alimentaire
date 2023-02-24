<?php
require('././Models/modelsUser.php');
// require('././Models/modelsFood.php');
// require('././Models/modelsDate.php');

// Affiche la liste de tous les employés de l'entreprise
function accueil()
{
    // $clients = getClients();
    require './Vues/VueAccueil.php';
}

function signInUser()
{
    require './Vues/VueSignIn.php';
}

function validSignIn()
{
    if (isset($_POST)){
        $firstname = $_POST['prenom'];
        $lastname = $_POST['nom'];
        $email = $_POST['email'];
        $pwd = $_POST['motdepasse'];

        signIn($firstname, $lastname, $email, $pwd);
    }
}

function logInUser()
{
    require './Vues/VueLogIn.php';
}

function validLogIn()
{
    if (isset($_POST)) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $user = logIn($email, $pwd);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
        }
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
