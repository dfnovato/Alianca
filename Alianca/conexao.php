<?php
$servidor = "localhost";
$usuario =  "root";
$banco = "db_rpg";
$cn = new PDO("mysql:host=$servidor; dbname=$banco", $usuario);
?>