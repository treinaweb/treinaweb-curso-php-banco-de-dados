<?php

$conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

$id1 = '1';
$id2 = '2';

$stmt = $conexao->stmt_init();

$stmt->prepare('select * from alunos where id = ? or id = ?');
$stmt->bind_param('ii', $id1, $id2);

$stmt->execute();
$stmt->bind_result($idAluno, $nomeAluno);

while($stmt->fetch()) {
    var_dump($idAluno, $nomeAluno);
}



