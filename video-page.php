<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <section class="videoSubject">
            <div class="videoSubject__info">
                <div class="videoSubject__title">
                    <span class="videoSubject__title__text">Ćwiczenia</span>
                    <?php @include 'components/arrow-left.php' ?>
                </div>
                <h2 class="videoSubject__subject">
                    Rozgrzewka, integracja, pobudzanie kreatywności grupy
                </h2>
                <span class="videoSubject__description"></span>
            </div>
            <div class="videoSubject__wrapper">
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <a href="/video-szczegoly.php">
                    <button class="button">Zobacz więcej</button>
                </a>
            </div>
        </section>
        <section class="videoSubject">
            <div class="videoSubject__info">
                <div class="videoSubject__title">
                    <span class="videoSubject__title__text">Zajęcia</span>
                    <?php @include 'components/arrow-left.php' ?>
                </div>
                <h2 class="videoSubject__subject">
                Sfilmowane konspekty zajęć umieszczonych na portalu
                </h2>
                <span class="videoSubject__description"></span>
            </div>
            <div class="videoSubject__wrapper">
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <a href="/video-szczegoly.php">
                    <button class="button">Zobacz więcej</button>
                </a>
            </div>
        </section>
        <section class="videoSubject">
            <div class="videoSubject__info">
                <div class="videoSubject__title">
                    <span class="videoSubject__title__text">Zrób to sam</span>
                    <?php @include 'components/arrow-left.php' ?>
                </div>
                <h2 class="videoSubject__subject">
                Techniki teatralnedo wykorzystaniaw szkole
                </h2>
                <span class="videoSubject__description"></span>
            </div>
            <div class="videoSubject__wrapper">
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <a href="/video-szczegoly.php">
                    <button class="button">Zobacz więcej</button>
                </a>
            </div>
        </section>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>