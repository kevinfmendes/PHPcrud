<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/teste-form.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res->fetch_object();
?>

<div class="form-container">
    <form class="form" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id;?>">
        <div class="title">Editar Cadastro<br>
        </div>
        <input type="text" placeholder="" value="<?php echo $row->nome ?>" name="nome" class="input">
        <input type="date" placeholder="" value="<?php echo $row->data_nasc ?>"name="datanasc" class="input">
        <input type="email" placeholder="" name="email"value="<?php echo $row->email ?>" class="input">
        <input type="password" placeholder="" name="password" class="input" required>
        
        <button class="button-confirm" type="submit">Editar</button>
        <button class="btn btn-danger" type="button">Cancelar</button>
    </form>
</div>