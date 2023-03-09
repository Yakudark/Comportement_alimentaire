<?php $titre = "Mon récapitulatif";
ob_start();

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
        $query = $db->prepare('SELECT id_food, date_of_eaten, quantity, typeOfMeal FROM eaten_date WHERE date_of_eaten = ?');
        $query->execute(array($date));
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
        echo '<div class="st_column _kcal">kcal</div>';
        echo '<div class="st_column _quantity">Quantité</div>';
        echo '<div class="st_column _type">Kcal total</div>';
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


            echo '<div class="st_row">';
            echo '<div class="st_column _name">' . $date . '</div>'; // La date affichée est celle de la boucle
            echo '<div class="st_column _type">' . $donnees['typeOfMeal'] . '</div>';
            echo '<div class="st_column _rank">' . $name_food . '</div>'; // Utiliser le nom de l'aliment à la place de l'id
            echo '<div class="st_column _type">' . $kcal . '</div>';
            echo '<div class="st_column _quantity">' . $donnees['quantity'] . '</div>';
            echo '<div class="st_column _type">' . $total_kcal . '</div>';
            echo '</div>';
        }
    } ?>



</main>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>