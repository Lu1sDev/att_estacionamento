<?php

namespace service;


use dao\mysql\MovimentacoesDAO;
use generic\JWTAuth;
use stdClass;

class MovimentacoesService extends MovimentacoesDAO
{
    public function darEntrada($placa, $estacionamento){

        $retorno= parent::darEntrada($placa, $estacionamento);
        return $retorno;
    }


    public function darSaida($movimentacao){

        $retorno= parent::darSaida($movimentacao);
        return $retorno;
    }


    public function listarMovimentacoes($entrada){

        $retorno= parent::listarMovimentacoes($entrada);
        return $retorno;
    }


    public function listarGeral(){
        $retorno= parent::listarGeral();
        return $retorno;
    }
}
