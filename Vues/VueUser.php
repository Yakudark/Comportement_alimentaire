<?php $titre = "Profil";
ob_start();
$edit = false;
?>

<link rel="stylesheet" href="./Style/styleUser.css">

<section class="section_user_1">
    <div class="section_user_1_gauche">
        <div class="buttons">
            <label>
                <input type="checkbox" name="check">
                <span></span>
                <i class="bi bi-cup-hot-fill"></i>
            </label>
            <label>
                <input type="checkbox" name="check">
                <span></span>
                <i class="bi bi-egg-fried"></i>
            </label>
            <label>
                <input type="checkbox" name="check">
                <span></span>
                <i class="bi bi-brightness-high-fill"></i>
            </label>
            <label>
                <input type="checkbox" name="check">
                <span></span>
                <i class="bi bi-apple"></i>
            </label>
            <label>
                <input type="checkbox" name="check">
                <span></span>
                <i class="bi bi-moon-stars-fill"></i>
            </label>
        </div>
    </div>
    <div class="section_user_1_droite">
        <div class="container_user">
            <img src="./Asset/Normal.png" alt="IMC image" />
            <div class="container__text">
                <h1>Bienvenue <?= $userInfo['firstname'] . " " . $userInfo['lastname']; ?></h1>
                <div class="nameUser">

                </div>
                <div class="container__text__star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>
                    Voici le récapitulatif de vos données
                </p>
                <div class="container__text__timing">
                    <div class="container__text__timing_time">
                        <h2>Poids</h2>
                        <span id="infoWeight">
                            <?php if (isset($userInfo['weight_user'])) {
                                echo $userInfo['weight_user'];
                            }
                            ?>
                        </span>
                        <span>Kg</span>
                    </div>
                    <div class="container__text__timing_time">
                        <h2>Taille</h2>
                        <span id="infoSize">
                            <?php
                            if (isset($userInfo['height'])) {
                                echo $userInfo['height'];
                            }
                            ?>
                        </span>
                        <?php

                        ?>
                        <span>Cm</span>
                    </div>
                    <div class="container__text__timing_time">
                        <h2>Votre IMC</h2>
                        <span id="imc">imc</span>
                    </div>
                    <div class="container__text__timing_time">
                        <h2>Votre quotat calorifique</h2>
                        <p>Kcal</p>
                    </div>
                </div>
                <button class="btn_weight btn_user">
                    <a id="updateWeightLink">
                        Modifier votre poids
                    </a>
                </button>
                <button class="btn_height btn_user">
                    <a id="updateSizeLink">
                        Modifier votre taille
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="section_user_2">
    <div class="section_user_2_gauche">

        <div class="site-wrapper">
            <div class="pt-table desktop-768">
                <div class="pt-tablecell page-home relative">
                    <div class="overlay"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title  home text-center">
                                    <span class="heading-page"> Choisissez votre aliment !
                                    </span>
                                    <p class="mt20">Afin de vous aider à composer vos menus, nous avons conçu ce guide. Dans chaque famille d'aliments, vous pourrez comparer les aliments en fonction de leur valeur en calories et ainsi faire plus facilement les bons choix ! La majorité de ces valeurs sont données par l'ANSES Agence National de Sécurité Sanitaire de l'Alimentation, de l'Envirionnement et du Travail sous tutelle du ministère de la santé)</p>
                                </div>

                                <div class="hexagon-menu clear">
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="bi bi-universal-access"></i>
                                                </span>
                                                <span class="title">Légumes</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="bi bi-universal-access"></i>
                                                </span>
                                                <span class="title">Légumes secs</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Féculents</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Viandes</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Oeufs</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Poissons</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
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
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Fruits de mer</span>
                                            </span>
                                            <img class="hexa" src="./Asset/Hexagone.png" alt="Image d'un hexagone">
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_user_2_droite">

    </div>

</section>
<section class="section_user_3">

</section>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Petit-déjeuner <br />Vous avez consommé</th>
            <th>Collation du matin <br />Vous avez consommé</th>
            <th>Déjeuner <br />Vous avez consommé</th>
            <th>Goûter <br />Vous avez consommé</th>
            <th>Dîner <br />Vous avez consommé</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Croissant</td>
        </tr>
    </tbody>
</table>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>