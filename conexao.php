<?php
//Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "bv";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli -> connect_errno)
echo "Falha na conexão: (".$mysqli -> connect_errno.") ".$mysqli -> connect_error;
?>