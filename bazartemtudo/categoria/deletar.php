<?php
require_once("../comum.php");
require_once(BASE_DIR . "/somenteAutenticado.php");

use Mbelo\Bazar\Banco;

$id_categoria = filter_input(INPUT_POST, "id_categoria");

$pdo = Banco::obterConexao();
$ps = $pdo->prepare("delete from categoria where id_categoria=:id_categoria");
$ps->bindParam(":id_categoria", $id_categoria, PDO::PARAM_INT);
$sucesso = $ps->execute();
if( $sucesso) {
    http_response_code(200);
}

