<?php
require_once "Session.php";

$session = new Session();
$session ->setAttribute("nombre", "Roberto");
echo "valor de la propiedad nombre: " . $session -> getAttribute("nombre"). "<br/>";

$session ->deleteAttribute("nombre");
echo "valor de la propiedad nombre: " . $session -> getAttribute("nombre"). "<br/>";
$session ->destroySession(); 
?>