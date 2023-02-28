<?php $titre = "Accueil";
ob_start();
?>

<h1>Page d'accueil</h1>

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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/LAETITIA-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/MCLAIRE-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/NICOLAS-ROND-1.png" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/ODILE-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="./Asset/SABSAM-ROND.png" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.

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