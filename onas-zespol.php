<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zespół | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <header class="arrowBorderHeader__header">
            <h2 class="arrowBorderHeader__title">Zespół Teatroteki Szkolnej:</h2>
            <?php include 'components/arrow-left.php' ?>
            <div class="arrowBorderHeader__dashedBorder"></div>
        </header>
        <?php include 'components/team-article.php' ?>
        <?php include 'components/team-article.php' ?>
        <header class="arrowBorderHeader__header">
            <h2 class="arrowBorderHeader__title">Prowadzący Warsztaty Teatroteki Szkolnej:</h2>
            <?php include 'components/arrow-left.php' ?>
            <div class="arrowBorderHeader__dashedBorder"></div>
        </header>
        <?php include 'components/team-article.php' ?>
        <?php include 'components/team-article.php' ?>
        <?php include 'components/team-article.php' ?>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>