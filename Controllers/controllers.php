<?php
require('././Models/modelsUser.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
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
    if (isset($_POST)) {
        $firstname = $_POST['prenom'];
        $lastname = $_POST['nom'];
        $email = $_POST['email'];
        $pwd = $_POST['motdepasse'];

        $result = signIn($firstname, $lastname, $email, $pwd);
        if ($result) {
            require './Vues/VueLogIn.php';
        }
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
            session_set_cookie_params([
                'SameSite' => 'None',
                'secure' => true
            ]);
            session_start();
            global $_SESSION;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            $userInfo = getOneUser($user['id']);
            require './Vues/VueUser.php';
        } else {
            echo "email ou mpd invalide";
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

function updateWeight()
{
    session_start();
    $weight = $_GET['weight'];
    echo $_SESSION['user_id'];
    updateAWeight($weight);

    $userInfo = getOneUser($_SESSION['user_id']);
    require './Vues/VueUser.php';
}

function updateSize()
{
    session_start();
    $size = $_GET['size'];
    echo $_SESSION['user_id'];
    updateASize($size);

    $userInfo = getOneUser($_SESSION['user_id']);
    require './Vues/VueUser.php';
}
// Affiche une erreur
function erreur($msgErreur)
{
    require './Vues/VueErreur.php';
}

function VuesUser()
{
    require './Vues/VueUser.php';
}
