<?php

try {
    $conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

    if ($conexao->connect_errno) {
        throw new Exception($conexao->connect_error, $conexao->connect_errno);
    }

    $result = $conexao->query('select * from alunos');

    if (!$result) {
        throw new Exception($conexao->error, $conexao->errno);
    }

    var_dump($result->fetch_all());

} catch (\Throwable $e) {
    echo "mensagem: " . $e->getMessage();
    echo "<br>codigo erro: " . $e->getCode();
}

