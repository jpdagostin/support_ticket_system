<?php 
    include_once("config.php");
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result_chamado = "SELECT * FROM chamados WHERE idChamados = '$id'";
    $resultado_chamado = mysqli_query($conn, $result_chamado);
    $row_chamado = mysqli_fetch_assoc($resultado_chamado);
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
<div class="container">
        <div class="background">
        <div class="menu">
        <ul>
            <li><a href="userCreate.php">Criar um novo chamado</a></li>
            <li><a href="userEdit.php">Editar chamados</a></li>
            <li><a href="#modalAjuda">Ajuda</a></li>
        </ul>
    </div>

    <div class="historico-chamados">
                <title>Listar chamados</title>
                <?php
                    include_once("config.php");
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    $result_chamados = "SELECT * FROM chamados";
                    $resultados = mysqli_query($conn, $result_chamados);
                    echo "<table>";
                    echo "<tr>";
                    echo "<th style='border: 3px solid #000;text-align: center;text-transform: uppercase;'>Assunto</th>";
                    echo "<th style='border: 3px solid #000;text-align: center;text-transform: uppercase;'>Descrição</th>";
                    echo "<th style='border: 3px solid #000;text-align: center;text-transform: uppercase;'>Data de Abertura</th>";
                    echo "<th style='border: 3px solid #000;text-align: center;text-transform: uppercase;'>Status</th>";
                    echo "</tr>";
                    while($rou_chamado = mysqli_fetch_assoc($resultados)){
                        echo "<tr>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['assuntoChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['descChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['dateChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; text-align: center; text-transform: uppercase; background-color: " . ($rou_chamado['situacao'] === 'ABERTO' ? 'green' : 'red') . ";'>" . $rou_chamado['situacao'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>

            </div>

    <div class="modal" id="modalAjuda" style="display: none;">
        <div class="modal-content">
            <h2>Ajuda</h2>
            <h3>Entre em contato conosco ...</h3>
            <button class="close-modal">Fechar</button>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
