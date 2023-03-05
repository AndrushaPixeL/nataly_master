function footer() {
    const
        main = document.getElementsByClassName('content_wrap')[0],
        footer = document.getElementsByTagName('footer')[0]

    main.style.paddingBottom = footer.clientHeight + 'px'
}

window.addEventListener('load', footer);
window.addEventListener('resize', footer);

const menuButton = document.querySelector('.menu_button');
const menuItems = document.querySelector('.menu_items');

menuButton.addEventListener('click', () => {
    menuItems.classList.toggle('show');
});