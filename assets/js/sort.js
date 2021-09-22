
export const handleSort = () => {
    const buttons = document.querySelectorAll('.sort__button');
    const closeBtns = document.querySelectorAll('.sort__close');

    const handleClear = (button) => {
        buttons.forEach((btn) => {
            if(button !== btn){
                btn.parentNode.classList.remove('active');
            }
        })
    }

    buttons.forEach((btn) => {
        btn.addEventListener('click', () => {
            btn.parentNode.classList.toggle('active');
            handleClear(btn);
        })
    })

    closeBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            handleClear();
        })
    })
}