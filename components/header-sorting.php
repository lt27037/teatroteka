<header class="header withSorting">
    <ul class="header__list">
        <a href="/" class="header__list__button active" tabindex="1">
            <img src="assets/img/logo.png" alt="logo" class="header__list__logo">
        </a>
        <a href="/konspekty.php" class="header__list__button" tabindex="1">
            <li class="header__list__item">Konspekty</li>
        </a>
        <a href="/video-page.php" class="header__list__button" tabindex="1">
            <li class="header__list__item">Video</li>
        </a>
        <a href="/dzieje-sie.php" class="header__list__button" tabindex="1">
            <li class="header__list__item">Dzieje się</li>
        </a>
        <span class="header__list__button" tabindex="1">
            <li class="header__list__item">
                Partnerzy
                <img src="assets/img/dropdown.svg" alt="ikona" class="header__list__item__icon">
            </li>
            <nav class="dropdown header__list__button__dropdown">
                <ul class="dropdown__list">
                    <a href="/" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Program</li>
                    </a>
                    <a href="/dzieje-sie.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Co się dzieje?</li>
                    </a>
                    <a href="/" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Archiwum</li>
                    </a>
                </ul>
            </nav>
        </span>
        <span class="header__list__button flex-grow">
            <div class="header__list__item__search">
                <div class="search">
                    <input type="text" class="search__input" placeholder="Szukaj" tabindex="1">
                    <img src="assets/img/loupe.svg" alt="szukaj" class="search__icon">
                </div>
            </div>
        </span>
        <span class="header__list__button" tabindex="1">
            <li class="header__list__item">
                O nas
                <img src="assets/img/dropdown.svg" alt="ikona" class="header__list__item__icon">
            </li>
            <nav class="dropdown header__list__button__dropdown">
                <ul class="dropdown__list">
                    <a href="/onas-teatroteka.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">O Teatrotece szkolnej</li>
                    </a>
                    <a href="/onas-zespol.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Nasz zespół</li>
                    </a>
                    <a href="/onas-konspekt.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Jak to działa?</li>
                    </a>
                    <a href="/onas-warsztaty.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Warsztaty</li>
                    </a>
                    <a href="/onas-kontakt.php" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Kontakt</li>
                    </a>
                    <a href="/" class="dropdown__list__link" tabindex="1">
                        <li class="dropdown__list__item">Do pobrania</li>
                    </a>
                </ul>
            </nav>
        </span>
    </ul>
    <div class="header__sort">
        <div class="header__sort__label">
            <img src="assets/img/loupe.svg" alt="ikona sortowanie" class="header__sort__label__icon">
            sortuj:
        </div>
        <?php include 'components/sort-dropdown.php' ?>
        <?php include 'components/sort-dropdown-single.php' ?>
        <?php include 'components/sort-dropdown-triple.php' ?>
        <button class="button">Sortuj</button>
        <button class="header__sort__delete">
            <img src="assets/img/delete.svg" alt="ikona usuń" class="header__sort__delete__icon">
            Wyczyść filtry
        </button>
    </div>
</header>