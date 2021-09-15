<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzieje się | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <article class="articleThumbnail">
            <div class="articleThumbnail__info">
                <header class="articleThumbnail__header">
                    <div class="articleThumbnail__dot"></div>
                    <div class="articleThumbnail__date">10.09.2021</div>
                    <div class="articleThumbnail__line"></div>
                </header>
                <h2 class="articleThumbnail__title">Warsztat online dla nauczycieli: O działaniach z lalką i przedmiotem</h2>
                <p class="articleThumbnail__description">Teatr lalek w pracy z uczniami 10+? Tak! Podczas warsztatów będziemy wykorzystywać przedmioty dostępne w szkole i inspirować się nimi do teatralnych działań.</p>
                <a href="/aktualnosc.php">
                    <button class="articleThumbnail__button">
                        Dowiedz się więcej
                        <?php include 'components/arrow-left.php' ?>
                    </button>
                </a>
            </div>
            <img src="assets/img/article-thumbnail.png" alt="miniatura artykułu" class="articleThumbnail__picture">
        </article>
        <section class="arrowBorderHeader">
            <header class="arrowBorderHeader__header">
                <h2 class="arrowBorderHeader__title">Zobacz poprzednie</h2>
                <?php include 'components/arrow-left.php' ?>
                <div class="arrowBorderHeader__dashedBorder"></div>
            </header>
            <article class="articleThumbnail">
                <div class="articleThumbnail__info">
                    <header class="articleThumbnail__header">
                        <div class="articleThumbnail__dot"></div>
                        <div class="articleThumbnail__date">10.09.2021</div>
                        <div class="articleThumbnail__line"></div>
                    </header>
                    <h2 class="articleThumbnail__title">Warsztat online dla nauczycieli: O działaniach z lalką i przedmiotem</h2>
                    <p class="articleThumbnail__description">Teatr lalek w pracy z uczniami 10+? Tak! Podczas warsztatów będziemy wykorzystywać przedmioty dostępne w szkole i inspirować się nimi do teatralnych działań.</p>
                    <a href="/aktualnosc.php">
                        <button class="articleThumbnail__button">
                            Dowiedz się więcej
                            <?php include 'components/arrow-left.php' ?>
                        </button>
                    </a>
                </div>
                <img src="assets/img/article-thumbnail.png" alt="miniatura artykułu" class="articleThumbnail__picture">
            </article>
        </section>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>