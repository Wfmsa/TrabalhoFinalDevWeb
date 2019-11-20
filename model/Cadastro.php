<?php
include __DIR__.'/Conexao.php';

class Conteudo extends Conexao {
	private $codigo;
    private $descricao;
    private $data;
    private $responsavel;
    private $status;

    function getCodigo() {
        return $this->codigo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getdata() {
        return $this->data;
    }

    function getresponsavel() {
        return $this->responsavel;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setdata($data) {
        $this->data = $data;
    }

    function setresponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    function getStatus(){
        return $this-> status;
    }
    
    function setStatus(){
        $this->status=$status;
    }
    public function insert($obj){
    	$sql = "INSERT INTO conteudo(codigo,descricao,data,responsavel) VALUES (:codigo,:descricao,:data,:responsavel)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('codigo',  $obj->codigo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('data' , $obj->data);        
        $consulta->bindValue('responsavel' , $obj->periodo_id);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET codigo = :codigo, descricao = :descricao,data = :data, responsavel = :responsavel WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('codigo', $obj->codigo);
		$consulta->bindValue('descricao', $obj->descricao);
		$consulta->bindValue('data' , $obj->data);
		$consulta->bindValue('responsavel' , $obj->responsavel);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM conteudo WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM conteudo WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM conteudo";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>