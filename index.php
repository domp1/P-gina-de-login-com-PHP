<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="login">
                <div class="titulo">
                    <h1>Bem Vindo</h1>
                    <p>Já possui uma conta? entre por aqui</p>
                </div>
            <form action="login.php" method="post">
                <div class="linha">
                    <label for="nome">Nome</label>
                    <input type="text" id="cadastrar-nome" name="nome">
                </div>
                <div class="linha">
                    <label for="senha">Senha</label>
                    <input type="password" id="cadastrar-senha" name="senha">
                </div>
                <div class="separacao">
                    <input type="submit" value="ENTRAR" class="botao-entrar">
                </div>
            </form>
        </div>
        <div class="cadastro">
                <div class="titulo">
                    <h1>Criar Conta</h1>
                    <p>Novo aqui? Crie sua conta</p>
                </div>
            <form action="cadastrar.php" method="post">
                <div class="linha">
                    <label for="nome">Nome</label>
                    <input type="text" id="login-nome" name="nome">
                </div>
                <div class="linha">
                    <label for="senha">Senha</label>
                    <input type="password" id="login-senha" name="senha">
                </div>
                <div class="separacao">
                    <input type="submit" value="CRIAR" class="botao-criar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
