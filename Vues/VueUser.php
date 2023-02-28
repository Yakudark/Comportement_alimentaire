<?php $titre = "Profil";
ob_start();
?>
<link rel="stylesheet" href="./Style/styleUser.css">

<!---------------------SECTION CARTE UTILISATEUR--------------------->
<div class="section_user">
    <div class="container_user">
        <img src="./Asset/Normal.png" alt="IMC image" />
        <div class="container__text">
            <h1>Bienvenue "div nameUser"</h1>
            <div class="nameUser">

            </div>
            <p>
                Voici le récapitulatif de vos données
            </p>
            <div class="container__text__timing">
                <div class="container__text__timing_time">
                    <h2>Poids</h2>
                    <p>Kg</p>
                </div>
                <div class="container__text__timing_time">
                    <h2>Taille</h2>
                    <p>Cm</p>
                </div>
                <div class="container__text__timing_time">
                    <h2>Votre IMC</h2>
                    <p>imc</p>
                </div>
                <div class="container__text__timing_time">
                    <h2>Votre quotat calorifique</h2>
                    <p>Kcal</p>
                </div>
            </div>
            <button class="btn_weight btn_user">Modifier votre poids</button>
            <button class="btn_height btn_user">Modifier votre taille</button>
        </div>
    </div>
</div>
<!---------------------FIN DE SECTION CARTE UTILISATEUR--------------------->

<!-- FORMULAIRE ------------------------------------------------->
<form action="">
    <h2 class="first"><span class="fancy">Première étape </span>: Veuillez choisir votre moment de la journée </h2>
    <div class="section_user_choice">

        <div class="buttons">
            <label class="pdj">
                <input type="radio" name="check">
                <span></span>
                <i class="bi bi-cup-hot-fill"></i>
            </label>
            <label class="encas">
                <input type="radio" name="check">
                <span></span>
                <i class="bi bi-egg-fried"></i>
            </label>
            <label class="dejeuner">
                <input type="radio" name="check">
                <span></span>
                <i class="bi bi-brightness-high-fill"></i>
            </label>
            <label class="gouter">
                <input type="radio" name="check">
                <span></span>
                <i class="bi bi-apple"></i>
            </label>
            <label class="diner">
                <input type="radio" name="check">
                <span></span>
                <i class="bi bi-moon-stars-fill"></i>
            </label>
        </div>
    </div>

    <div class="site-wrapper">
        <div class="pt-table desktop-768">
            <div class="pt-tablecell page-home relative">
                <div class="overlay"></div>

                <div class="container_choice1">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title  home text-center">
                                <h2 class="heading-page"> <span class="fancy">Seconde étape</span> : veuillez choisir votre famille d'aliments
                                </h2>
                                <p class="mt20">Afin de vous aider à composer vos menus, nous avons conçu ce guide. Dans chaque famille d'aliments, vous pourrez comparer les aliments en fonction de leur valeur en calories et ainsi faire plus facilement les bons choix ! La majorité de ces valeurs sont données par l'ANSES Agence National de Sécurité Sanitaire de l'Alimentation, de l'Envirionnement et du Travail sous tutelle du ministère de la santé)</p>
                            </div>

                            <div class="hexagon-menu clear">
                                <?php
                                $categories1 = array("Légumes", "Légumes secs", "Féculents", "Viandes", "Oeufs", "Poissons", "Fruits de mer");

                                foreach ($categories1 as $category1) {
                                    echo '<div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a class="hex-content">
                                        <span class="hex-content-inner">
                                            <span id=".$category1." class="title">' . $category1 . '</span>
                                        </span>
                                        <img class="hexa" src="./Asset/Hexago.png" alt="Image d\'un hexagone">
                                    </a>
                                </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container_choice2">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">

                            <div class="hexagon-menu clear">
                                <?php
                                $categories2 = array("Produits laitiers", "fruits", "fruits secs et oléagineux", "produits sucrés", "corps gras", "boissons", "boissons alcoolisées");

                                foreach ($categories2 as $category2) {
                                    echo '<div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a class="hex-content">
                                        <span class="hex-content-inner">
                                            <span id=".$category2." class="title">' . $category2 . '</span>
                                        </span>
                                        <img class="hexa" src="./Asset/Hexago.png" alt="Image d\'un hexagone">
                                    </a>
                                </div>';
                                }
                                ?>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>