<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $resultado = $conexao->query("select * from alunos");
    
    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    var_dump($alunos);

} catch (\PDOException $e) {
    echo "mensagem: " . $e->getMessage();
    echo "<br>Codigo: " . $e->getCode();
}



