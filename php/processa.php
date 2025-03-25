<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            function(){  // Inicia a sessão

            // Verifica se os dados foram enviados pelo formulário
            if (isset($_POST['nome']) && isset($_POST['email'])) {
                $_SESSION['nome'] = $_POST['nome'];  // Armazena o nome na sessão
                $_SESSION['email'] = $_POST['email']; // Armazena o e-mail na sessão

                // Redireciona para a página de boas-vindas
                header("Location: bem_vindo.php");
                exit();
            } else {
                echo "Erro: Dados não recebidos!";
            }
        }

            function(){ // Inicia a sessão

            // Verifica se há dados armazenados na sessão
            if (isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                $nome = $_SESSION['nome'];
                $email = $_SESSION['email'];
            } else {
                // Se a sessão não existir, redireciona para o formulário
                header("Location: index.html");
                exit();
            }
        }
        ?>

        <?php
            function(){ // Inicia a sessão
            
            // Verifica se os dados foram enviados pelo formulário
            if (isset($_POST['nome']) && isset($_POST['email'])) {
                $_SESSION['nome'] = $_POST['nome'];  // Armazena o nome na sessão
                $_SESSION['email'] = $_POST['email']; // Armazena o e-mail na sessão
            
                // Redireciona para a página de boas-vindas
                header("Location: bem_vindo.php");
                exit();
            } else {
                echo "Erro: Dados não recebidos!";
            }
        }
            
            function(){ // Inicia a sessão
            
            // Verifica se há dados armazenados na sessão
            if (isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                $nome = $_SESSION['nome'];
                $email = $_SESSION['email'];
            } else {
                // Se a sessão não existir, redireciona para o formulário
                header("Location: index.html");
                exit();
            }
        }
        ?>
    </body>
</html>

