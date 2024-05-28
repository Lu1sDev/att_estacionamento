<?php
namespace dao\mysql;

use dao\interface\IEstacionamentosDAO;
use generic\MysqlFactory;

class EstacionamentosDAO extends MysqlFactory implements IEstacionamentosDAO{


    public function listar(){
        $sql = "SELECT E.ESTACIONAMENTO, E.DESCRICAO, E.CAPACIDADE FROM ESTACIONAMENTOS E";
        
        $resultado = $this->banco->executar($sql);

        return $resultado;
    }
    
    public function listarUnico($estacionamento){
        $sql = "SELECT E.ESTACIONAMENTO, E.DESCRICAO, E.CAPACIDADE FROM ESTACIONAMENTOS E WHERE E.ESTACIONAMENTO = :ESTACIONAMENTO";
        $resultado = $this->banco->executar($sql,['ESTACIONAMENTO'=>$estacionamento]);
        return $resultado;
    }

    public function vagas($estacionamento){
        $sql = "SELECT E.CAPACIDADE - (select count(*) from movimentacoes m where m.DT_SAIDA is null and m.ESTACIONAMENTO = e.ESTACIONAMENTO) as  vagas
                FROM ESTACIONAMENTOS E WHERE E.ESTACIONAMENTO = :ESTACIONAMENTO";

        $resultado = $this->banco->executar($sql,['ESTACIONAMENTO'=>$estacionamento]);
        return $resultado;
    }

    public function inserir($desc= "null", $cap = 0){
        try {
        $sql = "INSERT INTO estacionamentos  (descricao, capacidade) VALUES (:DESCRICAO , :CAPACIDADE)";
        $resultado = $this->banco->executar($sql,['DESCRICAO'=>$desc,'CAPACIDADE'=>$cap]);

        return true;

        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function atualizar($desc , $cap , $estacionamento){

        $sql = "UPDATE ESTACIONAMENTOS  
                    SET DESCRICAO = :DESCRICAO, 
                        CAPACIDADE = :CAPACIDADE 
            WHERE ESTACIONAMENTO = :ESTACIONAMENTO";
        $resultado = $this->banco->executar($sql,['DESCRICAO'=>$desc,'CAPACIDADE'=>$cap,'ESTACIONAMENTO'=>$estacionamento]);

        return true;
    }

    public function excluir($estacionamento){
        $sql = "DELETE FROM ESTACIONAMENTOS  WHERE ESTACIONAMENTO = :ESTACIONAMENTO";
        $resultado = $this->banco->executar($sql,['ESTACIONAMENTO'=>$estacionamento]);

        return true;
    }

}

?>