<?php
  
  include 'clientes.php';

  $cliente = new Clientes();
  
  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $cli = $cliente->buscarClientePorId($id);
  }

  if(isset($_POST['alterar'])) {
    $cliente->alterarCliente($_POST);
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
  <h4>PHP POO: Alterar Clientes</h4>
</div><br> 

<div class="container">
  <form action="editarCliente.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $cli['nome']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $cli['email']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="form-control" name="logradouro" value="<?php echo $cli['logradouro']; ?>" required="">
    </div>
	<div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" name="bairro" value="<?php echo $cli['bairro']; ?>" required="">
    </div>
	<div class="form-group">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control" name="cidade" value="<?php echo $cli['cidade']; ?>" required="">
    </div>
	<div class="form-group">
      <label for="estado">Estado:</label>
      <input type="text" class="form-control" name="estado" value="<?php echo $cli['estado']; ?>" required="">
    </div>
	<div class="form-group">
      <label for="cep">Cep:</label>
      <input type="text" class="form-control" name="cep" value="<?php echo $cli['cep']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $cli['id']; ?>">
      <input type="submit" name="alterar" class="btn btn-primary" style="float:right;" value="Alterar">
    </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
