const getHeader = document.getElementsByTagName('header')[0];
const getToggle = document.getElementById('toggle'); // get id: toggle
const getCircle = document.getElementById('circle'); // get id: circle

// on/off system in navigation 
getToggle.onclick = function () {
    getHeader.classList.toggle('header_active');
    getToggle.classList.toggle('active');
    getCircle.classList.toggle('circle_active');
}


// Export

export { getHeader, getToggle, getCircle };