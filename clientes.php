<?php

	class Clientes
	{
		
		public function __construct()
		{
			
			$this->mysqli = new mysqli("localhost", "root", "usbw", "banco");
			
		}

		public function inserirCliente($post)
		{
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$logradouro = $_POST['logradouro'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$sql = $this->mysqli->query("INSERT INTO cliente(nome,email,logradouro,bairro,cidade,estado,cep) VALUES('$nome','$email','$logradouro','$bairro','$cidade','$estado','$cep')");
			if ($sql==true) {
				echo"<script language='javascript' type='text/javascript'>
				alert('Cliente cadastrado com sucesso!');window.location.
				href='index.php'</script>";
			}else{
				echo"<script language='javascript' type='text/javascript'>
				alert('Não foi possível cadastrar esse cliente');window.location
				.href='inserirCliente.php'</script>";
			}
		}

		public function listarClientes()
		{
			$result = $this->mysqli->query("SELECT * FROM cliente");
			if ($result->num_rows > 0) {
				$data = array();
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				echo "Nenhum cliente cadastrado";
			}
		}

		public function buscarClientePorId($id)
		{
			$result = $this->mysqli->query("SELECT * FROM cliente WHERE id = '$id'");
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Cliente não encontrado";
			}
		}

		public function alterarCliente($postData)
		{
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$logradouro = $_POST['logradouro'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$id = $_POST['id'];
			if (!empty($id) && !empty($postData)) {
				$sql = $this->mysqli->query("UPDATE cliente SET nome = '$nome', email = '$email', logradouro = '$logradouro', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep' WHERE id = '$id'");
				if ($sql==true) {
					echo"<script language='javascript' type='text/javascript'>
					alert('Cliente alterado com sucesso!');window.location.
					href='index.php'</script>";
				}else{
					echo"<script language='javascript' type='text/javascript'>
					alert('Não foi possível alterar esse cliente');window.location
					.href='editarCliente.php'</script>";
				}
			}
			
		}


		public function excluirCliente($id)
		{
			$sql = $this->mysqli->query("DELETE FROM cliente WHERE id = '$id'");
			if ($sql==true) {
				echo"<script language='javascript' type='text/javascript'>
				alert('Contato excuído com sucesso!');window.location.
				href='index.php'</script>";
			}else{
				echo"<script language='javascript' type='text/javascript'>
				alert('Não foi possível excuir esse contato');window.location
				.href='editarContato.php'</script>";
			}
		}

	}
?>