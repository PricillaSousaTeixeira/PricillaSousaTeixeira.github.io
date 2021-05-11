<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/logo.jpeg">
    <link href="style.css" rel="stylesheet">
    <title>Use sua mente</title>

</head>

<body>
    <div class="nav-logo">
        <div><img src="../imagens/logo.jpeg" alt="logo"></div>
        <div><img src="../imagens/neo.jpeg" alt="logo"></div>
    </div>

    <div id="header">
    <h1>FALE CONOSCO</h1>
        <h2> Adoraríamos receber suas sugestões e feedback.</h2>
</div>
    <main>
        <div class="container">
            <h2>Contato</h2>


            <form method="POST" action="processa.php">

                <div class="input-field">

                    <input type="text" name="nome" placeholder="Nome completo">
                </div>
                <div class="input-field">

                    <input type="email" name="email" placeholder="Seu e-mail">
                    <div>
                        <label>Mensagem</label>
                        <textarea name="mensagem" rows="6" cols="44"></textarea>

                        <input type="submit" name="btnLogin" value="Enviar">
            </form>
        </div>
    </main>
    <footer>

<p> Copyright 2021 - Mente Sã - Todos os Direitos Reservados</p>

<a href="../politica/privacidade.html" target="_blank">
    <p>Política de Privacidade</p>
</a>

<a href="../contato/contato.php" target="_blank"> 
    <p>Contato</p>
</a>

<footer>
</body>

</html>