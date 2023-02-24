<?php $titre = "Inscription";
ob_start();
?>
<div class="inscription">
        <section>
            <main class="login" id="login">
                <section class="login-container">

                    <div class="head">
                        <div class="title">
                            <h3>Connexion</h3>
                        </div>
                        <div class="icon" id="faUser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="tab-body" data-id="connexion">

                        <form id="form-cnx">
            
                            <div class="row">
                                <div class="icon">
                                    <i class="far fa-user"></i>
                                </div>
                                <input id="mail" class="input-area" type="text" placeholder="        Email">
                            </div>
                            </br>
                            <div class="row">
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                
                                <input id="pw" class="input-area" placeholder="        Password" type="password">
                            </div>
                            <div class="btns">
                                <input class="login-btn" type="submit" value="Log in" title="Log in" />
                                <p style="color:red" id="erreur"></p>
                                <a href="./inscription.html"><input class="btn-inscription" id="btn-inscrip" type="button" value="Register" title="Register" /></a> 
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </section>
     </div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>