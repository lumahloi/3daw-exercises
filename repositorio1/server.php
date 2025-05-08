<?php

$params = filter_input_array( INPUT_POST, [
    "nome" => FILTER_SANITIZE_STRING,
    "idade" => FILTER_SANITIZE_STRING,
    "temDoencaPrevia" => FILTER_SANITIZE_STRING
]);

$idade = $params["idade"];
$temDoencaPrevia = $params["temDoencaPrevia"];

switch($idade) {
    case 1:
        $valor = 200;
        break;
    case 2:
        $valor = 300;
        break;
    case 3:
        $valor = 450;
        break;
    case 4:
        $valor = 675;
        break;
    case 5:
        $valor = 1012.5;
        break;
    case 6:
        $valor = 1518.75;
        break;
    default:
        $valor = 0;
        break;
}

if($temDoencaPrevia === "S")
    $valor *= 1.3;

header('Content-Type: application/json');

$valor = str_replace('.',',',$valor);

echo json_encode([ "valor" => $valor ]);