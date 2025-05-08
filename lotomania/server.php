<?php
$limite = filter_input(INPUT_GET, "limite", FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_GET, "quantidade", FILTER_SANITIZE_NUMBER_INT);
$numArray = [];

if($limite == null){
    $limite = 60;
}

if($quantidade == null){
    $quantidade = 6;
}

for( $i=1; $i <= $quantidade; $i++ ){
    $num = random_int(0, $limite);
    array_push($numArray, $num);
}

if($numArray == null){
    http_response_code(404);
} else {
    Header("Content-Type: application/json");
    echo json_encode($numArray);
}
?>