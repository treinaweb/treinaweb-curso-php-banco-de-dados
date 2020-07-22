<?php

try {
    $serverName = 'localhost\SQLEXPRESS';
    $database = 'treinaweb';
    
    $conexao = new PDO("sqlsrv:server=$serverName;Database = $database", 'sa', '123456789');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'CREATE TABLE alunos (id int primary key, nome varchar(100))';
    $conexao->query($sql);

    $sql = "INSERT INTO alunos (id, nome) VALUES (1, 'João da Silva')";
    $conexao->query($sql);

    $sql = "SELECT * FROM alunos";
    $resultado = $conexao->query($sql);
    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);

    var_dump($alunos);

} catch (\Throwable $e) {
    # code...
}