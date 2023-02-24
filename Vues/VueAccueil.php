<?php $titre = "Accueil";
ob_start();
?>
<h1>Page d'accueil</h1>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>