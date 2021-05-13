/* global Swiper */

const headerNavigation = document.querySelector('#header .nav--header');
const headerLinks = headerNavigation.querySelectorAll('.nav__item');
const headerIcons = document.querySelectorAll('#header .social__icon');

function SetAnchors(menu) {
  menu.forEach((item, index) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      sectionSlider.slideTo(index);
    });
  });
}

SetAnchors(headerLinks);
