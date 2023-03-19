const menuButton = document.querySelector('.menu_button');
const menuItems = document.querySelector('.menu_items');
const menuButtonIcon = document.querySelector('.menu_button_icon');
menuButton.addEventListener('click', () => {
    menuItems.classList.toggle('show');
    menuButtonIcon.classList.toggle('menu_button_iconBG');
});

jQuery(function ($) {
   var now = new Date(); 
   var day = ("0" + now.getDate()).slice(-2);
   var month = ("0" + (now.getMonth() + 1)).slice(-2);
   var today = now.getFullYear()+"-"+(month)+"-"+(day);
  $('#datePicker').val(today);
$("#datePicker").attr("min", today);
});