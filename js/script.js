const getToggle = document.getElementById('toggle'); // get id: toggle
const getCircle = document.getElementById('circle'); // get id: circle


// on/off system in navigation 
getToggle.onclick = function () {
    getToggle.classList.toggle('active');
    getCircle.classList.toggle('circle_active');
}

// hover system in skill content
const getPortfolio = document.getElementsByClassName('portfolio'); // get .portfolio
const mediaQuery = window.matchMedia('(min-width: 1024px)');

if (mediaQuery.matches) {
    for ($i = 0; $i < 3; $i++) {
        let getSpan = getPortfolio[$i].querySelector('span');
        getPortfolio[$i].addEventListener('mouseover', () => {
            getSpan.style.opacity = 1;
        }, false);

        getPortfolio[$i].addEventListener('mouseleave', () => {
            getSpan.style.opacity = 0;
        }, false);
    }

}

