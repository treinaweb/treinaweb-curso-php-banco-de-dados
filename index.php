<?php

try {
    $conexao = new PDO('mysql:host=5555127.0.0.1;dbname:treinaweb', 'root', '123456789');
    
    var_dump($conexao);

} catch (\PDOException $e) {
    echo $e->getMessage();
}



