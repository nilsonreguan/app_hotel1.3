<?php
header("access-control-allow-origin: *");
require_once('../includes/functions.php');
require_once('../includes/database.php');
require_once('../includes/ofertas.php');
$ofertas = Ofertas::find_all();
foreach ($ofertas as $oferta) {
    echo '<li>';
    echo $oferta->nombre;
    echo '</li>';
}
?>




