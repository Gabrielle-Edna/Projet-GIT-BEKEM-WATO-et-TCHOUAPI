document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function () {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document.querySelector(".products-area-wrapper").classList.remove("gridView");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function () {
    document.documentElement.classList.toggle('light'); // Bascule la classe 'light' sur le document
    modeSwitch.classList.toggle('active'); // Bascule la classe 'active' sur le bouton
});

// Gestion du popup "Ajouter un patient"
const btn = document.getElementById('btn-add-patient');
const popupOverlay2 = document.getElementById('popupOverlay2');
const closePopupBtn2 = document.getElementById('closePopupBtn2');

btn.addEventListener('click', (e) => {

    popupOverlay2.style.display = 'flex';
    popupOverlay2.classList.add('active');

});

// Fermer le popup
closePopupBtn2.addEventListener('click', () => {
    popupOverlay2.classList.remove('active');
    setTimeout(() => {
        popupOverlay2.style.display = 'none';
        btn.value = ""; // Réinitialise la sélection
    }, 300);
});

// Fermer le popup lorsqu'on clique en dehors
popupOverlay2.addEventListener('click', (e) => {
    if (e.target === popupOverlay2) {
        closePopupBtn2.click();
    }
});

$(document).ready(function () {
    var panelOneHeight = $('.form-panel.one').height(),
        panelTwoHeight = $('.form-panel.two')[0].scrollHeight;

    $('.form-panel.two').not('.form-panel.two.active').on('click', function (e) {
        e.preventDefault();

        $('.form-toggle').addClass('visible');
        $('.form-panel.one').addClass('hidden');
        $('.form-panel.two').addClass('active');
        $('.form').animate({
            'height': panelTwoHeight
        }, 200);
    });

    $('.form-toggle').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('visible');
        $('.form-panel.one').removeClass('hidden');
        $('.form-panel.two').removeClass('active');
        $('.form').animate({
            'height': panelOneHeight
        }, 200);
    });
});