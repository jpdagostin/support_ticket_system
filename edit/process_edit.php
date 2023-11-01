<?php
include_once("config.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

$result_chamados = "UPDATE chamados (dateChamado, assuntoChamado, descChamado) VALUES (NOW(), '$title', '$description') WHERE idChamados = $id";

$resultados = mysqli_query($conn, $result_chamados);

if (mysqli_affected_rows($conn)) {
    header("Location: user.php");
} else {
    header("Locantion: user.php");
}
?>
