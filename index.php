<?php

$conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

//$sql = 'create table alunos (id int primary key, nome varchar(100))';

//$sql = "insert into alunos (id, nome) values (1, 'João da Silva')";

$sql = 'select * from alunos';

$resultado = $conexao->query($sql);

while($linha = $resultado->fetch_object()) {
    var_dump($linha);
}

//$conexao2 = mysqli_connect('127.0.0.1', 'root', '123456789', 'treinaweb');

//var_dump($conexao2);