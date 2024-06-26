<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>DAR SAIDA</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #app {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px 0;
        }

        label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background: #425867;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #10161a;
        }

        body {
            background-color: lightcyan;
        }

        /* Estilos específicos para a tabela de movimentações */
        #app .tabela-movimentacoes {
            border: 1px solid #ccc;
            margin-top: 20px;
        }

        #app .tabela-movimentacoes th,
        #app .tabela-movimentacoes td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        #app .tabela-movimentacoes th {
            background-color: #f4f4f4;
            color: #333;
        }

        #app .tabela-movimentacoes tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div id="app">
        <h2>LISTA MOVIMENTO</h2>
        <table>
            <tr>
                <td style="text-align: right">DATA:</td>
                <td>
                    <label for="entrada">
                        <input type="text" v-model="entrada" id="entrada">
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button @click="enviar">Enviar</button>
                </td>
            </tr>
        </table>

        <table v-if="movimentacoes.length > 0" class="tabela-movimentacoes">
            <thead>
                <tr>
                    <th>Estacionamento</th>
                    <th>Placa</th>
                    <th>Entrada</th>
                    <th>Saída</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="mov in movimentacoes" :key="mov.MOVIMENTACAO">
                    <td>{{ mov.ESTACIONAMENTO }}</td>
                    <td>{{ mov.PLACA }}</td>
                    <td>{{ mov.ENTRADA }}</td>
                    <td>{{ mov.SAIDA || 'N/A' }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                entrada: '',
                movimentacoes: []
            },
            methods: {
                enviar() {
                    let dados = {
                        entrada: this.entrada,
                    };

                    const url = 'http://localhost/mvc20241/movimentacoes/listarMovimentacoes';

                    const options = {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(dados)
                    };

                    fetch(url, options)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Erro na requisição: ' + response.statusText);
                            }
                            return response.json(); // Parse JSON response
                        })
                        .then(data => {
                            this.movimentacoes = data.retorno; // Atualiza a lista de movimentações
                        })
                        .catch(error => {
                            console.error('Erro:', error);
                        });
                }
            }
        });
    </script>
</body>

</html>
