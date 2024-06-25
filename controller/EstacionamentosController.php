<?php
namespace controller;

use service\EstacionamentosService;
use view\EstacionamentosView;

class EstacionamentosController{

    public function listar(){
        $viewEstacionamento = new EstacionamentosView();
        $serviceEstacionamento = new EstacionamentosService();
        $list = $serviceEstacionamento->listar();
        $viewEstacionamento->listarEstacionamento($list);
    }

    public function inserir(){
        $viewEstacionamento = new EstacionamentosView();
        $viewEstacionamento->inserirEstacionamento();
    }


    public function vagas(){
        $viewEstacionamento = new EstacionamentosView();
        $viewEstacionamento->vagasEstacionamento();
    }
}
?>