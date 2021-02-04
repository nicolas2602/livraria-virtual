<?php
//Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI

 include("conexao.php");

  $v_livro = $_GET["livro"];
  $v_ISBN = $_GET["isbn"];
  $v_Editora = $_GET["editora"];
  $v_ADB = $_GET["adp"];
  $v_autor = $_GET["autor"];
  $v_valor = $_GET["valor"];
  $v_disp = $_GET["disp"];
  $v_QEstoque = $_GET["qtd"];

  
  $query = mysqli_query($mysqli, "INSERT INTO cadastrov (livro, ISBN, Editora, ano_de_Publicação, autor, valor, disponibilidade, Q_Estoque) VALUES ('$v_livro', '$v_ISBN', '$v_Editora', '$v_ADB', '$v_autor', '$v_valor', '$v_disp', '$v_QEstoque')");
    
  if($query){
    echo "Cadastro com sucesso";
    header('location:livro.php');
  }else{
    echo "Erro: ".$query."<br>".mysqli_error($mysqli);
  }  
   
mysqli_close($mysqli);

?>