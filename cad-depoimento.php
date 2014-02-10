<?php
	include("php/config/config.php");
	include("painel/includes/BancoDeDados.php");
	include("painel/includes/Funcoes.php");
	$conexao = db_conectar();

	$nome = utf8_decode($_POST['nome']);
	$empresa = utf8_decode($_POST['empresa']);
	$cargo = utf8_decode($_POST['cargo']);
	$mensagem = $_POST['mensagem']);
	$imagem = $_FILES['imagem'];

	$sql = "insert into depoimento (nome, empresa, cargo, mensagem, flag_status) values ('$nome', '$empresa', '$cargo', '$mensagem', false)";
	mysql_query($sql);
	$depoimento = mysql_fetch_assoc(mysql_query('SELECT id FROM depoimento order by id desc limit 1'));

	$arquivo = FazerUpload($imagem, dirname(__FILE__)."/painel/arquivos/depoimento/");

	$sql = "update depoimento set imagem = '$arquivo' where id = ".$depoimento['id'];
	if(mysql_query($sql)){
		header("Location:index.php?depoimento=1");
	}else{
		header("Location:index.php?depoimento=2");
	}

	

?>