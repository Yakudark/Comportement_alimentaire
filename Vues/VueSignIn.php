<?php $titre = "Inscription";
ob_start();
?>
<div class="inscription">
        <div id="template">
            <section class="inscription-container">  
                <div class="head">
                    <div class="title">
                        <h3>Registration</h3>
                    </div>
                    <div class="icon" id="faUser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                    </div>
                </div>
                <form action="inscription.php" method="post">
                    <label for="name"></label>
                    <input type="text" id="nom" class="input-area" name="nom" placeholder="Name" required><br><br>
                
                    <label for="firstname"></label>
                    <input type="text" id="prenom" class="input-area" name="prenom" placeholder="First name" required><br><br>
            
                    <label for="email"></label>
                    <input type="email" id="email" class="input-area" name="email" placeholder="Mail address" required><br><br>
            
                    <label for="password"></label>
                    <input type="password" id="motdepasse" class="input-area" placeholder="Password" name="motdepasse" required><br><br>

                    <div class="redirection">
                        <a href="/connexion.html"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" id="arrow" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                          </svg></a>
                        <input type="submit" class="btn-inscription" value="Register">
                    </div>
                </form>
            </section>
        </div>
    </div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>