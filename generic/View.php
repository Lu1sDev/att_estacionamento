<?php
namespace generic;
class View {
    private function cabecalho() {
        return include('public/Cabecalho.php');
    }
    private function rodape(){
        return "<div> Rodape </div>";
    }

    public function conteudo($caminho,$param = array()){
        $this->cabecalho();
        include $caminho;
        //echo $this->rodape();
    }
}
?>