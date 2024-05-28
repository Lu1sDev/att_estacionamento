<?php

namespace dao\mysql;

use dao\interface\IMovimentacoesDAO;
use generic\MysqlFactory;

class MovimentacoesDAO extends MysqlFactory implements IMovimentacoesDAO
{

    public function darEntrada($placa, $estacionamento){

        try {
            $sql = "INSERT into movimentacoes (ESTACIONAMENTO,DT_ENTRADA,PLACA)
            values(:estacionamento , now() , :placa)";
            $resultado = $this->banco->executar($sql,['estacionamento'=>$estacionamento,'placa'=>$placa]);
            return true;
        } catch (\Throwable $th) {
           return $th;
        }
        
    }

    public function darSaida($movimentacao){
        try {
            $sql = "UPDATE movimentacoes SET DT_SAIDA = NOW()
                        WHERE MOVIMENTACAO = :MOVIMENTACAO";
            $resultado = $this->banco->executar($sql,['MOVIMENTACAO'=>$movimentacao]);
            return true;
        } catch (\Throwable $th) {
           return $th;
        }
    }

    public function listarMovimentacoes($entrada){
        try {
            $sql = "select E.DESCRICAO ESTACIONAMENTO ,M.PLACA,DATE_FORMAT(m.DT_ENTRADA, '%d/%m/%Y %H:%i:%s') entrada,DATE_FORMAT(m.DT_SAIDA, '%d/%m/%Y %H:%i:%s') saida
                        from movimentacoes M
                            join estacionamentos E on E.ESTACIONAMENTO = M.ESTACIONAMENTO 
                        WHERE DATE_FORMAT(m.DT_ENTRADA, '%d/%m/%Y')  = :entradada
                        ORDER BY E.ESTACIONAMENTO ";
            $resultado = $this->banco->executar($sql,['entradada'=>$entrada]);
            return $resultado;
        } catch (\Throwable $th) {
           return $th;
        }
    }
    
    public function listarGeral(){
        try {
            $sql = "select E.DESCRICAO ESTACIONAMENTO ,M.PLACA,DATE_FORMAT(m.DT_ENTRADA, '%d/%m/%Y %H:%i:%s') entrada,DATE_FORMAT(m.DT_SAIDA, '%d/%m/%Y %H:%i:%s') saida
                        from movimentacoes M
                            join estacionamentos E on E.ESTACIONAMENTO = M.ESTACIONAMENTO 
                        ORDER BY E.ESTACIONAMENTO ";
            $resultado = $this->banco->executar($sql);
            return $resultado;
        } catch (\Throwable $th) {
           return $th;
        }
    }

}
