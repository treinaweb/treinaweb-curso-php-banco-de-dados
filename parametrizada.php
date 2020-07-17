<?php

$conexao = new PDO('mysql:host=127.0.0.1;dbname=treinaweb', 'root', '123456789');

//Parâmetro nomeado e bind pela referência 
$termoBusca = '%maria%';

$query = $conexao->prepare('SELECT * FROM alunos WHERE nome like :termobusca');

$query->bindParam(':termobusca', $termoBusca, PDO::PARAM_STR);

$termoBusca = '%Silva%';

$query->execute();

foreach ($query as $linha) {
    var_dump($linha);
}

//Parâmetro indexado e bind pelo valor diretamente
$id = 2;

$query = $conexao->prepare('SELECT * FROM alunos where id = ?');

$query->bindValue(1, $id, PDO::PARAM_INT);

$id = 3;

$query->execute();

foreach ($query as $linha) {
    var_dump($linha);
}