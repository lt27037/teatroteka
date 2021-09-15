<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazwa artykułu | Teatroteka Szkolna</title>
    <link rel="stylesheet" href="assets/sass/index.css">
</head>
<body>
    <?php @include 'components/header.php' ?>
    <div class="container">
        <article class="articleThumbnail noBackground">
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
        <div class="wrapperWithMargin">
            <p>Jakie relacje możemy tworzyć z przedmiotem i przestrzenią? Co może wyrazić obiekt? Jak działać formą? Będziemy szukać sposobów na ożywienie materii i zastanawiać nad tym, jakie symboliczne znaczenia niesie ze sobą przedmiot. Podczas warsztatów podejmiemy się takie zagadnienia jak: forma, animacja przedmiotu, obiekt, relacje człowiek-przedmiot i przedmiot-przedmiot, perspektywa. W podsumowaniu przyjrzymy się temu, jak praca z przedmiotem może odmienić lekcje.Zapraszamy do udziału polonistów pracujących z uczniami w wieku 10+, nauczycieli przedmiotów humanistycznych i artystycznych oraz prowadzących koła lub zajęcia teatralne z uczniami w wieku 10+.</p>
            <p>Data: 26.05.2021<br>Godzina: 16.00-19.00</p>
            <p>
            Zapisy:
            Wymagana jest rejestracja na wydarzenie poprzez formularz zgłoszeniowy <a href="https://tiny.pl/rbcdx">https://tiny.pl/rbcdx</a><br>
            Zapisane osoby dostaną drogą mailową link do udziału w spotkaniu na godzinę przed jego rozpoczęciem.
            Udział w warsztatach jest bezpłatny.
            </p>
            <p>Prowadzące:
            Justyna Droń – pedagożka teatru, animatorka kultury. Autorka warsztatów dla dzieci, zajęć twórczych, programów edukacyjnych do wystaw sztuki współczesnej, warsztatów graficznych, akcji artystycznych w przestrzeni miejskiej, wystaw i oprowadzań po wystawach. Pomysłodawczyni i autorka publikacji dla dzieci oraz przewodników po wystawach sztuki współczesnej. Koordynatorka programu edukacyjnego w Ośrodku Dokumentacji Sztuki Tadeusza Kantora Cricoteka w Krakowie.
            Monika Tomczyk – pedagożka teatru w Miejskim Teatrze Miniatura w Gdańsku. Ponadto reżyseruje i występuje w eksperymentalnych spektaklach teatru niezależnego. W tworzonych projektach i spektaklach stawia na budowanie relacji z przyszłym widzem, włączając go poprzez warsztatowe podejście do budowania tkanki przedstawienia. Tworzy przestrzenie do twórczych działań i rozwoju. Jest absolwentka Reżyserii Teatru Dzieci i Młodzieży w A ST we Wrocławiu, Akademii Teatru Alternatywnego, terapeutką SI, instruktorką Improwizacji Tańca i Symboliki Ciała i Eksperymentalnego Teatru Tańca.</p>
        </div>
        <div class="arrowWrapper">
            <div class="arrowWrapper__info">
                <h2 class="arrowWrapper__title">Zobacz tez</h2>
                <?php include 'components/arrow-left.php' ?>
            </div>
            <div class="arrowWrapper__wrapper">
                <div class="arrowWrapper__spaceBetween">
                    <?php include 'components/thumbnail.php' ?>
                    <?php include 'components/thumbnail.php' ?>
                    <?php include 'components/thumbnail.php' ?>
                    <?php include 'components/thumbnail.php' ?>
                </div>
            </div>
        </div>
    </div>
    <?php @include 'components/footer.php' ?>
</body>
</html>







