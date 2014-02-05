<?php // You need to add server side validation and better error handling here

$type = isset($_GET['type']) ? $_GET['type'] : die("Falha ao enviar");

if($type == 1){ //cadastro de depoimento
	print_r($_FILES);
	exit;

}else if($type == 2){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	include("php/config/config.php");
	include 'orcamento/checkout/actioncheckout.class.php';
	$d = date('d-m-Y h:i');
	
	$headers = "";
	$msg = "";
	
	$header .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ProPrática <contato@propratica.com.br>\r\n";

	$msg = "<html><body>";
	$msg .="<p><b><font face= verdana size=2 color=#003366 >Dados enviados em: $d do IP: $i</b></font></p>";
	$msg .= "<br><strong><font face= verdana size=2 color=#003366 >Nome: </strong> $nome</font>";
	$msg .= "<br><strong><font face= verdana size=2>E-mail:</strong>  $email</font>";
	$msg .= "<br> <strong><font face= verdana size=2>Mensagem:</strong> $mensagem</font>";
	$msg .= "</body></html>";
			
	$opts = array(
		
		'assunto' => 'Contato',
		'remetente' => 'contato@propratica.com.br',
		'nomeRemetente' => 'ProPrática',
		'destino' => array('Cliente' => $email, 'RF Casa e Cia' => 'contato@rfcasaecia.com.br'),
		'corpo' => $msg
	
	);
	$Act = new ActionCheckout;
	echo $Act->sendConfirm($opts);

}else if($type == 3){ //cadastro de orçamento
	$teste = array();
	echo json_encode($_POST);
}
 
?>