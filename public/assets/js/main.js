const headScroll = document.querySelector('#head');
const proyectoDiv = document.querySelector('#proyectoDiv');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    headScroll.style.marginLeft = value * -1.6 + 'px';
    proyectoDiv.style.marginBottom = value * -0.4 + 'px';
});
