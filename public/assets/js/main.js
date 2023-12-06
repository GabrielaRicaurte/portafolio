const headScroll = document.querySelector('#head');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    headScroll.style.marginLeft = value * -1.6 + 'px';
});
