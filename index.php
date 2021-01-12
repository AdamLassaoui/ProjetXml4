<?php
require('controller.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ocordo</title>
</head>

<body>
    <nav id="navBar">
        <ul>
            <?php foreach ($xml->page as $page)
            { ?>
                <li><a href="?id=<?= ($page['id'] - 1) ?>" target="_self"><?= $page->menu; ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <?= $currentPage ?>
</body>

</html>


<?php
