<?php
//Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI

include("conexao.php");

$consulta = "SELECT * from cadastrov";
$con = $mysqli -> query($consulta) or die($mysqli -> error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/book2.css">
    <title>Cadastrar Livro</title>
</head>
<body>
    
<nav class="navbar justify-content-center navbar-light bg-success border border-warning">
  <span class="navbar-brand mb-0 h1">
     <img src="https://acessocultural.com.br/wp-content/uploads/2019/09/livro.jpeg" width="70" height="70" class="rounded d-inline-block  align-top">
  </span><br/><br/><br/>
  <h2 style="color: yellow">Livraria Digital</h2>
  <center>
     <p class="form-group bg-warning rounded border border-success col-9" style="color:green"><b>Nome(s):</b> Nicolas Hiroki e Marcus Vinícius <b>2°T.I</b> - <b>4°Bimestre</b> - LPI</p>
  </center>
</nav>
<br/>

<center>
<form action="adicionar.php" method="get">
<table class="table bg-white border border-success table-bordered table-success col-10">

<div class="row justify-content-center">
<h3 class="form-group bg-success col-3 rounded" style="color:yellow">Descrição do livro</h3>
<div class="col-md-4 md-3">
    <button action="adicionar.php" method="GET" type="submit" class="btn btn-success col-sm-4" name="adc">
    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    Adicionar</button>
</div>
</div>
<br/>
    <thead class="table-success table-bordered">
       <tr>
          <th><b>ID</b></th>
          <th><b>Livro</b></th>
          <th><b>ISBN</b></th>
          <th><b>Editora</b></th>
          <th><b>Ano de Publicação</b></th>
          <th><b>Autor</b></th>
          <th><b>Valor do livro</b></th>
          <th><b>Disponível</b></th>
          <th><b>Quantidade</b></th>
          <th>
             <b style="color: blue;">
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
             </svg>
             Editar
             </b>
          </th>

          <th>
          <b style="color: red;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg>
              Excluir
         </b>
          </th>

       </tr>
    </thead>

    <?php while($dados = $con -> fetch_array()){ ?>
       <tr>
           <th><?php echo $dados["IDlivro"]; ?></th>
           <td><?php echo $dados["livro"]; ?></td>
           <td><?php echo $dados["ISBN"]; ?></td>
           <td><?php echo $dados["Editora"]; ?></td>
           <td><?php echo $dados["ano_de_publicação"]; ?></td>
           <td><?php echo $dados["autor"]; ?></td>
           <td><?php echo $dados["valor"]; ?></td>
           <td><?php echo $dados["disponibilidade"]; ?></td>
           <td><?php echo $dados["Q_Estoque"]; ?></td>
           <td><?php echo "<a href='edit.php' class='btn btn-primary'>Editar</a>" ?></td>
           <td><?php echo "<a href='excluir.php' class='btn btn-danger'>Excluir</a>" ?></td>
       </tr>
       <?php } ?>
    </table>
</form>
</center>
<br/>

<nav class="navbar justify-content-center navbar-light bg-success border border-warning">
  <span class="navbar-brand mb-0 h3">
     <label style="color: white;"><i>Design by</i> <b style="color: yellow">Nicolas Hiroki</b> e <b style="color: yellow">Marcus Vinícius</b> 2°T.I</label>
  </span>
</nav>



</body>
</html>