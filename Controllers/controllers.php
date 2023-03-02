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
    session_start();
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
        $date_of_birth = $_POST['date_of_birth'];
        $sexe = $_POST['sexe'];

        $result = signIn($firstname, $lastname, $email, $pwd, $date_of_birth, $sexe);
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
    require './Vues/VueAccueil.php';
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

function calculateQuotKcal()
{
    // session_start();
    if ($_SESSION['user_id']) {
        $userInfo = getOneUser($_SESSION['user_id']);
        // require './Vues/VueUser.php';

        $weight = $userInfo['weight_user'];
        $height = $userInfo['height'];
        $sexe = $userInfo['sexe'];
        $date_of_birth = $userInfo['date_of_birth'];
        $date_actuelle = date("Y-m-d");
        $age = date_diff(date_create($date_of_birth), date_create($date_actuelle));
        $age_str = $age->format('%y'); // Formatte l'objet DateInterval en une chaîne de caractères
        $kcalNecessary = 0;

        if ($sexe == "féminin") {
            $kcalNecessary = (10 * $weight) + (6.25 * $height) - (5 * $age_str) + 5;
            // echo $kcalNecessary;
        } else if ($sexe == "masculin") {
            $kcalNecessary = (10 * $weight) + (6.25 * $height) - (5 * $age_str) - 161;
            // echo $kcalNecessary;
        }
    }
    return $kcalNecessary;
}
// Affiche une erreur
function erreur($msgErreur)
{
    require './Vues/VueErreur.php';
}

function VuesUser()
{
    session_start();
    $userInfo = getOneUser($_SESSION['user_id']);
    require './Vues/VueUser.php';
}

function getAllFoodFromCategory()
{
    $category = $_GET['category'];
    getAllFoodFromOneCategory($category);
}
