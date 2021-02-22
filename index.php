<?php
require_once('data.php');






?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>class練習メニュー</h1>

    <form action="confirm.php" method="post">
        <?php foreach ($menus as $menu) : ?>
            <h3>品名：<?= $menu->getName() ?></h3>
            <p>¥：<?= $menu->getprice() ?> </p>
            <input type="text" value='0' name='<?= $menu->getName() ?>'>
        <?php endforeach; ?>
        <input type="submit" value="送信">
    </form>
</body>

</html>