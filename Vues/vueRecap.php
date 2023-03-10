<?php $titre = "Mon récapitulatif";
ob_start();
require_once __DIR__ . '/../Controllers/controllers.php';
?>
<h1>Bienvenue <?= $userInfo['firstname'] . " " . $userInfo['lastname']; ?></h1>
<h2>Mon récapitulatif</h2>
<main class="st_viewport">

    <?php
    // Connexion à la base de données
    $host = 'localhost';
    $dbname = 'alimentation_app';
    $username = 'root';
    $password = 'root';
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Boucle pour parcourir les jours
    for ($i = 0; $i < 10; $i++) {
        $date = date('Y-m-d', strtotime("-$i day")); // Formatage de la date pour la requête SQL

        // Requête pour récupérer les données de la table eaten_date pour le jour en cours de la boucle
        $query = $db->prepare('SELECT * FROM eaten_date WHERE date_of_eaten = ? AND id_user = ?');
        $query->execute(array($date, $_SESSION['user_id']));
        // Requête pour récupérer le nom de l'aliment à partir de la table food
        $query_food = $db->prepare('SELECT name_food, kcal FROM food WHERE id = ?');


        // Tableau pour stocker les données pour le jour en cours
        $tableau = array();

        // Boucle pour parcourir les résultats de la requête pour le jour en cours et ajouter les données au tableau
        while ($donnees = $query->fetch()) {
            $tableau[] = array(
                'id_food' => $donnees['id_food'],
                'date_of_eaten' => $donnees['date_of_eaten'],
                'quantity' => $donnees['quantity'],
                'typeOfMeal' => $donnees['typeOfMeal'],
            );
        }

        // Initialisation de la variable pour le total de la journée
        $total_kcal_jour = 0;
        // Boucle pour calculer le total de kcal pour le jour en cours
        foreach ($tableau as $donnees) {
            // Récupérer le nom de l'aliment à partir de la table food
            $query_food->execute(array($donnees['id_food']));
            $result = $query_food->fetch();
            $kcal = $result['kcal']; // Récupérer la valeur de kcal
            // Calcul du total de kcal pour cet aliment
            $total_kcal = ($donnees['quantity'] * $kcal) / 100;

            // Ajouter le total de kcal pour cet aliment au total de kcal de la journée
            $total_kcal_jour += $total_kcal;
        }
        // Stocker le total de kcal de la journée dans un tableau associatif
        $total_kcal_par_jour[$date] = $total_kcal_jour;
        // Affichage du tableau dans le HTML pour le jour en cours
        echo '<div class="st_wrap_table" data-table_id="0">';
        echo '<header class="st_table_header">';
        echo '<h2>Journée du ' . date('d/m/Y', strtotime("-$i day")) . '</h2>';
        echo '<h3>Total de la journée : ' . $total_kcal_jour . ' kcal</h3>'; // Afficher le total de kcal de la journée
        echo '<div class="st_row">';
        echo '<div class="st_column _name">Date</div>';
        echo '<div class="st_column _type">Type de plat</div>';
        echo '<div class="st_column _rank">Nom</div>';
        echo '<div class="st_column _kcal">kcal pour 100g</div>';
        echo '<div class="st_column _quantity">Quantité</div>';
        echo '<div class="st_column _kcaltot">Kcal total</div>';
        echo '<div class="st_column _supp">Supprimer</div>';
        echo '</div>';
        echo '</header>';
        echo '<div class="st_table">';

        // Boucle pour afficher les données pour le jour en cours
        foreach ($tableau as $index => $donnees) {
            // Récupérer le nom de l'aliment à partir de la table food
            $query_food->execute(array($donnees['id_food']));
            $result = $query_food->fetch();
            $name_food = $result['name_food'];
            $kcal = $result['kcal']; // Récupérer la valeur de kcal
            // Calcul du total de kcal pour cet aliment
            $total_kcal = ($donnees['quantity'] * $kcal) / 100;


            // Afficher la ligne du tableau HTML avec l'icône de la corbeille
            echo '<div class="st_row">';
            echo '<div class="st_column _name">' . $date . '</div>'; // La date affichée est celle de la boucle
            echo '<div class="st_column _type">' . $donnees['typeOfMeal'] . '</div>';
            echo '<div class="st_column _rank">' . $name_food . '</div>'; // Utiliser le nom de l'aliment à la place de l'id
            echo '<div class="st_column _type">' . $kcal . '</div>';
            echo '<div class="st_column _quantity">';
            echo $donnees['quantity'] . ' <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#basicModal"></i>';
            echo '</div>';
            echo '<div class="st_column _type">' . $total_kcal . '</div>';
            echo '<div class="st_column _delete">';
            echo '<i class="bi bi-trash3" data-bs-toggle="modal" data-bs-target="#deleteModal"></i>';
            echo '</div>';
            echo '</div>';

            // Modal pour confirmer la suppression
            echo '<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">';
            echo '<div class="modal-dialog">';
            echo '<div class="modal-content">';
            echo '<div class="modal-header">';
            echo '<h5 class="modal-title" id="deleteModalLabel">Confirmation de la suppression</h5>';
            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
            echo '</div>';
            echo '<div class="modal-body">';
            echo '<p>Voulez-vous vraiment supprimer cette ligne ?</p>';
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>';
            echo '<button type="button" class="btn btn-danger" onclick="deleteRow(' . $index . ', ' . $donnees['id_food'] . ', \'' . $donnees['date_of_eaten'] . '\')">Supprimer</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } ?>


    <!-- Modal modification -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-labelledby="basicModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="basicModalLabel">Modifier la valeur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputValue" class="form-label">Valeur actuelle</label>
                            <input type="text" class="form-control" id="inputValue">
                        </div>
                        <div class="mb-3">
                            <label for="inputComment" class="form-label">Valeur modifiée</label>
                            <input type="text" class="form-control" id="inputComment">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>


</main>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>