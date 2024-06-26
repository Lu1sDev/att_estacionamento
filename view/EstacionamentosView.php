<?php

namespace view;

use generic\View;

class EstacionamentosView extends View
{
    public function listarEstacionamento($lista)
    {
        $param = array(
            "lista" => $lista
        );
        $this->conteudo("public/ListarEstacionamento.php", $param);
    }

    public function inserirEstacionamento()
    {
        $this->conteudo("public/InserirEstacionamento.php");
    }

    public function vagasEstacionamento()
    {
        $this->conteudo("public/VagasEstacionamento.php");
    }

    public function atualizarEstacionamento()
    {
        $this->conteudo("public/AtualizarEstacionamento.php");
    }

    public function excluirEstacionamento()
    {
        $this->conteudo("public/ExcluirEstacionamento.php");
    }
}