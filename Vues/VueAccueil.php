<?php $titre = "Accueil";
ob_start();
?>
<link rel="stylesheet" href="./Style/styleAccueil.css">


<section class="testimony">
    <div class="testimony-explanation">
        <h3>Réussir avec ScaleIn</h3>
        <div class="eatanddrink">
            <img src="./Asset/eau.png" alt="bouteille d'eau">
            <p>Buvez au minimum 2 litres par jour, de l'eau principalement mais aussi du café noir(sans sucre), du thé, des infusions. Répartissez votre hydratation au fil de la journée et commencez chaque repas par un grand verre d'eau.</p>
        </div>
        <div class="eatanddrink">
            <p>Évitez ou réduisez fortement votre consommation de boissons alcoolisées</p>
            <img src="./Asset/chope-a-biere.png" alt="alcool">
        </div>
        <div class="eatanddrink">
            <img src="./Asset/cup-cake.png" alt="produits sucrés">
            <p>Évitez le sucre et dérivés (les édulcorants sont préférables) ainsi que les sucreries, gâteaux, biscuits et desserts.</p>
        </div>
        <div class="eatanddrink">
            <p>Préparez vos menus à l'avance.</p>
            <img src="./Asset/panier.png" alt="panier de course">
        </div>
        <div class="eatanddrink">
            <img src="./Asset/diner.png" alt="repas">
            <p>Le contexte du repas est aussi important que le repas lui-même : asseyez-vous à table et éloignez-vous de l'ordinateur et de la télé.</p>
        </div>
        <div class="eatanddrink">
            <p>Ne sautez pas de repas et ne restez pas plus de 5 heures sans manger : un en-cas à 10h et un goûter à 16h empêchent les grignotages intempestifs juste avant le déjeuner et le dîner.</p>
            <img src="./Asset/commenter.png" alt="ne pas suater de repas">
        </div>
    </div>
    <div class="testimony_container">
        <h2>Témoignages</h2>
        <div class="carousel">
            <input type="radio" name="slides" checked="checked" id="slide-1">
            <input type="radio" name="slides" id="slide-2">
            <input type="radio" name="slides" id="slide-3">
            <input type="radio" name="slides" id="slide-4">
            <input type="radio" name="slides" id="slide-5">
            <input type="radio" name="slides" id="slide-6">
            <ul class="carousel__slides">
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/JESSICA-ROND.png" alt="">
                        </div>
                        <figcaption>
                            J'ai perdu 10 kilos grâce à ScaleIn ! Au début, j'étais sceptique quant à l'idée de suivre un programme en ligne pour perdre du poids, mais j'ai été agréablement surprise par la qualité des conseils et des programmes personnalisés que j'ai reçus. Les recettes étaient délicieuses et faciles à préparer, et les exercices étaient adaptés à mon niveau de condition physique. J'ai maintenant retrouvé une confiance en moi que je n'avais pas ressentie depuis longtemps.

                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/LAETITIA-ROND.png" alt="">
                        </div>
                        <figcaption>
                            ScaleIn a été une révélation pour moi. J'ai réussi à perdre 15 kilos en quelques mois grâce aux conseils de leur programme. Je suis plus active et j'ai plus d'énergie qu'avant. Je recommande ce programme à toutes les personnes qui souhaitent perdre du poids et retrouver leur bien-être.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/MCLAIRE-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Je suis tellement reconnaissante envers ScaleIn pour m'avoir aidé à perdre 20 kilos en seulement 6 mois. Leur approche personnalisée et leur suivi attentif ont été un véritable coup de pouce pour moi. J'ai maintenant une meilleure compréhension de ce qu'il faut pour être en bonne santé et je suis fière de dire que j'ai réussi à transformer ma vie grâce à ScaleIn.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/NICOLAS-ROND-1.png" alt="">
                        </div>
                        <figcaption>
                            Je suis un homme et j'avais besoin de perdre du poids depuis longtemps, mais je ne savais pas par où commencer. Heureusement, j'ai découvert ScaleIn et leur programme m'a aidé à perdre 12 kilos en 3 mois. Les exercices étaient intenses mais réalisables, et les conseils diététiques étaient adaptés à mes préférences alimentaires. Je suis maintenant plus en forme et plus confiant que jamais.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/ODILE-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Je n'ai jamais été aussi heureuse de ma vie qu'après avoir perdu 8 kilos grâce à ScaleIn. Les conseils étaient simples à suivre et les résultats ont été incroyables. Je suis maintenant plus en forme et plus confiante que jamais. Je recommande vivement ScaleIn à tous ceux qui cherchent à perdre du poids et à retrouver leur santé.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/SABSAM-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Nous avons décidé de suivre le programme ScaleIn ensemble et nous sommes tellement heureux de l'avoir fait. Nous avons tous les deux réussi à perdre du poids et nous sommes maintenant plus en forme et plus actifs que jamais. Le programme nous a donné une meilleure compréhension de ce qu'il faut pour être en bonne santé et nous sommes maintenant plus motivés que jamais à continuer sur cette voie.

                        </figcaption>
                    </figure>
                </li>
            </ul>
            <ul class="carousel__thumbnails">
                <li>
                    <label for="slide-1"><img src="./Asset/JESSICA-ROND.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-2"><img src="./Asset/LAETITIA-ROND.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-3"><img src="./Asset/MCLAIRE-ROND.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-4"><img src="./Asset/NICOLAS-ROND-1.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-5"><img src="./Asset/ODILE-ROND.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-6"><img src="./Asset/SABSAM-ROND.png" alt=""></label>
                </li>

            </ul>
        </div>
    </div>
</section>
<section class="imc-content">

    <div class="imc-left-container">
        <h2>Calculez votre IMC </h2>
        <div class="IMCOMS">
            <img src="./Asset/Imc ONS.jpg" alt="I.M.C selon l'O.M.S">
        </div>
    </div>
    <div class="imc-right-container">
        <div class="range-container">
            <div>
                <h2>Saisissez votre poids</h2>
                <span id="rangeValue">70</span><span id="rangeUnit"> kg</span><br>
                <input class="range" type="range" name="" value="70" min="0" max="350" onChange="rangeSlide1(this.value)" onmousemove="rangeSlide1(this.value)">
            </div>
            <div>
                <h2>Saisissez votre taille</h2>
                <span id="secondRangeValue">170</span><span id="secondRangeUnit"> cm</span><br>
                <input class="range" type="range" name="" value="170" min="0" max="290" onChange="rangeSlide2(this.value)" onmousemove="rangeSlide2(this.value)">
            </div>
            <div>
                <h2>Voici votre indice de masse corporelle :</h2>
                <span id="imcValue">0</span><br>
                <h2>Votre catégorie d'IMC :</h2>
                <span id="imcCategory"></span>
            </div>
        </div>
</section>
<script src="./JS/home.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>