<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazwa Video | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <div class="columnWrapper firstBig">
            <div class="videoInfo">
                <header class="videoInfo__header">
                    <h3 class="videoInfo__title">Ćwiczenia</h3>
                    <?php include 'components/arrow-left.php' ?>
                </header>
                <h2 class="borderTitle">Rozgrzewka,integracja, pobudzanie kreatywności grupy</h2>
            </div>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
            <?php include 'components/video.php' ?>
        </div>
        <?php include 'components/columnPlaceholder.php' ?>
        <?php include 'components/columnPlaceholder.php' ?>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>