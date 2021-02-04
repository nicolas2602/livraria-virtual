<?php
include("conexao.php");

$v_id = $_GET["id"];
$v_livro = $_GET["livro"];
$v_ISBN = $_GET["isbn"];
$v_Editora = $_GET["editora"];
$v_ADB = $_GET["adp"];
$v_autor = $_GET["autor"];
$v_valor = $_GET["valor"];
$v_disp = $_GET["disp"];
$v_QEstoque = $_GET["qtd"];

$update = "UPDATE cadastrov set IDlivro=$v_id, livro='$v_livro',ISBN='$v_ISBN',Editora='$v_Editora',ano_de_publicação='$v_ADB',autor='$v_autor',valor='$v_valor',disponibilidade='$v_disp',Q_Estoque='$v_QEstoque' WHERE IDlivro=$v_id";
$res = mysqli_query($mysqli, $update);

if($res)
{
    echo "Atualizado com sucesso!<br/>";
    header('location:livro.php');
}

else
{
    echo "Os campos estão vazios!";
}

mysqli_close($mysqli);
?>

