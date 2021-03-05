<?php

  include 'clientes.php';

  $cliente = new Clientes();

  if(isset($_POST['salvar'])) {
    $cliente->inserirCliente($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP POO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>PHP POO: Cadastro Clientes</h4>
</div><br> 

<div class="container">
  <form action="inserirCliente.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" required="">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required="">
    </div>
    <div class="form-group">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="form-control" name="logradouro" placeholder="Logradouro" required="">
    </div>
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" name="bairro" placeholder="Bairro" required="">
    </div>
	<div class="form-group">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control" name="cidade" placeholder="Cidade" required="">
    </div>
	<div class="form-group">
      <label for="estado">Estado:</label>
      <input type="text" class="form-control" name="estado" placeholder="Estado" required="">
    </div>
	<div class="form-group">
      <label for="cep">Cep:</label>
      <input type="text" class="form-control" name="cep" placeholder="Cep" required="">
    </div>
    <input type="submit" name="salvar" class="btn btn-primary" style="float:right;" value="Salvar">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
