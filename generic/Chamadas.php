<?php

namespace generic;

class Chamadas
{
    private $arrChamadas = [];
    public function __construct()
    {
        $this->arrChamadas = [
            "estacionamentos/listar" => new Acao("controller\EstacionamentosController", "listar", [Acao::GET], false),
            "estacionamentos/listarUnico" => new Acao("service\EstacionamentosService", "listarUnico", [Acao::GET, Acao::POST]),

            "estacionamentos/buscaVagas" => new Acao("controller\EstacionamentosController", "vagas", [Acao::GET], false),
            "estacionamentos/vagas" => new Acao("service\EstacionamentosService", "vagas", [Acao::POST], false),

            "estacionamentos/buscaInserir" => new Acao("controller\EstacionamentosController", "inserir", [Acao::GET], false),
            "estacionamentos/inserir" => new Acao("service\EstacionamentosService", "inserir", [Acao::POST], false),

            "estacionamentos/buscaAtualizar" => new Acao("controller\EstacionamentosController", "atualizar", [Acao::GET], false),
            "estacionamentos/atualizar" => new Acao("service\EstacionamentosService", "atualizar", [Acao::POST] , false),

            "estacionamentos/buscaExcluir" => new Acao("controller\EstacionamentosController", "excluir", [Acao::GET], false),
            "estacionamentos/excluir" => new Acao("service\EstacionamentosService", "excluir", [Acao::POST], false),

            "movimentacoes/darEntrada" => new Acao("service\MovimentacoesService", "darEntrada", [Acao::GET, Acao::POST]),
            "movimentacoes/darSaida" => new Acao("service\MovimentacoesService", "darSaida", [Acao::GET, Acao::POST]),
            "movimentacoes/listarMovimentacoes" => new Acao("service\MovimentacoesService", "listarMovimentacoes", [Acao::GET, Acao::POST]),
            "movimentacoes/listarGeral" => new Acao("service\MovimentacoesService", "listarGeral", [Acao::GET, Acao::POST]),


            "entrar" => new Acao("service\UsuariosService", "autenticar", [Acao::POST], false),
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
