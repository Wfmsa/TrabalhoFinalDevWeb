<?php
include __DIR__.'../Conexao.php';

class Cadastro extends Conexao {
    private $codigo; 
	private $responsavel;   
    private $dtinicio;
    private $dtfinal;
    private $descricao;


    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getResponsavel() {
        return $this->responsavel;
    }

   
    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
        return $this;
    }

    
    public function getDtinicio() {
        return $this->dtinicio;
    }

   
    public function setDtinicio($dtinicio) {
        $this->dtinicio = $dtinicio;
        return $this;
    }

    
    public function getDtfinal() {
        return $this->dtfinal;
    }

    public function setDtfinal($dtfinal) {
        $this->dtfinal = $dtfinal;
        return $this;
    }

    
    public function getDescricao()  {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function insert($obj){    
    	$sql = "INSERT INTO cadastro(codigo,responsavel,dtinicio,dtfinal,descricao) VALUES (:codigo,:responsavel,:dtinicio,:dtfinal,:descricao)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('codigo',  $obj->codigo);
        $consulta->bindValue('responsavel',  $obj->responsavel);
        $consulta->bindValue('dtfinal' , $obj->dtfinal);
        $consulta->bindValue('dtinicio', $obj->dtinicio);
        $consulta->bindValue('descricao' , $obj->descricao);
    	$consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM cadastro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>