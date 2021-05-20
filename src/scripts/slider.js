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

const newsPrev = document.querySelector('.news-slider-prev');
const newsSlider = new Swiper('.news-slider', {
  speed: 400,
  slidesPerView: 'auto',
  spaceBetween: 12,

  navigation: {
    prevEl: '.news-slider-prev',
    nextEl: '.news-slider-next',
  },

  breakpoints: {
    991: {
      spaceBetween: 30,
    },
  },

  on: {
    slideChange() {
      if (newsSlider.realIndex > 0) newsPrev.classList.remove('news-slider-prev--hidden');
      else newsPrev.classList.add('news-slider-prev--hidden');
    },
  },
});

if (window.matchMedia('(max-width: 1700px)').matches && window.matchMedia('(min-width: 991px)').matches) {
  const advantageSlider = new Swiper('.advantages-slider', {
    loop: true,
    speed: 400,
    slidesPerView: 1,

    navigation: {
      nextEl: '.advantages-slider__next',
      prevEl: '.advantages-slider__prev',
    },
  });
}

const mapSlider = new Swiper('.map-slider', {
  speed: 400,
  spaceBetween: 40,
  slidesPerView: 1,
  simulateTouch: false,
});

const documentAction = document.querySelector('.about-document__action');

const aboutSliderContainer = document.querySelector('.about-slider');
let aboutSlider = null;
if (window.matchMedia('(min-width: 991px)').matches) {
  aboutSlider = new Swiper(aboutSliderContainer, {
    speed: 400,
    mousewheel: true,
    simulateTouch: false,
    spaceBetween: 50,

    on: {
      slideChange() {
        sectionSlider.mousewheel.disable();

        if (aboutSlider.realIndex === 2) documentAction.classList.add('about-document__action--visible');
        else documentAction.classList.remove('about-document__action--visible');
      },

      slideChangeTransitionEnd() {
        if (aboutSlider.isBeginning || aboutSlider.isEnd) sectionSlider.mousewheel.enable();
      },
    },
  });
}
const aboutControlContainer = document.querySelector('.about-control');
aboutControl = new Swiper(aboutControlContainer, {
  speed: 400,
  simulateTouch: false,
  spaceBetween: 30,
  slidesPerView: 1,

  navigation: {
    nextEl: '.about-slider-next',
    prevEl: '.about-slider-prev',
  },
});

if (aboutSliderContainer && aboutControlContainer) {
  aboutControl.controller.control = aboutSlider;
  aboutSlider.controller.control = aboutControl;
}


const dateList = [];
const historyPagination = document.querySelector('.history-pagination');
let historyScroll = 0;

const historySlider = new Swiper('.history-slider', {
  speed: 400,
  simulateTouch: false,
  spaceBetween: 50,

  on: {
    init() {
      const wrapper = document.querySelector('.history-slider');
      const slides = wrapper.querySelectorAll('.swiper-slide');
      slides.forEach((slide) => {
        dateList.push(slide.getAttribute('data-title'));
      });
    },

    slideChange() {
      choices.setChoiceByValue(dateList[historySlider.realIndex]);

      historyScroll = 122 * historySlider.realIndex;
      historyPagination.scrollTo({
        top: 0,
        left: historyScroll,
        behavior: 'smooth'
      });
    },
  },

  pagination: {
    el: '.history-pagination',
    clickable: true,

    renderBullet(index, className) {
      return `<span class="${className}"><time>${dateList[index]}</time></span>`;
    },
  },
});

const projectSlideContainer = document.querySelector('.project-slider');
const projectSlider = new Swiper(projectSlideContainer, {
  loop: true,
  speed: 400,
  slidesPerView: 'auto',
  spaceBetween: 15,
  simulateTouch: false,
  loopedSlides: 5,

  breakpoints: {
    991: {
      slidesPerView: 1,
    },
  },
});

const projectThumbContainer = document.querySelector('.project-thumb');
const projectThumbSlider = new Swiper(projectThumbContainer, {
  loop: true,
  speed: 400,
  slidesPerView: 5,
  spaceBetween: 15,
  slideToClickedSlide: true,
  loopedSlides: 5,

  breakpoints: {
    1400: {
      spaceBetween: 30,
    },
  },
});

if (projectThumbContainer && projectSlideContainer) {
  projectSlider.controller.control = projectThumbSlider;
  projectThumbSlider.controller.control = projectSlider;
}

function SetAnchors(menu) {
  menu.forEach((item, index) => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      if (index === 1) aboutSlider.slideTo(0);

      sectionSlider.slideTo(index);
      sectionSlider.mousewheel.enable();
    });
  });
}

if (!isNews) SetAnchors(headerLinks);

