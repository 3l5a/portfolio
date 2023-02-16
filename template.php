<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elsa Thiévet | développeuse web à Montpellier</title>
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    $page = filter_input(INPUT_GET, 'page');

    if (!isset($page)) {
        $page = "home";
    };

    include "common/header.php";

    switch ($page) {
        case 'home':
            include "content/home.php";
            break;
        case 'realisations':
            include "content/realisations.php";
            break;
        case 'veilles':
            include "content/veilles.php";
            break;
        case 'cv':
            include "content/cv.php";
            break;
        case 'bootstrap':
            include "content/bootstrap.php";
            break;
        case 'player':
            include "content/player.php";
            break;
        default:
            header('Location: content/404.php');
            die();
    }

    include "common/footer.php";
    ?>
</body>
<script src="script.js"></script>

</html>