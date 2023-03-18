
const hamburgerMenu = document.querySelector('.hamburger');
const nav = document.querySelector('.full-screen-nav');
const backdrop = document.querySelector('.backdrop');
const menuIsActive = () => {
    hamburgerMenu.classList.toggle('active');
    nav.classList.toggle('open-nav');
}
const menuIsNotActive = () => {
    hamburgerMenu.classList.remove('active');
    nav.classList.remove('open-nav');
}
backdrop.addEventListener('click', menuIsNotActive);
hamburgerMenu.addEventListener('click', menuIsActive);
const subnavbtns = document.querySelectorAll('.subnavbtn');
subnavbtns.forEach(element => {
    element.addEventListener('click', () => {
        let subnavelt = document.querySelector('.display-sub');
        if(subnavelt && subnavelt!=element.nextElementSibling)
            subnavelt.classList.toggle('display-sub');
        
        element.nextElementSibling.classList.toggle('display-sub');
    });
});