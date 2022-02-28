const getToggle = document.getElementById('toggle');
const getCircle = document.getElementById('circle');

getToggle.onclick = function() {
    getToggle.classList.toggle('active');
    getCircle.classList.toggle('circle_active');
}