<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>LISTAR</title>
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

        #container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        body {
            background-color: lightcyan;
        }
    </style>
</head>

<body>
    <div id="container">
        <h2>LISTAR</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CAPACIDADE</th>
            </tr>
            <?php
            foreach ($param['lista'] as $v) {
            ?>
                <tr>
                    <td><?= $v['ESTACIONAMENTO'] ?></td>
                    <td><?= $v['CAPACIDADE'] ?></td>
                    <td><?= $v['DESCRICAO'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>