<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/teste-form.css">
    <link rel="stylesheet" href="css/estilos.css">
    

</head>
<div class="form-container">
    <form class="form" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">    
        <div class="title">Novo Cadastro<br><span> Complete o cadastro para criar um novo usuário </span>
        </div>
        <label>Nome
        <input type="text" placeholder="Seu nome completo" name="nome" class="input">
        </label>
        <label>Birth
        <input type="date" placeholder="" name="datanasc" class="input">
        </label>
        <label>Email
        <input type="email" placeholder="Email" name="email" class="input">
        </label>
        <label>Senha
        <input type="password" placeholder="Password" name="password" class="input">
        </label>
        <button class="button-confirm" type="submit">Let`s go →</button>
    </form>
</div>