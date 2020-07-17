<?php

$conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');

$id = 2;

$query = $conexao->prepare('SELECT * FROM alunos where id = ?');

$query->bindValue(1, $id, PDO::PARAM_INT);

$query->execute();

foreach ($query as $linha) {
    var_dump($linha);
}