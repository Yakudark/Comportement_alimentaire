<?php $titre = "Profil";
ob_start();
?>

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