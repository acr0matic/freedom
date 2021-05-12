/* global Swiper */

const headerNavigation = document.querySelector('#header .nav--header');
const headerLinks = headerNavigation.querySelectorAll('.nav__item');
const headerIcons = document.querySelectorAll('#header .social__icon');
let sectionSlider = null;

if (window.matchMedia('(min-width: 991px)').matches) {
  sectionSlider = new Swiper('#section-slider', {
    speed: 400,
    mousewheel: true,
    simulateTouch: false,
  });

  sectionSlider.on('slideChange', () => {
    const index = sectionSlider.realIndex;

    headerLinks.forEach((item) => item.classList.remove('nav__item--active'));
    if (headerLinks[index] && index !== 0) headerLinks[index].classList.add('nav__item--active');

    if (index > 0) {
      headerNavigation.classList.remove('nav--inverted');
      headerIcons.forEach((icon) => icon.classList.remove('link__icon--inverted'));
    } else {
      headerNavigation.classList.add('nav--inverted');
      headerIcons.forEach((icon) => icon.classList.add('link__icon--inverted'));
    }
  });
}

function SetAnchors(menu) {
  menu.forEach((item, index) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      sectionSlider.slideTo(index);
    });
  });
}

SetAnchors(headerLinks);
