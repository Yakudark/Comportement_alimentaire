<?php session_start();

// Vérification de l'authentification de l'utilisateur
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" src="index.js"></script>
    <link rel="stylesheet" href="./Style/style.css">
    <title><?= $titre ?></title>

</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="./Asset/logo9ter.png" alt="Logo Scale In Diet">
            </div>
            <nav>

                <ul class="breadcrumb">
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">Perdre du poids</span>
                        </span>
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
                            <span class="breadcrumb__title">Recettes</span>
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
            <div class="connect">Se connecter</div>
            <div class="inscription">S'inscrire</div>

        </div>
        </label>
        </div>

    </header>
    <div id="contenu">
        <?= $contenu ?>
    </div>

    <footer>


    </footer>
    <script src="./Style/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>