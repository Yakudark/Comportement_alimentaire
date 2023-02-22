<?php
include('Controllers\controllers.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'createClient') {
            // createClient();
        } 
        // else
        // if ($_GET['action'] == 'createOneClient') {
        //     createOneClient();
        // }
        // else 
        // if ($_GET['action'] == 'updateClient') {
        //     updateClientDisplay();
        // }
        // else
        // if ($_GET['action'] == 'updateOneClient') {
        //     updateOneClient();
        // }
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
