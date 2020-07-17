<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexao->beginTransaction();

        $conexao->query("INSERT INTO alunos (id, nome) VALUES (5, 'Suelen')");
        $conexao->query("UPDATE alunos123 SET nome = 'Suelen Fonseca' WHERE id = 5");

    $conexao->commit();
   

} catch (\PDOException $e) {
    $conexao->rollBack();

    echo "mensagem: " . $e->getMessage();
    echo "<br>Codigo: " . $e->getCode();
}



