<?php // You need to add server side validation and better error handling here
include("php/config/config.php");
include("painel/includes/BancoDeDados.php");
$conexao = db_conectar();
$type = isset($_GET['type']) ? $_GET['type'] : die("Falha ao enviar");

if($type == 1){ //cadastro de depoimento
	print_r($_FILES);
	exit;

}else if($type == 2){
	$nome = $_POST['name'];
	$email = $_POST['email'];
	$mensagem = $_POST['message'];

	include("php/config/config.php");
	include 'orcamento/checkout/actioncheckout.class.php';
	$d = date('d-m-Y h:i');
	
	$headers = "";
	$msg = "";
	
	$header .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= utf8_decode("From: ProPrática <contato@propratica.com.br>\r\n");

	$msg = "<html><body>";
	$msg .="<p><b><font face= verdana size=2 color=#003366 >Dados enviados em: $d do IP: $i</b></font></p>";
	$msg .= "<br><strong><font face= verdana size=2 color=#003366 >Nome: </strong> $nome</font>";
	$msg .= "<br><strong><font face= verdana size=2>E-mail:</strong>  $email</font>";
	$msg .= "<br> <strong><font face= verdana size=2>Mensagem:</strong> $mensagem</font>";
	$msg .= "</body></html>";
			
	$opts = array(
		
		'assunto' => 'Contato',
		'remetente' => $email,
		'nomeRemetente' => $nome,
		'destino' => array('ProPrática' => "contato@propratica.com.br"),
		'corpo' => $msg
	
	);
	$Act = new ActionCheckout;
	$retorno = $Act->sendConfirm($opts);
	if ($retorno)
		echo json_encode(array("tipo" => "success", "msg" => "Mensagem enviada com sucesso"));
	else
		echo json_encode(array("tipo" => "danger", "msg" => $retorno));

}else if($type == 3){ //cadastro de orçamento
	extract($_POST);
	$sql = "select * from tbclientes where (upper(email) = upper('$email') and upper(nome) = upper('$nome') and upper(empresa) = upper('$empresa'))";
	$result = mysql_query($sql);
	$cliente = NULL;
	if(mysql_num_rows($result) == 0){
		mysql_query("insert into tbclientes 
					(nome, empresa, email, telefone, cidade, estado, setor) 
					values 
					('$nome', '$empresa', '$email', '$telefone', '$cidade', '$estado', '$setor')");
		$cliente = mysql_fetch_assoc(mysql_query("select * from tbclientes order by id desc limit 1"));
	}else
		$cliente = mysql_fetch_assoc($result);
	$checkbox = "";
	for($i = 0; $i < sizeof($servico); $i++){
		if($i == 0)
			$checkbox .= " ".$servico[$i];
		else
			$checkbox .= "; ".$servico[$i];
	}
	date_default_timezone_set('America/Sao_Paulo');

	mysql_query("insert into tborcamento (id_cliente, flag_status, data, servicos) values ('".$cliente['id']."', 0, '".date('Y-m-d H:i:s')."', '$checkbox') ");
	echo json_encode($_POST);
}
 
?>