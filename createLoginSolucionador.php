<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleUser.css">
</head>
<body>
    <div class="container">
        <div class="background">
        <div class="menu">
        <ul>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
            <form action="createLoginolucionador.php" method="POST" class="modal-content">
                <h2>Criar Login</h2>
                <br>
                <input name="nome" type="text" placeholder="Nome">
                <input name="email" type="email" placeholder="email@gmail.com">
                <input name="senha" type="password" placeholder="Senha">
                <br>
                <button name="send" class="extract-report">Criar</button>
            </form>
        </div>
    </div>

</body>
</html>
