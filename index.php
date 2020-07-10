<?php

$conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

//$sql = 'create table alunos (id int primary key, nome varchar(100))';

//$sql = "insert into alunos (id, nome) values (1, 'João da Silva')";

$sql = 'select * from alunos';

var_dump($conexao->query($sql));

//$conexao2 = mysqli_connect('127.0.0.1', 'root', '123456789', 'treinaweb');

//var_dump($conexao2);