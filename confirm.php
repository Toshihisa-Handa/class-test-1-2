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

    <h2>注文内容確認</h2>
    <?php foreach ($menus as $menu) : ?>
        <?php $count = $_POST[$menu->getName()];
          $menu->setCount($count);
        ?>

        <h3>品名：<?php echo $menu->getName(); ?></h3>
        <h4>数量：<?= $count ?></h4>
        <h4>価格<?= $menu->gettotal()?></h4>

    <?php endforeach ?>
</body>

</html>