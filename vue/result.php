<?php $title='résultat';?>
<?php ob_start(); ?>

<h1>Résultat</h1>
<fieldset>
    <table>
        <tr>
            <th>
                <span>Nom Pilote</span>
            </th>
            
            <th>
                <span>Numéros Pilote</span>
            </th>

            <th>
                <span>TV</span>
            </th>

            <th>
                <span>Grand Prix</span>
            </th>

            <th>
                <span>Place</span>
            </th>

            <th>
                <span>Points obtenus</span>
            </th>
        </tr>

        <?php foreach ($result as $key) { ?>
            <tr>
                <th>
                    <?= htmlspecialchars($key['NomPil'])?>
                </th>

                <th>
                    <?= htmlspecialchars($key['NoPil'])?>
                </th>

                <th>
                    <?= htmlspecialchars($key['NomTV'])?>
                </th>

                <th>
                    <?= htmlspecialchars($key['NomGP'])?>
                </th>

                <th>
                    <?= htmlspecialchars($key['Place'])?>
                </th>

                <th>
                    <?= htmlspecialchars($key['PtObt'])?>
                </th>
            </tr>

        <?php } ?>
    </table>
</fieldset>

<a href="index.php">retour accueil</a>

<?php $content=ob_get_clean();?>

<?php require_once('vue/template.php');?>