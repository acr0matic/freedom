/* global Swiper */

const header = document.getElementById('header');
const headerNavigation = header.querySelector('.nav--header');
const headerLinks = headerNavigation.querySelectorAll('.nav__item');
const headerIcons = header.querySelectorAll('.social__icon');

const isNews = document.querySelector('.news-page');

if (isNews) {
  if (window.matchMedia('(max-width: 991px)').matches)
    header.classList.add('header-scroll');

  headerNavigation.classList.remove('nav--inverted');
  headerIcons.forEach((icon) => icon.classList.remove('link__icon--inverted'));
}

else {
  window.addEventListener('scroll', () => {
    if (window.scrollY >= header.offsetHeight) header.classList.add('header-scroll');
    else header.classList.remove('header-scroll')
  });
}

const selectList = document.querySelector('[data-trigger]');
let choises = null;
if (selectList) {
  choices = new Choices('[data-trigger]', {
    searchEnabled: false,
    itemSelectText: 'Выбрать',
  });

  selectList.addEventListener('choice', (e) => {
    const index = e.detail.choice.id

    historySlider.slideTo(index - 1)
  });
}

if (window.matchMedia('(min-width: 991px)').matches) {
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
}

else {
  const aboutPlanItems = document.querySelectorAll('.about-plan__item');
  const modal = document.getElementById('modal-info');

  if (modal) {
    const modalTitle = modal.querySelector('.modal__title');
    const modalHeading = modal.querySelector('.modal__heading');
    const modalContent = modal.querySelector('.modal__description');

    aboutPlanItems.forEach((item, index) => {
      const title = item.querySelector('.about-plan__title').innerHTML;
      const content = item.querySelector('.about-plan__content').innerHTML;

      item.addEventListener('click', () => {
        modalTitle.innerHTML = `${index + 1} этап`
        modalHeading.innerHTML = title;
        modalContent.innerHTML = content;

        MicroModal.show('modal-info', {
          disableFocus: true,
          awaitCloseAnimation: true,
        });
      });
    });
  }
}

tippy('.input__warning[data-tippy-content]', {
  placement: 'right',
  allowHTML: true,
  maxWidth: 300,
  theme: 'freedom',
});

tippy('.about-map__tooltip[data-tippy-content]', {
  placement: 'top',
  allowHTML: true,
  maxWidth: 300,
  theme: 'freedom',
});


const mobileMenu = document.querySelector('#mobile-menu .mobile-menu');
const headerMobile = document.querySelector('.header .header__mobile');
const mobileMenuButton = headerMobile.querySelector('.header__burger');
const mobileClose = mobileMenu.querySelector('.mobile-menu__close');
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

mobileClose.addEventListener('click', () => {
  mobileMenu.classList.toggle('mobile-menu--open');
});


const hero = document.getElementById('hero');
if (hero) {
  const heroPrimary = hero.querySelector('.button.button-primary');
  const heroSecondary = hero.querySelector('.button.button-outline');

  heroPrimary.addEventListener('click', () => {
    const target = document.getElementById('about');
    if (window.matchMedia('(min-width: 991px)').matches) sectionSlider.slideTo(1);
    else target.scrollIntoView({ behavior: 'smooth', });
  });

  heroSecondary.addEventListener('click', () => {
    const target = document.getElementById('map');
    if (window.matchMedia('(min-width: 991px)').matches) sectionSlider.slideTo(1);
    else target.scrollIntoView({ behavior: 'smooth', });
  });
}

MicroModal.init({
  disableFocus: true,
  awaitCloseAnimation: true,
});

const forms = document.querySelectorAll('form');
forms.forEach(form => new Form(form));

document.addEventListener("DOMContentLoaded", () => {
  const href = window.location.hash.substr(1);
  window.location.hash = "";

  const section = document.querySelectorAll('.section-slider .swiper-slide section');

  if (section.length !== 0) {
    const id = [].map.call(section, (item) => item.id);

    let sliderIndex = 0;
    id.forEach((item, index) => { if (item === href) sliderIndex = index });
    setTimeout(() => sectionSlider.slideTo(sliderIndex), 500);
  }
});
