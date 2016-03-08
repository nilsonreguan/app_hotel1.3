<?php
header("access-control-allow-origin: *");
require_once('../includes/functions.php');
require_once('../includes/database.php');
require_once('../includes/paquetes.php');
$paquetes = Paquetes::find_all();
foreach ($paquetes as $paquete) {
    echo'<li><a href="index.html">';
    echo'<img src="http://soloinnova.net/app_hotel/img/paquetes/1.jpg">';
    echo'<h2>'.$paquete->nombre.'</h2>';
    echo'<p><strong>'.$paquete->personas.'</strong></p>';
    echo'<p>'.$paquete->descripcion.'</p>';
    echo'<p class="ui-li-aside"><strong>'.$paquete->precio.'</strong></p>';
    echo'</a></li>';
}
?>




