<?php

namespace view;

use generic\View;

class MovimentacoesView extends View
{
    /*public function listarEstacionamento($lista)
    {
        $param = array(
            "lista" => $lista
        );
        $this->conteudo("public/ListarEstacionamento.php", $param);
    }*/

    public function darEntradaMovimento()
    {
        $this->conteudo("public/DarEntradaMovimento.php");
    }

    public function darSaidaMovimento()
    {
        $this->conteudo("public/DarSaidaMovimento.php");
    }

    public function listarMovimento()
    {
        $this->conteudo("public/ListarMovimento.php");
    }

    public function listarGeralMovimento($lista)
    {
        $param = array(
            "dados" => $lista
        );
        $this->conteudo("public/ListarGeralMovimento.php", $param);
    }
}
