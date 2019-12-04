<?php
include __DIR__.'/../control/CadastroControl.php';
$cadastroControl = new CadastroControl();

header('Content-type: application/json');

if ($cadastroControl->findAll()) {
	http_response_code(200);
	echo json_encode($cadastroControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>