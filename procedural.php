<?php

$conexao = mysqli_connect('127.0.0.1', 'root', '123456789', 'treinaweb');

$result = mysqli_query($conexao, 'select * from alunos');

var_dump(mysqli_fetch_all($result));