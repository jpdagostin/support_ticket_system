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
            <li><a href="user.php">Tela inicial</a></li>
        </ul>
    </div>

        <form action="process.php" method="POST" class="modal-content">
            <h2>Novo chamado</h2>
            <br>
            <!-- <input name="date" type="date" placeholder="Data de hoje ..."> -->
            <input name="title" type="text" placeholder="Assunto ...">
            <input name="description" type="text" placeholder="Descrição ...">
            <br>
            <button name="send" class="extract-report">Criar</button>
        </form>

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
                    echo "</tr>";
                    while($rou_chamado = mysqli_fetch_assoc($resultados)){
                        echo "<tr>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['assuntoChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['descChamado'] . "</td>";
                        echo "<td style='border: 3px solid #000; border-radius: 10px; text-align: center; text-transform: uppercase;'>" . $rou_chamado['dateChamado'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>

            </div>

        </div>
    </div>

</body>
</html>
