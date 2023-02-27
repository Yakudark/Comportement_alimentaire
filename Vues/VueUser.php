<?php $titre = "Profil";
ob_start();
?>
<link rel="stylesheet" href="./Style/styleUser.css">
//-------Mettre ici le contenu-----------------
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
        <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, temporibus.</h2>
    </div>
</section>
<section class="section_user_2">
    <div class="section_user_2_gauche">
        
    </div>
    <div class="section_user_2_droite">

    </div>

</section>
<section class="section_user_3">

</section>







//-------Mettre ici le contenu-----------------
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>