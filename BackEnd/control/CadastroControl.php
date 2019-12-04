<?php
include __DIR__.'/../model/Cadastro.php';

class CadastroControl{
	function insert($obj){
		$cadastro = new Cadastro();
		return $cadastro->insert($obj);		
	}

	function update($obj,$id){
		$cadastro = new Cadastro();
		return $cadastro->update($obj,$id);
	}

	function delete($obj,$id){
		$cadastro = new Cadastro();
		return $cadastro->delete($obj,$id);
	}

	function find($id = null){
		$cadastro = new Cadastro();
		return $cadastro->find($id);
	}

	function findAll(){
		$cadastro = new Cadastro();
		return $cadastro->findAll();
	}
}

?>