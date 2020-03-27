<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < 10; $i++): ?>
            <li><a href="delete.php?linha=<?= $i ?>"><?= $i ?></a></li>
        <?php endfor; ?>
        <!-- <li>Batman</li> -->
    </ul>
</body>
</html>