<?php
if (isset($_GET['points'])) {
    require_once('src/controllers/point_pilote_c.php');
} 
elseif (isset($_GET['result'])) {
    require_once('src/controllers/result_gp_c.php');
}
else {
    require_once('src/controllers/accueil_c.php');
}
?>