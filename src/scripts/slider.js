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

const newsSlider = new Swiper('.news-slider', {
  speed: 400,
  slidesPerView: 'auto',
  spaceBetween: 30,

  navigation: {
    nextEl: '.news-slider-next',
  },
});

if (window.matchMedia('(max-width: 1400px)').matches && window.matchMedia('(min-width: 991px)').matches) {
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


let aboutSlider = null;
if (window.matchMedia('(min-width: 991px)').matches) {
  aboutSlider = new Swiper('.about-slider', {
    speed: 400,
    mousewheel: true,
    simulateTouch: false,
    spaceBetween: 50,

    on: {
      slideChange() {
        sectionSlider.mousewheel.disable();
      },

      slideChangeTransitionEnd() {
        if (aboutSlider.isBeginning || aboutSlider.isEnd) sectionSlider.mousewheel.enable()
      },
    },
  });
}

const dateList = [];
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
    }
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