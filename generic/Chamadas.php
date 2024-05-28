<?php

namespace generic;

class Chamadas
{
    private $arrChamadas = [];
    public function __construct()
    {
        $this->arrChamadas = [
            "estacionamentos/listar" => new Acao("service\EstacionamentosService", "listar",[Acao::GET,Acao::POST]),
            "estacionamentos/listarUnico" => new Acao("service\EstacionamentosService", "listarUnico",[Acao::GET,Acao::POST]),
            "estacionamentos/vagas" => new Acao("service\EstacionamentosService", "vagas",[Acao::GET,Acao::POST]),
            "estacionamentos/inserir" => new Acao("service\EstacionamentosService", "inserir",[Acao::GET,Acao::POST]),
            "estacionamentos/atualizar" => new Acao("service\EstacionamentosService", "atualizar",[Acao::GET,Acao::POST]),
            "estacionamentos/excluir" => new Acao("service\EstacionamentosService", "excluir",[Acao::GET,Acao::POST]),
            "movimentacoes/darEntrada" => new Acao("service\MovimentacoesService", "darEntrada",[Acao::GET,Acao::POST]),
            "movimentacoes/darSaida" => new Acao("service\MovimentacoesService", "darSaida",[Acao::GET,Acao::POST]),
            "movimentacoes/listarMovimentacoes" => new Acao("service\MovimentacoesService", "listarMovimentacoes",[Acao::GET,Acao::POST]),
            "movimentacoes/listarGeral" => new Acao("service\MovimentacoesService", "listarGeral",[Acao::GET,Acao::POST]),
            "entrar" => new Acao("service\UsuariosService", "autenticar",[Acao::POST],false),           
        ];
    }

    public function buscarRotas($endpoint)
    {
    
        if (isset($this->arrChamadas[$endpoint])) {
          
            return   $this->arrChamadas[$endpoint];
        }

        return null;
    }
}
