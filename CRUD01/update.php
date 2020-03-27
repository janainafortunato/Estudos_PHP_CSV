<?php

    $filename = 'livros.csv';

    $nome = $_POST['livro'];
    $pages = $_POST['paginas'];
    $linha = $_POST['linha'];

    if (!file_exists($filename)) {
        touch($filename);
    }

    $data = file($filename);
    $data[$linha] = $nome . ',' . $pages . "\n";
    $data_str = implode('', $data);
    file_put_contents($filename, $data_str);

    header('location: list.php');

?>