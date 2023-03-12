const menuButton = document.querySelector('.menu_button');
const menuItems = document.querySelector('.menu_items');
const menuButtonIcon = document.querySelector('.menu_button_icon');
menuButton.addEventListener('click', () => {
    menuItems.classList.toggle('show');
    menuButtonIcon.classList.toggle('menu_button_iconBG');
});
