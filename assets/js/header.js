export const headerDropdown = () => {
    const buttons = document.querySelectorAll('.header__list__button');
    buttons?.forEach((button) => {
        const openFn = () => {
            const dropdown = button.querySelector('.dropdown');
            dropdown.style.display = 'flex';
            dropdown.style.maxHeight = (dropdown.scrollHeight + 2) + 'px';
        };

        const closeFn = () => {
            const dropdown = button.querySelector('.dropdown');
            dropdown.style.maxHeight = '0px';
            setTimeout(() => dropdown.style.display = 'none', 210)
        };

        button.addEventListener('mouseenter', openFn);
        button.addEventListener('focus', openFn);
        button.addEventListener('mouseleave', closeFn);
        //TODO zamykanie tab menu
        // button.addEventListener('focusout', closeFn);
    });
};
