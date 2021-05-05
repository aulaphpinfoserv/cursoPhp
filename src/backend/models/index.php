<?php
$dados = [
    "nome" => "Sadi",
    "sobrenome" => "Paese",
    "idade" => 53,
    "endereco" => [
        "rua" => "Cav. Jose Farina",
        "bairro" => "Licorsul",
    ]
];
//var_dump($dados);
echo json_encode($dados);
