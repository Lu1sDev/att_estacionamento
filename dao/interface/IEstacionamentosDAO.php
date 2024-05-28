<?php
namespace dao\interface;
interface IEstacionamentosDAO{
    public function listar();
    public function listarUnico($estacionamento);
    public function vagas($estacionamentoc);
    public function inserir($desc = "null", $cap = 0);
    public function atualizar($desc, $cap, $estacionamento);
    public function excluir($estacionamento);
}