<?php
if (isset($_POST['send'])) {
    include_once('config.php');

    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $result = mysqli_query($conexao, "INSERT INTO users(dateStart, assunt, descriptionTicket) VALUES ('$date', '$title', '$description')");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleUser.css">
    <title>Tela com Menu e Modais</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="#modal-raio-x">{+} NOVO CHAMADO</a></li>
            <li><a href="#modal-status-veiculos">AJUDA {?}</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="background">

            <div class="historico-chamados">
                <h2>Histórico de Chamados</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Assunto</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Inserir linhas com dados dos chamados aqui -->
                        <tr>
                            <td>2023-10-21</td>
                            <td>Problema com o aplicativo</td>
                            <td>O aplicativo trava ao iniciar.</td>
                        </tr>
                        <tr>
                            <td>2023-10-20</td>
                            <td>Dúvida sobre pagamento</td>
                            <td>Como posso alterar minha forma de pagamento?</td>
                        </tr>
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal" id="modal-raio-x" style="display: none;">
        <form action="user.php" method="POST" class="modal-content">
            <h2>Novo chamado</h2>
            <hr>
            <input name="date" type="date" placeholder="Data de hoje ...">
            <input name="title" type="text" placeholder="Assunto ...">
            <input name="description" type="text" placeholder="Descrição ...">
            <hr>
            <button name="send" class="extract-report">Enviar</button>
            <button class="close-modal">Fechar</button>
        </form>
    </div>

    <div class="modal" id="modal-status-veiculos" style="display: none;">
        <div class="modal-content">
            <h2>Ajuda</h2>
            <h3>Entre em contato conosco ...</h3>
            <button class="close-modal">Fechar</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
