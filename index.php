<?php

$conexao = new mysqli('127.0.0.1', 'root', '123456789', 'treinaweb');

var_dump($conexao);

$conexao2 = mysqli_connect('127.0.0.1', 'root', '123456789', 'treinaweb');

var_dump($conexao2);