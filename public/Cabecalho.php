<nav class="minimal-header">
    <ul>
        <li><a href="http://localhost/mvc20241/estacionamentos/listar">Listar</a></li>
        <li><a href="http://localhost/mvc20241/estacionamentos/buscaVagas">Vagas</a></li>
        <li><a href="http://localhost/mvc20241/estacionamentos/buscaInserir">Inserir</a></li>
        <li><a href="http://localhost/mvc20241/estacionamentos/buscaAtualizar">Atualizar</a></li>
        <li><a href="http://localhost/mvc20241/estacionamentos/buscaExcluir">Excluir</a></li>

    </ul>
</nav>


<style>
    .minimal-header {
        background-color: #f2f2f2;
        padding: 10px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .minimal-header ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .minimal-header li {
        float: left;
    }

    .minimal-header li a {
        display: block;
        color: #333;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .minimal-header li a:hover {
        background-color: #ddd;
        color: #000;
    }
</style>