<?php
  
  // Include database file
  include 'clientes.php';

  $cliente = new Clientes();

  // Delete record from table
  if(isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      $cliente->excluirCliente($id);
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
  <h4>PHP POO: Lista de Clientes</h4>
</div><br><br> 

<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record deleted successfully
            </div>";
    }
  ?>
  <h2>Lista
    <a href="inserirCliente.php" class="btn btn-primary" style="float:right;">Novo cliente</a>
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Logradouro</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $clientes = $cliente->listarClientes(); 
          foreach ($clientes as $lista) {
        ?>
        <tr>
          <td><?php echo $lista['id'] ?></td>
          <td><?php echo $lista['nome'] ?></td>
          <td><?php echo $lista['email'] ?></td>
          <td><?php echo $lista['logradouro'] ?></td>
          <td>
            <a href="editarCliente.php?id=<?php echo $lista['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?id=<?php echo $lista['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
