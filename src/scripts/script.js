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

const selectList = document.querySelector('[data-trigger]');
let choises = null;
if (selectList) choices = new Choices('[data-trigger]', {
  searchEnabled: false,
  itemSelectText: 'Выбрать',
});

selectList.addEventListener('choice', (e) => {
  const index = e.detail.choice.id

  historySlider.slideTo(index - 1)
});

const aboutPlan = document.querySelectorAll('.about-plan__item');
aboutPlan.forEach(item => {
  item.addEventListener('click', (e) => {
    aboutPlan.forEach(element => {
      if (e.currentTarget !== element)
        element.classList.remove('about-plan__item--active');
    });

    item.classList.toggle('about-plan__item--active');
  });
});

tippy('[data-tippy-content]', {
  placement: 'top',
  allowHTML: true,
  maxWidth: 300,
  theme: 'freedom',
});

const mobileMenu = document.querySelector('#mobile-menu .mobile-menu');
const headerMobile = document.querySelector('.header .header__mobile');
const mobileMenuButton = headerMobile.querySelector('img');
const moblieClose = mobileMenu.querySelector('.mobile-menu__close');
const mobileNav = mobileMenu.querySelectorAll('.nav__link');

mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('mobile-menu--open');

  headerMobile.classList.toggle('header__mobile--fixed');
});

mobileNav.forEach((item) => {
  item.addEventListener('click', () => {
    mobileMenu.classList.toggle('mobile-menu--open');
    headerMobile.classList.toggle('header__mobile--fixed');

    Scroll(item);
  });
});

moblieClose.addEventListener('click', () => {
  mobileMenu.classList.toggle('mobile-menu--open');
});