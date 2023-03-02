<?php $titre = "Accueil";
ob_start();
?>
<link rel="stylesheet" href="./Style/styleAccueil.css">


<section class="testimony">
    <h2>Témoignages</h2>
    <div class="testimony_container">
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
<section class="imc">
    <h2>Calculez votre IMC </h2>
    <div class="left-container">

    </div>
    <div class="right-container">

    </div>
</section>



<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>