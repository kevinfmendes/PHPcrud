<?php
switch($_REQUEST["acao"]){
    case 'cadastrar': //'cadastrar' neste caso eh o value passado dentro do input hidden com name 'acao'
        $nome = $_POST["nome"]; //passando as variaveis com method POST p/ salvar 
        $datanasc = $_POST["datanasc"];
        $email = $_POST["email"];
        $senha = md5($_POST["password"]); //md5 cobrindo a variavel p/ adicionar hash na senha

        //salvar padrão sendo passado na mao mesmo
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
                VALUES ('${nome}','${email}', '${senha}', '${datanasc}')";
        
        //criando variavel com nome resp p/ capturar resposta, var $conn vem do meu config.php
        $resp = $conn -> query($sql);

        if ($resp == true) {
            print"<script>alert('Cadastrado com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível cadastrar');</script>";
            print"<script>location.href='?page=listar'</script>";
        }

    break;
    case 'editar':
        $id = $_POST["id"];
        $nome = $_POST["nome"]; //passando as variaveis com method POST p/ salvar 
        $datanasc = $_POST["datanasc"];
        $email = $_POST["email"];
        $senha = md5($_POST["password"]); //md5 cobrindo a variavel p/ adicionar hash na senha

        //salvar padrão sendo passado na mao mesmo
        $sql = "UPDATE usuarios SET nome='${nome}', email='${email}', senha='${senha}', data_nasc='${datanasc}'
                WHERE id='${id}'";
        
        //criando variavel com nome resp p/ capturar resposta, var $conn vem do meu config.php
        $resp = $conn -> query($sql);

        if ($resp == true) {
            print"<script>alert('Editado com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível editar');</script>";
            print"<script>location.href='?page=listar'</script>";
        }

    break;
    case 'excluir':

        $sql = "DELETE FROM usuarios WHERE id='${id}'";
        $resp = $conn -> query($sql);

        if ($resp == true) {
            print"<script>alert('Excluido com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível editar');</script>";
            print"<script>location.href='?page=listar'</script>";
        }
    break;
    default: '';
    break;
}

?>