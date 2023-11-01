<?php
include_once("config.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$situation = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);

$result_chamados = "UPDATE chamados SET dateChamado = NOW(), assuntoChamado = '$title', descChamado = '$description', situacao = '$situation' WHERE idChamados = $id";

$resultados = mysqli_query($conn, $result_chamados);

if ($resultados) {
    header("Location: user.php");
} else {
    header("Location: user.php");
}
?>
    