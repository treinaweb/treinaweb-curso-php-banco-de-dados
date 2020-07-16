<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');

    $resultado = $conexao->query("select * from alunos");

    if (!$resultado) {
        $erro = $conexao->errorInfo();

        throw new \PDOException($erro[2], $erro[1]); 
    }
    
    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    var_dump($alunos);

} catch (\PDOException $e) {
    echo "mensagem: " . $e->getMessage();
    echo "<br>Codigo: " . $e->getCode();
}



