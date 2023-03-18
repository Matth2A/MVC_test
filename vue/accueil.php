<?php
$title = "Accueil";
?>

<?php ob_start(); ?>

    <fieldset>
        <h1>Veuillez sélectionner</h1>
        <ul>
            <li><a href="?points">Les points des pilotes</a></li>
            <li><a href="?result">Les résultats</a></li>
        </ul>
    </fieldset>

<?php $content=ob_get_clean(); ?>

<?php require('vue/template.php');?>