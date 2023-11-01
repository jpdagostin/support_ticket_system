<?php
include_once("config.php");
$id = filter_input(INPUT_GET, 'chamado_id', FILTER_SANITIZE_NUMBER_INT);
$result_chamado = "SELECT * FROM chamados WHERE idChamados = '$id'";
$result_chamados = "DELETE FROM chamados WHERE idChamados = '$id'"; // Corrigi para usar 'idChamados'

$resultados = mysqli_query($conn, $result_chamados);

if ($resultados) {
    header("Location: userEdit.php");
} else {
    header("Location: userEdit.php");
}
?>
