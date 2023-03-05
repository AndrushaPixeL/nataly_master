function footer() {
    const
        main = document.getElementsByClassName('content_wrap')[0],
        footer = document.getElementsByTagName('footer')[0]

    main.style.paddingBottom = footer.clientHeight + 'px'
}

window.addEventListener('load', footer);
window.addEventListener('resize', footer);

console.log("hello");