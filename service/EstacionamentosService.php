<?php
namespace service;

use bean\Estacionamentos;
use dao\mysql\EstacionamentosDAO;

class EstacionamentosService extends EstacionamentosDAO{
    
    public function listar(){
       $retorno= parent::listar();
       return $retorno;
    }

    public function listarUnico($estacionamento){
        $retorno= parent::listarUnico($estacionamento);
        return $retorno;
    }

    public function vagas($estacionamento){
        $retorno= parent::vagas($estacionamento);
        return $retorno;
     }

     public function inserir($desc= "null", $cap = 0){
      
        $retorno= parent::inserir($desc, $cap);
        return $retorno;
     }

     public function atualizar($desc, $cap, $estacionamento){
        $retorno= parent::atualizar($desc, $cap, $estacionamento);
        return $retorno;
     }

     public function excluir($estacionamento){
        $retorno= parent::excluir($estacionamento);
        return $retorno;
     }
    
  
  
     public function estacionamento($desc,$cap){
       // return $nome." ".$endereco;
       $p = new Estacionamento();
       $p->descricao = $nome;
       $p->capacidade =$cap;
        return $p;
    }
    
}
?>