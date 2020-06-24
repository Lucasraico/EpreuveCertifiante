<?php ob_start(); ?>

<div>
<p>Bienvenue sur votre Profil!</p></br>
<p>Vous pourrez modifier vos informations personnels sur cette page!</br>Mais pas encore</p>
 
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>