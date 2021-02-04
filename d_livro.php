<?php
//Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI

include("conexao.php");
error_reporting(0);

$v_id = $_GET['id'];
$query = mysqli_query($mysqli, "DELETE FROM cadastrov Where IDlivro=$v_id");

if($query)
{
    echo "Sucesso";
    header('location:livro.php');
}
else{
   echo "Sem sucesso";
}
?>