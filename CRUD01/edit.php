<?php

$linha = $_GET['linha'];

$data = file('livros.csv'); // lê o arquivo para um array
$livro = trim($data[$linha]); // pega a linha específica do array e coloca em $livro
$dados_livro = explode(',', $livro); // pega os dados do livro e coloca no array $dados_livro

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="text" name="livro" value="<?=$dados_livro[0]?>">
        <input type="number" name="paginas" value="<?=$dados_livro[1]?>">
        <input type="hidden" name="linha" value="<?=$linha?>">
        <input type="submit">
    </form>
</body>
</html>