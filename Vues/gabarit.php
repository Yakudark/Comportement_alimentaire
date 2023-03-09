<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/Style.css">
    <link rel="stylesheet" href="./Style/SignIn.css">
    <link rel="stylesheet" href="./Style/styleUser.css">
    <link rel="stylesheet" href="./Style/styleRecette.css">
    <link rel="stylesheet" href="./Style/styleRecap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <title><?= $titre ?></title>

</head>

<body>
    <header>

        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="./Asset/logo9ter.png" alt="Logo Scale In Diet">
                </a>
            </div>
            <nav>

                <ul class="breadcrumb">

                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <a href="index.php?action=VuesUser"><span class="breadcrumb__title">Perdre du poids</span></a>
                    </li>
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Témoignages</span>
                        </span>
                    </li>
                    <li class="breadcrumb__item">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Articles</span>
                        </span>
                    </li>
                    <li class="breadcrumb__item breadcrumb__item-lastChild">
                        <span class="breadcrumb__inner">
                            <a href="index.php?action=VuesRecette"><span class="breadcrumb__title">Recettes</span></a>
                        </span>
                    </li>
                </ul>
            </nav>
            <label class="menu-button-wrapper" for="">
                <input type="checkbox" class="menu-button">
                <div class="icon-wrapper">
                    <label><i class="bi bi-person-add hamburger"></i></label>
            </label>
        </div>
        <div class="item-list">
            <?php
            if (!isset($_SESSION['user_id'])) {
            ?>
                <a href=".\index.php?action=logIn">
                    <div class="connect">Se connecter</div>
                </a>
                <a href=".\index.php?action=signIn">
                    <div class="inscriptions">S'inscrire</div>
                </a>
            <?php
            } else {
            ?>
                <a href=".\index.php?action=VuesUser">
                    <div class="connect">Mon profil</div>
                </a>
                <a href=".\index.php?action=deconnection">
                    <div class="connect">Déconnexion</div>
                </a>
            <?php
            }
            ?>


        </div>
        </label>
        </div>

    </header>
    <div id="contenu">
        <?= $contenu ?>
    </div>

    <footer>
        <div class="page-wrapper">
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 footer-col-3">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Adresse</h5>
                                    <div class="gem-contacts">
                                        <div class="gem-contacts-item gem-contacts-address">Recherche et développement
                                            :<br> La maison de la recherche -11 boulevard du faubourg Honoré- 75000 -
                                            Paris
                                        </div>
                                        <div class="gem-contacts-item gem-contacts-phone"><i class="bi bi-telephone" aria-hidden="true"></i> Téléphone: <a href="#">0175859685</a></div>

                                        <div class="gem-contacts-item gem-contacts-address mt-2">Soutien :<br> Service
                                            du Soutien - 12 rue du compagnon - 83100 - Toulon</div>
                                        <div class="gem-contacts-item gem-contacts-phone"><i class="bi bi-telephone" aria-hidden="true"></i> Téléphone: <a href="#">0494258596</a></div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-lg-8 col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="widget footer_widget">
                                            <h5 class="footer-title">Recentes News</h5>
                                            <ul class="posts  styled">
                                                <li class="clearfix gem-pp-posts">
                                                    <div class="gem-pp-posts-text">
                                                        <div class="gem-pp-posts-item">
                                                            <a href="#">L'hydratation
                                                            </a>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="clearfix gem-pp-posts">
                                                    <div class="gem-pp-posts-text">
                                                        <div class="gem-pp-posts-item">
                                                            <a href="#">Réussir avec ScaleIn
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix gem-pp-posts">
                                                    <div class="gem-pp-posts-text">
                                                        <div class="gem-pp-posts-item">
                                                            <a href="">Le sucre - est-ce bien ou mal ?
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="widget">
                                            <h5 class="footer-title">Contactez-nous</h5>
                                            <div class="textwidget">
                                                <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                                                    <form method="post" class="wpcf7-form" novalidate="novalidate">

                                                        <div class="contact-form-footer">
                                                            <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Votre nom"></span></p>
                                                            <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Votre email"></span></p>
                                                            <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Votre message"></textarea></span>
                                                            </p>
                                                            <div><input type="submit" value="Soumettre" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="footer-site-info">2023 © <a href="#" target="_blank">Fait par Yasmine, François et Vianney - Simplon CDA Fullstak 2023 </a></div>
                            </div>

                            <div class="col-md-6">
                                <div id="footer-socials">
                                    <div class="socials inline-inside socials-colored">

                                        <a href="#" target="_blank" title="Facebook" class="socials-item">
                                            <i class="bi bi-facebook facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Twitter" class="socials-item">
                                            <i class="bi bi-twitter twitter"></i>

                                        </a>
                                        <a href="#" target="_blank" title="Instagram" class="socials-item">
                                            <i class="bi bi-instagram instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" title="YouTube" class="socials-item">
                                            <i class="bi bi-youtube youtube"></i>
                                        </a>
                                        <a href="#" target="_blank" title="messenger" class="socials-item">
                                            <i class="bi bi-messenger messenger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>

            <script type="module" src="./JS/index.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" src="index.js"></script>
</body>

</html>