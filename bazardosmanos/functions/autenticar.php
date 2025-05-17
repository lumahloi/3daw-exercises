<?php
require_once "autenticado.php";

$params = filter_input_array(INPUT_POST, [
  "usuario" => FILTER_DEFAULT,
  "senha" => FILTER_DEFAULT
]);

$usuario = trim(htmlspecialchars($params["usuario"] ?? ''));
$senha = trim(htmlspecialchars($params["senha"] ?? ''));


if ($usuario === "mbelo" && $senha === "patasdegalinha") {
  $_SESSION["autenticado"] = true;
  http_response_code(200);
} else {
  $_SESSION["autenticado"] = false;
  http_response_code(401);
}