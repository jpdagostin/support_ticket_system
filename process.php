<?php
include_once("config.php");

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

$result_chamados = "INSERT INTO chamados (dateChamado, assuntoChamado, descChamado) VALUES (NOW(), '$title', '$description')";

$resultados = mysqli_query($conn, $result_chamados);

if (mysqli_insert_id($conn)) {
    header("Location: userCreate.php");
} else {
    header("Locantion: userCreate.php");
}
?>
