<?php

namespace controller;

use service\MovimentacoesService;
use view\MovimentacoesView;

class MovimentacoesController
{

    /*public function listar()
    {
        $viewEstacionamento = new MovimentacoesView();
        $serviceEstacionamento = new MovimentacoesService();
        $list = $serviceEstacionamento->listar();
        $viewEstacionamento->listarEstacionamento($list);
    }*/

    public function darEntrada()
    {
        $viewEstacionamento = new MovimentacoesView();
        $viewEstacionamento->darEntradaMovimento();
    }


    public function darSaida()
    {
        $viewEstacionamento = new MovimentacoesView();
        $viewEstacionamento->darSaidaMovimento();
    }

    public function listarMovimentacoes()
    {
        $viewEstacionamento = new MovimentacoesView();
        $viewEstacionamento->listarMovimento();
    }

    public function listarGeral()
    {
        $serviceMovimentacoes = new MovimentacoesService();
        $viewEstacionamento = new MovimentacoesView();

        $list = $serviceMovimentacoes->listarGeral();
        $viewEstacionamento->listarGeralMovimento($list);
    }
}
