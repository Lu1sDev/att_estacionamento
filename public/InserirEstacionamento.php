<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CADASTRAR</title>
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
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>

<body>
    <div id="app">
        <h2 style="text-align: center;">CADASTRO</h2>
        <table>
            <tr>
                <td style="text-align: right">
                    NOME:
                </td>
                <td>
                    <label for="nome">
                        <input type="text" v-model="nome" id="nome">
                    </label>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    CAPACIDADE:
                </td>
                <td>
                    <label for="capacidade">
                        <input type="text" v-model="capacidade" id="capacidade">
                    </label>
                </td>
            </tr>
            <tr>
                <td collspan="2">
                    <button @click="enviar">Enviar</button>
                </td>
            </tr>
        </table>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                nome: '',
                capacidade: ''
            },
            methods: {
                enviar() {
                    let dados = {
                        desc: this.nome,
                        cap: this.capacidade
                    };

                    const url = 'http://localhost/mvc20241/estacionamentos/inserir';

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
                            return response.text();
                        })
                        .then(data => {
                            console.log(data);
                            window.location.href = "/mvc20241/estacionamentos/listar";
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