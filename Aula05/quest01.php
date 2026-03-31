<?php
    $produtos = [
        "nome" => "pedro",
        "preco" => 25,
        "quantidade" => 12
    ];
    $produtos['email'] = 'ana@exemplo.com';

    $json = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("dados.json", $json);

    var_dump($json)
?>