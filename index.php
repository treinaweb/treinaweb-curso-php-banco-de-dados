<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');

    $resultado = $conexao->query("select * from alunos");
    
    foreach ($resultado as $aluno) {
        var_dump($aluno);
    }

} catch (\PDOException $e) {
    echo $e->getMessage();
}



