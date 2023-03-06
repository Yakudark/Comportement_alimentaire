<?php
include('Controllers\controllers.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'signIn') {
            signInUser();
        } else if ($_GET['action'] == 'validSignIn') {
            validSignIn();
        } else if ($_GET['action'] == 'logIn') {
            logInUser();
        } else if ($_GET['action'] == 'addUserInfo') {
            addUserInfo();
        } else if ($_GET['action'] == 'validLogIn') {
            validLogIn();
            calculateQuotKcal();
        } else if ($_GET['action'] == 'VuesUser') {
            VuesUser();
        } else if ($_GET['action'] == 'updateWeight') {
            updateWeight();
        } else if ($_GET['action'] == 'updateSize') {
            updateSize();
        } else if ($_GET['action'] == 'deconnection') {
            logOutUser();
        } else if ($_GET['action'] == 'VuesRecette') {
            VuesRecette();
        }
        // else 
        // if ($_GET['action'] == 'deleteClient') {
        //     deleteAClient();
        // } 
        else
            throw new Exception("Action non valide");
    } else {
        accueil();  // action par défaut
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}
?>