// Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});



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




// check event when form is submitted

function check() {
    if (window.confirm('送信してよろしいですか？')) { // 確認ダイアログを表示
        return true; // 「OK」時は送信を実行
    }
    else { // 「キャンセル」時の処理
        return false; // 送信を中止
    }
}