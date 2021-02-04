<!DOCTYPE html>
<html lang="en">
<head>
<!-- Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/book2.css">
    <title>Atualizar</title>
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

<br/><br/>
<form action="u_livro.php" method="GET">

<main role="main" class="container-fluid col-sm-6">

<div class="jumbotron border border-primary">

<h3 style="color: #0066FF">Deseja editar?</h3>

<div class="row justify-content-center">
<div class="col-md-4 md-3">
     <p>Selecione o ID:<br/> <input type="text" class="form-control" name="id" required="required"></p>
  </div>
  <div class="col-md-4 md-3">
     <p>Livro:<br/> <input type="text" class="form-control" name="livro" required="required"></p>
  </div>
   <div class="col-md-4 md-3">
    <p>ISBN:<br/> <input type="text" class="form-control" name="isbn" required="required"></p>
  </div>

</div>

<div class="row justify-content-center">

   <div class="col-md-4 md-3">
       <p>Editora:<br/> <input type="text" class="form-control" name="editora" required="required"></p>
    </div>
   <div class="col-md-4 md-3">
      <p>Ano de Publicação: <br/> <input type="text" class="form-control" name="adp" required="required"></p>
   </div>

  <div class="col-md-4 md-3">
      <p>Autor: <br/> <input type="text" class="form-control" name="autor" required="required"></p>
   </div>
</div>

<div class="row justify-content-center">

  
   <div class="col-md-4 md-3">
      <p>Valor do livro: <br/> <input type="text" class="form-control" name="valor" required="required"></p>
    </div>

   <div class="col-md-4 md-3">
    <label for="exampleFormControlSelect1">Disponível:</label>
      <select class="form-control" name="disp" id="disp">
      <option>...</option>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
     </select>
    </div>

   <div class="col-md-4 md-3">
       <p>Quantidade: <br/><input type="number" class="form-control" name="qtd" required="required"></p>
   </div>

</div>

<br/>
   <center><p><button type="submit" class="btn btn-primary col-sm-4" name="updt">Atualizar</button></p><center>

</div>

</main>
<br/>

<nav class="navbar justify-content-center navbar-light bg-success border border-warning">
  <span class="navbar-brand mb-0 h3">
     <label style="color: white;"><i>Design by</i> <b style="color: yellow">Nicolas Hiroki</b> e <b style="color: yellow">Marcus Vinícius</b> 2°T.I</label>
  </span>
</nav>

</form>

</body>
</html>