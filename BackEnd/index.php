<?php

header("Access-Control-Allow-Origin: *");
//define('PASTAPROJETO', 'AulaBanco');
define('PASTAPROJETO', 'TrabalhoFinalDevWeb/BackEnd');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 

// IDENTIFICA A URI DA REQUISIÇÃO

switch ($request) {
    case '/'.PASTAPROJETO.'/cadastros' :
        require __DIR__ . '/api/'.$answer.'_cadastro.php';
        break;
    default:
        //require __DIR__ . '/api/404.php';
        break;
}
