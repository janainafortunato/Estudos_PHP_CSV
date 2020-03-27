<?php

$filename = 'livros.csv';
$data = file($filename);
for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Lista de livros</h1>
    <table cellpadding="10">
        <?php foreach ($data as $linha => $elemento): ?>
           <tr>
                <td><?= $elemento[0] ?></td>
                <td><?= $elemento[1] ?></td>
                <td><a href="delete.php?linha=<?=$linha?>">Delete</a></td>
                <td><a href="edit.php?linha=<?=$linha?>">Edit</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>