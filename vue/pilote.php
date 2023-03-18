<?php $title="Pilote";?>

<?php ob_start();?>

<h1>Résultat Pilote</h1>
<fieldset>
    <table>
        <tr>
            <th>
                <span>Pilote</span>
            </th>
            <th>
                <span>Points</span>
            </th>
        </tr>
        <?php foreach ($points as $pilote) { ?>
            <tr>
                <th>
                    <?= htmlspecialchars($pilote['NomPil'])?>
                </th>
                <th>
                <?= htmlspecialchars($pilote['Points'])?>
                </th>
            </tr>

        <?php } ?>
        
    </table>
</fieldset>

<a href="index.php">retour accueil</a>

<?php $content=ob_get_clean();?>

<?php require_once('vue/template.php');?>