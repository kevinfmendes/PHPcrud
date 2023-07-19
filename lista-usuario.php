<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela de Usuários</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/teste-form.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                //INSERE NA VARIAVEL A CONSULTA SQL (A CONEXAO E TRATAMENTO DE DADOS AQUI TÁ MUITO CRUA, CRUD MT SIMPLES S/ ORIENTACAO A OBJ)
                $sql = "SELECT * FROM usuarios";

                //captura resultado sql
                $respostaListar = $conn->query($sql);

                //captura numero de rows do resultado
                $qtdDeUsuarios = $respostaListar->num_rows;

                if ($respostaListar == true) {
                    if ($qtdDeUsuarios > 0) {
                        //exibir o resultado
                        ?>
                            <div class="tabela">
                            <h2>Lista de Usuários</h2>
                            <table class="table">
                                <tr>
                                    <th>#ID</th>
                                    <th>NOME</th>
                                    <th>EMAIL</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                                <?php while ($row = $respostaListar->fetch_object()) { ?>
                                    <tr>
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->nome; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><button class="btn btn-primary" onclick="location.href='?page=editar&id=<?php echo $row->id; ?>'"><i class="bi bi-pencil-square"></i></button></td>
                                        <td><button class="btn btn-danger" onclick="if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id=<?php echo $row->id; ?>'} else { return false; }"><i class="bi bi-x-square"></i></button></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            </div>
                            <?php
                    } else {
                        echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
