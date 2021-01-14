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
    <nav id="navBar" class="navbar navbar-expand-lg mb-5 navbar-dark">
        <a class="navbar-brand" href="#">Maçonnerie Ocordo</a>
        <button id="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach ($xml->page as $page)
                { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= $page['id']; ?>.html" target="_self"><?= $page->menu; ?></a></li>
                <?php } ?>
            </ul>
        </div>
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
                <p class="text-alert warning">
                <?= $error ?>
                <img src="assets/img/Sourire-du-plombier-1.jpg" alt="" class="p-5"></p>
            </div>
        </div>
    </div>

</body>

</html>