<?php
namespace dao\interface;
interface IMovimentacoesDAO{
    public function darEntrada($placa, $estacionamento);
    public function darSaida($movimentacao);
    public function listarMovimentacoes($entrada);
    public function listarGeral();
}