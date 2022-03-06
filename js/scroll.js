import { getHeader, getToggle, getCircle } from "./header.js";

const getNav = getHeader.querySelectorAll('a');
const getSections = {
    'go_home': 'home_wrapper',
    'go_about': 'about_wrapper',
    'go_skills': 'skills_wrapper',
    'go_portfolio': 'portfolio_wrapper',
    'go_contact': 'contact_wrapper'
};

// Scroll Animation

$(function () {
    for (let section in getSections) {
        $('#' + section).click(function () {
            $('html, body').animate({ scrollTop: $('#' + getSections[section]).offset().top });
        });
    }

    $('#about_me').click(function () {
        $('html, body').animate({ scrollTop: $('#about_wrapper').offset().top });
    });
});


for (let $i = 0; $i < 5; $i++) {
    getNav[$i].onclick = function () {
        if (getHeader.classList.contains('header_active')) {
            getHeader.classList.remove('header_active');
            getCircle.classList.remove('circle_active');
            getToggle.classList.remove('active');
        }
    }
}