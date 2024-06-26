<nav class="subheader">
    <ul>
        <li><a href="http://localhost/mvc20241/movimentacoes/buscaDarEntrada">Dar Entrada</a></li>
        <li><a href="http://localhost/mvc20241/movimentacoes/buscaDarSaida">Dar Saida</a></li>
        <li><a href="http://localhost/mvc20241/movimentacoes/buscaListarMovimentacoes">Listar Movimentacao</a></li>
        <li><a href="http://localhost/mvc20241/movimentacoes/buscaListarGeral">Listar Geral</a></li>
    </ul>
</nav>

<style>
    .subheader {
        background-color: #333;
        color: #fff;
        padding: 8px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        position: fixed;
        top: 50px;
        z-index: 999;
    }

    .subheader ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .subheader li {
        float: left;
    }

    .subheader li a {
        display: block;
        color: #fff;
        text-align: center;
        padding: 10px 12px;
        text-decoration: none;
    }

    .subheader li a:hover {
        background-color: #555;
    }
</style>