<?php
include __DIR__.'/../model/Cadastro.php';

class CadastroControl{
	function insert($obj){
		$cadastro = new Cadastro();
		return $cadastro->insert($obj);		
	}

	function findAll(){
		$cadastro = new Cadastro();
		return $cadastro->findAll();
	}
}

?>