<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <section class="subject">
            <div class="subject__info">
                <div class="subject__title">
                    <span class="subject__title__text">Temat miesiąca</span>
                    <?php @include 'components/arrow-left.php' ?>
                </div>
                <h2 class="subject__subject">
                    Pszczoły, miód i kwaity
                </h2>
                <p class="subject__description">
                ile znaków Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempor voluptate eu qui pariatur exercitation commodo eiusmod elit est. Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempor voluptate eu qui pariatur exercitation commodo eiusmod elit est.Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempor voluptate eu qui pariatur exercitation commodo eiusmod elit est.Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempor voluptate eu qui pariatur exercitation commodo eiusmod elit est.
                </p>
                <?php include 'components/arrow-down.php' ?>
            </div>
            <div class="subject__wrapper">
                <?php include 'components/thumbnail.php' ?>
                <?php include 'components/thumbnail.php' ?>
                <?php include 'components/thumbnail.php' ?>
                <?php include 'components/thumbnail.php' ?>
                <?php include 'components/thumbnail.php' ?>
                <?php include 'components/thumbnail.php' ?>
            </div>
        </section>
        <section class="seeAlso">
            <header class="seeAlso__header">
                <span class="seeAlso__title">Zobacz też:</span>
                <span class="dashedBorder"></span>
            </header>
            <div class="seeAlso__wrapper">
                <p class="seeAlso__description">ile znaków Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempo</p>
                <div class="seeAlso__box">
                    <?php include 'components/video.php' ?>
                    <?php include 'components/video.php' ?>
                    <?php include 'components/video.php' ?>
                    <?php include 'components/video.php' ?>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="category__info">
                <header class="category__header">
                    <h2 class="category__header__title">Dzieje się</h2>
                    <?php include 'components/arrow-left.php' ?>
                </header>
                <div class="category__body">
                    <p class="category__body__text">ile znaków Adipisicing qui ullamco aliqua incididunt ullamco sit. Irure magna commodo aute tempo</p>
                </div>
            </div>
            <div class="category__wrapper">
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
                <?php include 'components/video.php' ?>
            </div>
        </section>
        <section class="category">
            <div class="category__info">
                <header class="category__header">
                    <h2 class="category__header__title">Filmy</h2>
                    <?php include 'components/arrow-left.php' ?>
                </header>
                <div class="category__body">
                    <!-- <p class="category__body__text"></p> -->
                </div>
            </div>
            <div class="category__wrapper">
                <?php include 'components/video-bigger.php' ?>
                <?php include 'components/video-bigger.php' ?>
            </div>
        </section>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>