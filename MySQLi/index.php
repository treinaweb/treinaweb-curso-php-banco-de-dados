<?php

$conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

//$sql = 'create table alunos (id int primary key, nome varchar(100))';

//$sql = "insert into alunos (id, nome) values (1, 'João da Silva')";

$id = '2 or 1=1';

$sql = "select * from alunos where id = {$id}";

$resultado = $conexao->query($sql);

// while($linha = $resultado->fetch_object()) {
//     var_dump($linha);
// }

$linhas = $resultado->fetch_all(MYSQLI_ASSOC);

foreach ($linhas as $linha) {
    echo $linha['id'] . ' ' . $linha['nome'] . '<br>';
}

//$conexao2 = mysqli_connect('127.0.0.1', 'root', '123456789', 'treinaweb');

//var_dump($conexao2);