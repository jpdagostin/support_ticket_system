<?php 
    include_once("config.php");
    $id = filter_input(INPUT_GET,'chamado_id', FILTER_SANITIZE_NUMBER_INT);
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
</head>
<body>
    <div class="container">
        <div class="background">
        <div class="menu">
        <ul>
            <li><a href="user.php">Tela Inicial</a></li>
            <li><a href="userCreate.php">Criar um novo chamado</a></li>
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
                    echo "<th style='border: 3px solid #000;text-align: center;text-transform: uppercase;'>Funções</th>";
                    echo "</tr>";
                    while($rou_chamado = mysqli_fetch_assoc($resultados)){
                        echo "<tr>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['assuntoChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['descChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['dateChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . "<a href='userEditForm.php?chamado_id=" . $rou_chamado['idChamados'] . "'>Editar</a>" . "<a href='userDelete.php?chamado_id=" . $rou_chamado['idChamados'] . "'>\n\n\n\nDeletar</a>" . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>

            </div>

        </div>
    </div>
</body>
</html>
