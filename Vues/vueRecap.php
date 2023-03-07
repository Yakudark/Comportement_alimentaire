<?php $titre = "Mon récapitulatif";
ob_start();


?>
<h1>Bienvenue $userInfo</h1>
<h2>Mon récapitulatif</h2>
<main class="st_viewport">


    <?php
    // Connexion à la base de données
    $host = 'localhost';
    $dbname = 'alimentation_app';
    $username = 'root';
    $password = 'root';
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Requête pour récupérer les données de la table eaten_date
    $query = $db->query('SELECT id_food, date_of_eaten, quantity, typeOfMeal FROM eaten_date');

    // Boucle pour afficher les données dans le tableau HTML
    for ($i = 0; $row = $query->fetch(); $i++) {
    ?>
        <div class="st_row">
            <div class="st_column _rank"><?php echo $row['id_food']; ?></div>
            <div class="st_column _name"><?php echo $row['date_of_eaten']; ?></div>
            <div class="st_column quantity"><?php echo $row['quantity']; ?></div>
            <div class="st_column _type"><?php echo $row['typeOfMeal']; ?></div>

        </div>
    <?php
    }
    // Fermeture de la connexion à la base de données
    $db = null;
    ?>

    <?php
    for ($i = 0; $i < 10; $i++) {
    ?>
        <div class="st_wrap_table" data-table_id="0">
            <header class="st_table_header">
                <h2>Jour <?php echo $i + 1; ?></h2>
                <h3>Total de la journée</h3>
                <div class="st_row">
                    <div class="st_column _rank">Id_food</div>
                    <div class="st_column _name">Date_of_eaten</div>
                    <div class="st_column _quantity">quantity</div>
                    <div class="st_column _type">typeOfMeal</div>
                    <div class="st_column _kcal">kcal</div>
                </div>
            </header>
            <div class="st_table">
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
                <div class="st_row">
                    <div class="st_column _rank"></div>
                    <div class="st_column _name"></div>
                    <div class="st_column quantity"></div>
                    <div class="st_column _type"></div>
                    <div class="st_column _kcal"></div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


</main>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>