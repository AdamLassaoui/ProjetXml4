<?php
require('controller.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ocordo</title>
</head>

<body>
    <nav id="navBar">
        <ul>
            <?php foreach ($xml->page as $page)
            { ?>
                <li><a href="<?= $page['id']; ?>.html" target="_self"><?= $page->menu; ?></a></li>
            <?php } ?>
        </ul>
    </nav>
    <?php
    if (!empty($_GET['id']) || isset($_GET['id'])) {
        if (is_numeric($_GET['id'])) {
            if (in_array($_GET['id'], $idControl)) {
                echo $xml->page[$_GET['id'] - 1]->content;
            } else {
                $error =  'La page recherchée n\'existe pas';
            }
        } else {
            $error =  'La page recherchée n\'existe pas';
        }
    } else {
        if (!$_GET) {
            echo $xml->page[0]->content;
        } else {
            $error =  'La page recherchée n\'existe pas';
        }
    }
    ?>
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <p class="text-alert warning"><?= $error ?></p>
            </div>
        </div>
    </div>

</body>

</html>