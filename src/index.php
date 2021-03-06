<?php include_once('partials/header.php') ?>

<!-- Основной контент -->
<main>
  <div class="swiper-container section-slider" id="section-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <section id="hero">
          <div class="container">
            <div class="hero">
              <div class="hero__content">
                <h1 class="hero__title page__title page__title--main">Городской парк</h1>
                <p class="hero__text page__text">
                  Проект развития Городского парка. Принимайте участие
                  <br>
                  в создании главного общественного пространства г. Свободный!
                  <br>
                  Сделаем город лучше вместе!
                </p>
              </div>
              <!-- /.hero__content -->

              <div class="hero__action">
                <button onclick="sectionSlider.slideTo(1);" class="button button-primary me-0 me-lg-5 mb-3 mb-lg-0">О проекте</button>
                <button onclick="sectionSlider.slideTo(1); aboutSlider.slideTo(1);" class="button button-outline">Карта проекта</button>
              </div>
              <!-- /.hero__action -->

              <div class="hero__partners partners">
                <a href="" class="partners__link me-3"><img src="img/logo/7.png" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-4"><img src="img/logo/2.svg" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-4"><img src="img/logo/6.svg" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-4"><img src="img/logo/5.svg" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-4"><img src="img/logo/1.svg" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-3"><img src="img/logo/3.svg" alt="" class="partners__icon"></a>
                <a href="" class="partners__link me-3"><img src="img/logo/4.svg" alt="" class="partners__icon"></a>
              </div>
              <!-- /.hero__partners partners -->
            </div>
            <!-- /.hero -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="about" class="section">
          <div class="container">
            <div class="section__header">
              <h2 class="callback__title section__title">О проекте</h2>

              <div class="about__control">
                <div class="swiper-container about-control">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <span class="about-control__title">Описание</span>
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <span class="about-control__title">Визуализации</span>
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <span class="about-control__title">Этапы</span>
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper-container about-control -->

                <div class="swiper-button-prev about-slider-prev"></div>
                <div class="swiper-button-next about-slider-next"></div>
              </div>
              <!-- /.about__control -->

              <div data-micromodal-trigger="modal-document" class="about-document__action">
                <a class="about-document__link link">
                  <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                    <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                    <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
                  </svg>

                  Документы
                </a>
              </div>
              <!-- /.about-document__action -->
            </div>
            <!-- /.section__header -->

            <div class="swiper-container about-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="about__project about-project">
                    <div class="row">
                      <div class="col-12 col-lg-7 col-xxl-6 mb-4 mb-lg-0">
                        <p class="about-project__text">
                          Свободный — молодой энергичный город Амурской области, который развивается на перекрёстке важнейших транспортных артерий на фронтире страны с начала ХХ века. Раньше и теперь — сюда приезжают люди разных профессий, национальностей, культур и стремятся двигать жизнь вперёд.
                          <br> <br>
                          Но жизнь — не только работа. Горожане мечтают о месте, где можно переключиться. Гулять, любоваться деревьями и цветами. Выбрать развлечение по душе. Получить яркие эмоции и теплоту общения. Пересечься с друзьями. Отдохнуть и дышать полной грудью. Быть свободными. Такое возможно? Да!
                          <br> <br>
                          В городе прошел целый ряд мероприятий по вовлечению жителей. Свободный участвует во Всероссийском конкурсе лучших проектов создания комфортной городской среды.
                        </p>
                      </div>
                      <!-- /.col-7 -->

                      <div class="col-12 col-lg-5 offset-0 offset-xxl-1">
                        <div class="about-project__gallery">
                          <div class="swiper-container project-slider">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/1.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/1.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/2.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/2.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/3.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/3.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/4.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/4.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/5.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/5.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture">
                                  <a href="img/page/main/about/project/full/6.jpg" data-fslightbox>
                                    <img src="img/page/main/about/project/6.jpg" alt="" class="about-project__image">
                                  </a>
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->
                            </div>
                            <!-- /.swiper-wrapper -->
                          </div>
                          <!-- /.swiper-container project-slider -->

                          <div class="swiper-container project-thumb">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/1.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/2.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/3.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/4.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/5.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->

                              <div class="swiper-slide">
                                <div class="about-project__picture about-project__picture--thumb">
                                  <img src="img/page/main/about/project/thumb/6.jpg" alt="" class="about-project__image">
                                </div>
                                <!-- /.about-project__picture -->
                              </div>
                              <!-- /.swiper-slide -->
                            </div>
                            <!-- /.swiper-wrapper -->
                          </div>
                          <!-- /.swiper-container project-thumb -->
                        </div>
                        <!-- /.about-project__gallery -->
                      </div>
                      <!-- /.col-5 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.about__project about-project -->
                </div>
                <!-- /.swiper-slide -->

                <div id="map" class="swiper-slide">
                  <div class="about__map about-map">
                    <div class="row justify-content-center">
                      <div class="col-12 col-xl-11 col-xxl-10">
                        <div class="swiper-container map-slider">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--1">
                                <img src="img/page/main/about/render/1.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Общий вид</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Общий вид" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Центральная площадь с фонтаном" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Амфитеатр и сцена под открытым небом" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Пруд и зона тихого отдыха" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Аттракционы" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Памп-трек" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Многофункциональная спортивная площадка" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--2">
                                <img src="img/page/main/about/render/2.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Прогулочная зона</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Пешеходный мост" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сухой фонтан" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Памп-трек для любого уровня райдеров" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Центральная площадь – “сердце” парка " src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Подвесные качели" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--3">
                                <img src="img/page/main/about/render/3.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Амфитеатр и сцена</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Амфитеатр" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сцена для проведения городских мероприятий" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Новогодняя ёлка на центральной площади" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сезонный каток на пешеходных дорожках" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Танцевальная площадка" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--4">
                                <img src="img/page/main/about/render/4.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Памп-трек</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Памп-трек для любого уровня райдеров" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Многофункциональная спортивная площадка" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Столы для пинг-понга" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Пешеходный мост" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--5">
                                <img src="img/page/main/about/render/5.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Кафе с террасой</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Круглогодичное семейное  кафе с террасой" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сезонный каток на пешеходных дорожках" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--6">
                                <img src="img/page/main/about/render/6.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Веревочный парк</h3>

                                <div class="about-map__prev link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__next link" onclick="mapSlider.slideNext();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Веревочный парк с несколькими трассами" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Круглогодичное семейное кафе с террасой" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Места для тихого отдыха в природной зоне" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->

                            <div class="swiper-slide">
                              <div class="about-map__item about-map__item--7">
                                <img src="img/page/main/about/render/7.jpg" alt="" class="about-map__picture">
                                <h3 class="about-map__title">Семейное кафе</h3>

                                <div class="about-map__prev about-map__last link" onclick="mapSlider.slidePrev();">
                                  <svg class="link__icon link__icon--inverted ms-2" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4141 10.6764L21.1135 0.531144C20.9443 0.362842 20.743 0.229258 20.5212 0.138097C20.2995 0.046935 20.0616 0 19.8213 0C19.5811 0 19.3432 0.046935 19.1215 0.138097C18.8997 0.229258 18.6984 0.362842 18.5292 0.531144C18.1903 0.867577 18 1.32268 18 1.79706C18 2.27144 18.1903 2.72655 18.5292 3.06298L27.5377 12.0411L18.5292 20.9295C18.1903 21.2659 18 21.721 18 22.1954C18 22.6698 18.1903 23.1249 18.5292 23.4613C18.6978 23.631 18.8988 23.766 19.1206 23.8584C19.3424 23.9509 19.5806 23.999 19.8213 24C20.0621 23.999 20.3003 23.9509 20.5221 23.8584C20.7439 23.766 20.9449 23.631 21.1135 23.4613L31.4141 13.316C31.5988 13.1479 31.7463 12.9438 31.8471 12.7166C31.9479 12.4895 32 12.2442 32 11.9962C32 11.7482 31.9479 11.503 31.8471 11.2758C31.7463 11.0487 31.5988 10.8446 31.4141 10.6764Z" fill="white" />
                                    <path d="M13.4141 10.6764L3.11347 0.531144C2.94429 0.362842 2.74301 0.229258 2.52124 0.138097C2.29946 0.046935 2.06159 0 1.82134 0C1.58109 0 1.34322 0.046935 1.12145 0.138097C0.89968 0.229258 0.698397 0.362842 0.529214 0.531144C0.190255 0.867577 0 1.32268 0 1.79706C0 2.27144 0.190255 2.72655 0.529214 3.06298L9.53772 12.0411L0.529214 20.9295C0.190255 21.2659 0 21.721 0 22.1954C0 22.6698 0.190255 23.1249 0.529214 23.4613C0.697763 23.631 0.898762 23.766 1.12056 23.8584C1.34236 23.9509 1.58056 23.999 1.82134 24C2.06213 23.999 2.30032 23.9509 2.52212 23.8584C2.74392 23.766 2.94492 23.631 3.11347 23.4613L13.4141 13.316C13.5988 13.1479 13.7463 12.9438 13.8471 12.7166C13.9479 12.4895 14 12.2442 14 11.9962C14 11.7482 13.9479 11.503 13.8471 11.2758C13.7463 11.0487 13.5988 10.8446 13.4141 10.6764Z" fill="white" />
                                  </svg>
                                </div>

                                <div class="about-map__content">
                                  <img data-tippy-content="Круглогодичное семейное  кафе с террасой" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сцена для проведения городских мероприятий" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                  <img data-tippy-content="Сезонный каток на пешеходных дорожках" src="img/icons/control/tooltip.svg" alt="" class="about-map__tooltip">
                                </div>
                                <!-- /.about-map__content -->
                              </div>
                              <!-- /.about-map__item -->
                            </div>
                            <!-- /.swiper-slide -->
                          </div>
                          <!-- /.swiper-wrapper -->
                        </div>
                        <!-- /.swiper-container map-slider -->
                      </div>
                      <!-- /.col-10 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.about__map -->
                </div>
                <!-- /.swiper-slide -->

                <div class="swiper-slide">
                  <div class="about__plan about-plan">
                    <div class="about-plan__wrapper">
                      <div class="about-plan__item about-plan__item--cyan">
                        <div class="about-plan__container">
                          <div class="about-plan__date">
                            09.03 - 23.03
                          </div>
                          <!-- /.about-plan__date -->

                          <h3 class="about-plan__title">
                            Определение территории благоустройства
                          </h3>

                          <img class="about-plan__arrow" src="img/icons/control/arrow__right.svg" alt="">
                        </div>
                        <!-- /.about-plan__item -->

                        <p class="about-plan__content">
                          На этом этапе было проведено открытое онлайн и офлайн-голосование среди жителей г.Свободный по выбору территории, которая будет участвовать в конкурсе
                        </p>
                      </div>
                      <!-- /.about-plan__container -->

                      <div class="about-plan__item about-plan__item--red">
                        <div class="about-plan__container">
                          <div class="about-plan__date">
                            24.03 - 11.04
                          </div>
                          <!-- /.about-plan__date -->

                          <h3 class="about-plan__title">
                            Вовлечение жителей в разработку проекта
                          </h3>

                          <img class="about-plan__arrow" src="img/icons/control/arrow__right.svg" alt="">
                        </div>
                        <!-- /.about-plan__item -->

                        <p class="about-plan__content">
                          Жители активно участвовали в онлайн-опросах о Городском парке, его проблемах и ценностях, и в общественных семинарах, определили основные функциональные зоны будущего парка, целевую аудиторию и наполнение. Юные горожане рисовали обновленный Городской парк. Также были проведены глубинные интервью и фокус-группы с лидерами
                          мнений.
                        </p>
                      </div>
                      <!-- /.about-plan__container -->

                      <div class="about-plan__item about-plan__item--yellow">
                        <div class="about-plan__container">
                          <div class="about-plan__date">
                            12.04 - 19.05
                          </div>
                          <!-- /.about-plan__date -->

                          <h3 class="about-plan__title">
                            Разработка проекта благоустройства
                          </h3>

                          <img class="about-plan__arrow" src="img/icons/control/arrow__right.svg" alt="">
                        </div>
                        <!-- /.about-plan__item -->

                        <p class="about-plan__content">
                          На основе данных, полученных на общественных семинарах и онлайн-опросах, архитекторы разработали проект функционального зонирования будущего парка, а затем и его концепцию.
                        </p>
                      </div>
                      <!-- /.about-plan__container -->

                      <div class="about-plan__item about-plan__item--purple">
                        <div class="about-plan__container">
                          <div class="about-plan__date">
                            20.05 - 30.05
                          </div>
                          <!-- /.about-plan__date -->

                          <h3 class="about-plan__title">
                            Подача заявки на Конкурс Минстроя России
                          </h3>

                          <img class="about-plan__arrow" src="img/icons/control/arrow__right.svg" alt="">
                        </div>
                        <!-- /.about-plan__item -->

                        <p class="about-plan__content">
                          На этом этапе вносятся последние изменения в проект и формируется пакет документов, необходимый для подачи заявки на конкурс Минстроя РФ.
                        </p>
                      </div>
                      <!-- /.about-plan__container -->
                    </div>
                    <!-- /.about-plan__wrapper -->

                    <img src="img/page/main/about/plan/background.svg" alt="" class="about-plan__background">
                    <img src="img/page/main/about/plan/image.svg" alt="" class="about-plan__image">
                  </div>
                  <!-- /.about__project about-project -->

                  <div class="about__document about-document">
                    <div class="about-document__wrapper">
                      <div class="about-document__item">
                        <a href="/files/1.pdf" class="about-document__link link">
                          <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                            <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                            <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
                          </svg>

                          Отчет об общественном семинаре «Функциональное зонирование Городского парка».pdf
                        </a>
                      </div>
                      <!-- /.about-document__item -->

                      <div class="about-document__item">
                        <a href="/files/2.pdf" class="about-document__link link">
                          <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                            <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                            <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
                          </svg>

                          Отчет об Общественном семинаре «Будущее Городского парка».pdf
                        </a>
                      </div>
                      <!-- /.about-document__item -->

                      <div class="about-document__item">
                        <a href="/files/3.pdf" class="about-document__link link">
                          <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                            <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                            <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
                          </svg>

                          Протокол №1 об определении территории реализации проекта
                        </a>
                      </div>
                      <!-- /.about-document__item -->

                      <div class="about-document__item">
                        <a href="/files/4.pdf" class="about-document__link link">
                          <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                            <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                            <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
                          </svg>

                          Итоговый протокол №2
                        </a>
                      </div>
                      <!-- /.about-document__item -->
                    </div>
                    <!-- /.about-document__wrapper -->
                  </div>
                  <!-- /.about__document about-document -->
                </div>
                <!-- /.swiper-slide -->
              </div>
              <!-- /.swiper-wrapper -->
            </div>
            <!-- /.swiper-container about-slider -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="news" class="section">
          <div class="container">
            <div class="news">
              <div class="news__header section__header">
                <h2 class="section__title">Новости</h2>

                <div class="news__advantages">
                  <div class="swiper-container advantages-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="news__advantage">
                          <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.4 10.8C8.63734 10.8 8.86935 10.7296 9.06669 10.5978C9.26403 10.4659 9.41783 10.2785 9.50866 10.0592C9.59948 9.83995 9.62325 9.59867 9.57695 9.36589C9.53064 9.13311 9.41635 8.91929 9.24853 8.75147C9.08071 8.58365 8.86689 8.46936 8.63411 8.42306C8.40133 8.37675 8.16006 8.40052 7.94078 8.49134C7.72151 8.58217 7.5341 8.73598 7.40224 8.93331C7.27038 9.13065 7.2 9.36266 7.2 9.6C7.2 9.91826 7.32643 10.2235 7.55148 10.4485C7.77652 10.6736 8.08174 10.8 8.4 10.8ZM12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519941 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 10.4241 23.6896 8.8637 23.0866 7.4078C22.4835 5.95189 21.5996 4.62902 20.4853 3.51472C19.371 2.40042 18.0481 1.5165 16.5922 0.913446C15.1363 0.310389 13.5759 0 12 0ZM12 21.6C10.1013 21.6 8.24524 21.037 6.66653 19.9821C5.08782 18.9272 3.85736 17.4279 3.13076 15.6738C2.40416 13.9196 2.21405 11.9893 2.58447 10.1271C2.95488 8.26491 3.8692 6.55436 5.21178 5.21177C6.55436 3.86919 8.26492 2.95488 10.1271 2.58446C11.9894 2.21404 13.9196 2.40416 15.6738 3.13076C17.4279 3.85736 18.9272 5.08781 19.9821 6.66652C21.037 8.24524 21.6 10.1013 21.6 12C21.6 14.5461 20.5886 16.9879 18.7882 18.7882C16.9879 20.5886 14.5461 21.6 12 21.6ZM15.6 13.2H8.4C8.08174 13.2 7.77652 13.3264 7.55148 13.5515C7.32643 13.7765 7.2 14.0817 7.2 14.4C7.2 15.673 7.70572 16.8939 8.60589 17.7941C9.50607 18.6943 10.727 19.2 12 19.2C13.273 19.2 14.4939 18.6943 15.3941 17.7941C16.2943 16.8939 16.8 15.673 16.8 14.4C16.8 14.0817 16.6736 13.7765 16.4485 13.5515C16.2235 13.3264 15.9183 13.2 15.6 13.2ZM12 16.8C11.5791 16.7996 11.1658 16.6885 10.8014 16.4778C10.437 16.2672 10.1344 15.9645 9.924 15.6H14.076C13.8656 15.9645 13.563 16.2672 13.1986 16.4778C12.8342 16.6885 12.4209 16.7996 12 16.8ZM15.6 8.4C15.3627 8.4 15.1307 8.47038 14.9333 8.60223C14.736 8.73409 14.5822 8.92151 14.4913 9.14078C14.4005 9.36005 14.3768 9.60133 14.4231 9.83411C14.4694 10.0669 14.5837 10.2807 14.7515 10.4485C14.9193 10.6163 15.1331 10.7306 15.3659 10.7769C15.5987 10.8232 15.84 10.7995 16.0592 10.7087C16.2785 10.6178 16.4659 10.464 16.5978 10.2667C16.7296 10.0693 16.8 9.83734 16.8 9.6C16.8 9.28174 16.6736 8.97651 16.4485 8.75147C16.2235 8.52643 15.9183 8.4 15.6 8.4Z" fill="#1E5B60" />
                          </svg>
                          998 жителей прошли опросы
                        </div>
                        <!-- /.news__advantage -->
                      </div>
                      <!-- /.swiper-slide -->

                      <div class="swiper-slide">
                        <div class="news__advantage">
                          <svg class="me-2" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.4 0H3.6C2.64522 0 1.72955 0.379285 1.05442 1.05442C0.379285 1.72955 0 2.64522 0 3.6V13.2C0 14.1548 0.379285 15.0705 1.05442 15.7456C1.72955 16.4207 2.64522 16.8 3.6 16.8H10.8V19.2H6C5.68174 19.2 5.37652 19.3264 5.15147 19.5515C4.92643 19.7765 4.8 20.0817 4.8 20.4C4.8 20.7183 4.92643 21.0235 5.15147 21.2485C5.37652 21.4736 5.68174 21.6 6 21.6H18C18.3183 21.6 18.6235 21.4736 18.8485 21.2485C19.0736 21.0235 19.2 20.7183 19.2 20.4C19.2 20.0817 19.0736 19.7765 18.8485 19.5515C18.6235 19.3264 18.3183 19.2 18 19.2H13.2V16.8H20.4C21.3548 16.8 22.2705 16.4207 22.9456 15.7456C23.6207 15.0705 24 14.1548 24 13.2V3.6C24 2.64522 23.6207 1.72955 22.9456 1.05442C22.2705 0.379285 21.3548 0 20.4 0ZM21.6 13.2C21.6 13.5183 21.4736 13.8235 21.2485 14.0485C21.0235 14.2736 20.7183 14.4 20.4 14.4H3.6C3.28174 14.4 2.97652 14.2736 2.75147 14.0485C2.52643 13.8235 2.4 13.5183 2.4 13.2V3.6C2.4 3.28174 2.52643 2.97652 2.75147 2.75147C2.97652 2.52643 3.28174 2.4 3.6 2.4H20.4C20.7183 2.4 21.0235 2.52643 21.2485 2.75147C21.4736 2.97652 21.6 3.28174 21.6 3.6V13.2Z" fill="#1E5B60" />
                          </svg>
                          15 публикаций в СМИ
                        </div>
                        <!-- /.news__advantage -->
                      </div>
                      <!-- /.swiper-slide -->

                      <div class="swiper-slide">
                        <div class="news__advantage">
                          <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9495 0.000630783C10.122 -0.00267553 8.31818 0.413979 6.67727 1.21843C5.03637 2.02289 3.60225 3.19363 2.48561 4.6403C1.36898 6.08696 0.599683 7.77086 0.237111 9.56202C-0.125461 11.3532 -0.0716154 13.2037 0.394492 14.9708C0.8606 16.7378 1.7265 18.3741 2.92537 19.7534C4.12424 21.1327 5.624 22.2181 7.30891 22.9258C8.99381 23.6334 10.8188 23.9445 12.643 23.8349C14.4672 23.7254 16.2418 23.1981 17.8299 22.2939H17.9134H17.9731C20.2695 20.9866 22.0668 18.9538 23.0829 16.5145C24.099 14.0752 24.2763 11.3675 23.5871 8.81658C22.8978 6.2656 21.381 4.01572 19.2746 2.4201C17.1683 0.824483 14.5918 -0.0265356 11.9495 0.000630783ZM13.1423 2.46971C15.2416 2.73593 17.1929 3.69243 18.6892 5.18877C20.1856 6.68511 21.1421 8.6364 21.4083 10.7357H13.1423V2.46971ZM11.9495 21.4708C9.53349 21.4544 7.21369 20.522 5.45824 18.862C3.70279 17.202 2.64238 14.9379 2.49101 12.5266C2.33964 10.1153 3.10859 7.73634 4.64266 5.86982C6.17674 4.00331 8.36172 2.7882 10.7567 2.46971V11.9285C10.7614 12.0713 10.7896 12.2124 10.8402 12.346V12.4414V12.5249L15.6113 20.7194C14.454 21.2147 13.2083 21.4703 11.9495 21.4708ZM17.7106 19.5147L14.013 13.1213H21.4083C21.2477 14.3792 20.838 15.5925 20.2031 16.6902C19.5682 17.788 18.7209 18.7482 17.7106 19.5147Z" fill="#1E5B60" />
                          </svg>
                          86% одобрительных отзывов
                        </div>
                        <!-- /.news__advantage -->
                      </div>
                      <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->

                    <div class="swiper-button-prev advantages-slider__prev"></div>
                    <div class="swiper-button-next advantages-slider__next"></div>
                  </div>
                  <!-- /.swiper-container -->
                </div>
                <!-- /.news__advantages -->
              </div>
              <!-- /.section__header -->

              <a href="" class="news__more">Все новости</a>

              <div class="row">
                <div class="col-4 col-xxl-3">
                  <div class="news__card news__card--big">
                    <div class="news__picture">
                      <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                    </div>
                    <!-- /.news__picture -->

                    <div class="news__wrapper">
                      <h3 class="news__title">Жители города оставили мнение о парке</h3>
                      <p class="news__description">Участники смогут высказать своё мнение относительно основных проектных решений, а также предложить свои идеи развития пространства.⁣⁣</p>

                      <div class="news__action">
                        <time class="news__time">17.04 12:48</time>
                        <a href="" class="news__link link">Подробнее
                          <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                          </svg>
                        </a>
                      </div>
                      <!-- /.news__action -->
                    </div>
                    <!-- /.news__wrapper -->
                  </div>
                  <!-- /.news__card -->
                </div>
                <!-- /.col-3 -->

                <div class="col-12 col-lg-8 col-xxl-9">
                  <div class="news__slider">
                    <div class="swiper-container news-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="news__card">
                            <div class="news__picture">
                              <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                            </div>
                            <!-- /.news__picture -->

                            <div class="news__wrapper">
                              <h3 class="news__title">Жители города оставили мнение о парке</h3>
                              <p class="news__description">31 марта в Свободном состоялся очный открытый семинар «Будущее Городског..</p>

                              <div class="news__action">
                                <time class="news__time">17.04 12:48</time>
                                <a href="" class="news__link link">Подробнее
                                  <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                                  </svg>
                                </a>
                              </div>
                              <!-- /.news__action -->
                            </div>
                            <!-- /.news__wrapper -->
                          </div>
                          <!-- /.news__card -->
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                          <div class="news__card">
                            <div class="news__picture">
                              <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                            </div>
                            <!-- /.news__picture -->

                            <div class="news__wrapper">
                              <h3 class="news__title">Жители города</h3>
                              <p class="news__description">31 марта в Свободном Свободном Свободном состоялся очный открытый семинар «Будущее Городског..</p>

                              <div class="news__action">
                                <time class="news__time">17.04 12:48</time>
                                <a href="" class="news__link link">Подробнее
                                  <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                                  </svg>
                                </a>
                              </div>
                              <!-- /.news__action -->
                            </div>
                            <!-- /.news__wrapper -->
                          </div>
                          <!-- /.news__card -->
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                          <div class="news__card">
                            <div class="news__picture">
                              <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                            </div>
                            <!-- /.news__picture -->

                            <div class="news__wrapper">
                              <h3 class="news__title">Жители города оставили мнение о парке</h3>
                              <p class="news__description">31 марта в Свободном состоялся очный открытый семинар «Будущее Городског..</p>

                              <div class="news__action">
                                <time class="news__time">17.04 12:48</time>
                                <a href="" class="news__link link">Подробнее
                                  <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                                  </svg>
                                </a>
                              </div>
                              <!-- /.news__action -->
                            </div>
                            <!-- /.news__wrapper -->
                          </div>
                          <!-- /.news__card -->
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                          <div class="news__card">
                            <div class="news__picture">
                              <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                            </div>
                            <!-- /.news__picture -->

                            <div class="news__wrapper">
                              <h3 class="news__title">Жители города оставили мнение о парке</h3>
                              <p class="news__description">31 марта в Свободном состоялся очный открытый семинар «Будущее Городског..</p>

                              <div class="news__action">
                                <time class="news__time">17.04 12:48</time>
                                <a href="" class="news__link link">Подробнее
                                  <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                                  </svg>
                                </a>
                              </div>
                              <!-- /.news__action -->
                            </div>
                            <!-- /.news__wrapper -->
                          </div>
                          <!-- /.news__card -->
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                          <div class="news__card">
                            <div class="news__picture">
                              <img src="img/page/main/news/image.jpg" alt="" class="news__image">
                            </div>
                            <!-- /.news__picture -->

                            <div class="news__wrapper">
                              <h3 class="news__title">Жители города оставили мнение о парке</h3>
                              <p class="news__description">31 марта в Свободном состоялся очный открытый семинар «Будущее Городског..</p>

                              <div class="news__action">
                                <time class="news__time">17.04 12:48</time>
                                <a href="" class="news__link link">Подробнее
                                  <svg class="news__icon link__icon link__icon--cyan ms-1" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.74891 4.44852L1.33435 0.22131C1.26184 0.151184 1.17557 0.0955243 1.08053 0.0575403C0.985484 0.0195562 0.883539 0 0.780576 0C0.677612 0 0.575667 0.0195562 0.480622 0.0575403C0.385577 0.0955243 0.299313 0.151184 0.226806 0.22131C0.081538 0.36149 0 0.551118 0 0.748776C0 0.946434 0.081538 1.13606 0.226806 1.27624L4.0876 5.01713L0.226806 8.72062C0.081538 8.8608 0 9.05042 0 9.24808C0 9.44574 0.081538 9.63537 0.226806 9.77555C0.299041 9.84624 0.385184 9.90248 0.480241 9.94101C0.575299 9.97954 0.677382 9.99959 0.780576 10C0.88377 9.99959 0.985853 9.97954 1.08091 9.94101C1.17597 9.90248 1.26211 9.84624 1.33435 9.77555L5.74891 5.54834C5.82808 5.47828 5.89126 5.39325 5.93447 5.2986C5.97769 5.20396 6 5.10175 6 4.99843C6 4.8951 5.97769 4.7929 5.93447 4.69826C5.89126 4.60361 5.82808 4.51858 5.74891 4.44852Z" fill="#1E5B60" />
                                  </svg>
                                </a>
                              </div>
                              <!-- /.news__action -->
                            </div>
                            <!-- /.news__wrapper -->
                          </div>
                          <!-- /.news__card -->
                        </div>
                      </div>
                      <!-- /.swiper-wrapper -->
                    </div>
                    <!-- /.news__wrapper -->

                    <div class="swiper-button-prev news-slider-prev news-slider-prev--hidden"></div>
                    <div class="swiper-button-next news-slider-next"></div>
                  </div>
                  <!-- /.news__slider -->

                  <div class="news__banner">
                    <div class="news__info">
                      Свободный участвует <br>
                      во всероссийском конкурсе
                    </div>
                    <!-- /.news__info -->

                    <img src="img/page/main/news/banner.jpg" alt="" class="news__image">
                  </div>
                  <!-- /.news__banner -->
                </div>
                <!-- /.col-9 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.news -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="history" class="section">
          <div class="container">
            <div class="history">
              <div class="section__header">
                <h2 class="history__title section__title">История</h2>

                <select class="input__select" data-trigger name="user_select">
                  <option value="1912">1912</option>
                  <option value="1920">1920</option>
                  <option value="1931">1931</option>
                  <option value="1946">1946</option>
                  <option value="1980">1980</option>
                  <option value="1990">1990</option>
                  <option value="2015">2015</option>
                </select>
              </div>
              <!-- /.section__header -->

              <div class="swiper-container history__slider history-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-title="1912">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Городской парк был заложен в план города при его строительстве в 1912 году. С приходом войны и парком никто не занимался. Огороженный кусок леса легким забором так
                            и простоял в годы революции и гражданской войны.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/1.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/1.webp" type="image/webp">
                              <img src="img/page/main/history/1.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="1920">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Началось первое благоустройство парка, был построен летний театр, где проводили спектакли, привлекали зрителей различными мероприятиями.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/2.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/2.webp" type="image/webp">
                              <img src="img/page/main/history/2.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="1931">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Парк сдали в пользование. Провели первую разбивку на аллеи и огородили парк оградой в 2,5 метра высотой. Появились первые спортивные волейбольные и баскетбольные площадки.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/3.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/3.webp" type="image/webp">
                              <img src="img/page/main/history/3.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="1946">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Парк передан в обслуживание коллективу Российской армии. Проводились городские мероприятия, играл оркестр.
                            В 50-60-х появились первые аттракционы.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/4.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/4.webp" type="image/webp">
                              <img src="img/page/main/history/4.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="1980">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            На начало 80-х в парке появилось "чертово" колесо, кинотеатр и карусели различных видов.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/5.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/5.webp" type="image/webp">
                              <img src="img/page/main/history/5.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="1990">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Однако к концу 80-90-х все опустело. Владельца у парка
                            не было, так что к середине 2010-х парк превратился
                            в заброшенный лес среди города. Аттракционы заржавели
                            и вышли из строя.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/6.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/6.webp" type="image/webp">
                              <img src="img/page/main/history/6.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide" data-title="2015 - наше время">
                    <div class="history__item">
                      <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 col-xxl-5">
                          <p class="history__text">
                            Началось возрождение и реконструкция парка, появились аллеи и дорожки. Старые аттракционы заменены на новые, появилась сценическая площадка.
                          </p>
                        </div>
                        <!-- /.col-5 -->

                        <div class="col-12 mb-4 col-lg-6 offset-xxl-1">
                          <a href="img/page/main/history/7.jpg" data-fslightbox="history">
                            <picture class="history__picture">
                              <source srcset="img/page/main/history/7.webp" type="image/webp">
                              <img src="img/page/main/history/7.jpg" alt="" class="history__image">
                            </picture>
                          </a>
                        </div>
                        <!-- /.col-6 offset-1 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.history__item -->
                  </div>
                  <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->

                <div class="swiper-pagination history-pagination swiper-no-swiping"></div>
              </div>
              <!-- /.swiper-container history-slider -->
            </div>
            <!-- /.history -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="feedback" class="section">
          <div class="container">
            <div class="feedback">
              <h2 class="feedback__title section__title">Предложения</h2>

              <div class="row flex-column-reverse flex-lg-row align-items-center align-items-xxl-start">
                <div class="col-12 col-lg-7 col-xxl-5">
                  <p class="feedback__text section__text">
                    Вы можете посмотреть интерактивную карту и оставить свое мнение. Если захотите оставить развернутый ответ, то заполните форму снизу.
                  </p>

                  <div class="feedback__form">
                    <form action="php/test.php" class="form" data-target="feedback">
                      <div class="input mb-3">
                        <input name="user_name" data-required type="text" class="input__field" placeholder="Как вас зовут">
                        <img data-tippy-content="Имя не указано или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="input mb-3">
                        <input name="user_age" type="number" class="input__field" placeholder="Ваш возраст">
                        <img data-tippy-content="Поле содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="input mb-4">
                        <input name="user_message" data-required type="text" class="input__field" placeholder="Что думаете о новом парке">
                        <img data-tippy-content="Поле пустое или в нем меньше шести символов" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="form__action">
                        <button type="submit" data-sending="Отправляем..." class="button button-primary d-block mx-auto">Отправить</button>
                      </div>
                      <!-- /.form__action -->
                    </form>
                  </div>
                  <!-- /.feedback__form -->
                </div>
                <!-- /.col-7 -->

                <div class="col-12 col-lg-5 offset-0 offset-xxl-1 mb-4 mb-lg-0">
                  <div class="feedback__wrapper">
                    <picture class="feedback__picture">
                      <source srcset="img/page/main/feedback/picture.webp" type="image/webp">
                      <img src="img/page/main/feedback/picture.jpg" alt="" class="feedback__image">
                    </picture>

                    <button onclick="" class="feedback__button button button-primary">
                      <svg class="me-3" width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.912 3.32131L21.312 0.0814799H21.2C21.1255 0.0739013 21.0505 0.0739013 20.976 0.0814799H20.608H20.4H20.288L11.2 3.24032L2.112 0.0814799C1.87139 0.00115081 1.61537 -0.0201773 1.36502 0.0192506C1.11467 0.0586785 0.877151 0.157735 0.672005 0.308268C0.465219 0.457327 0.296429 0.65406 0.179581 0.882216C0.0627327 1.11037 0.00117913 1.3634 5.33366e-06 1.6204V24.2992C-0.000860525 24.6388 0.103716 24.9701 0.298952 25.2463C0.494189 25.5224 0.770212 25.7295 1.08801 25.8381L10.688 29.078C11.0103 29.1844 11.3577 29.1844 11.68 29.078L20.8 26.0001L29.888 29.159C30.0579 29.1823 30.2301 29.1823 30.4 29.159C30.7345 29.1637 31.0611 29.0554 31.328 28.8512C31.5348 28.7021 31.7036 28.5054 31.8204 28.2772C31.9373 28.0491 31.9988 27.7961 32 27.5391V4.86023C32.0009 4.52063 31.8963 4.18933 31.701 3.91318C31.5058 3.63703 31.2298 3.42998 30.912 3.32131ZM9.6 25.2874L3.2 23.1329V3.87208L9.6 6.02657V25.2874ZM19.2 23.1329L12.8 25.2874V6.02657L19.2 3.87208V23.1329ZM28.8 25.2874L22.4 23.1329V3.87208L28.8 6.02657V25.2874Z" fill="#FFCB27" />
                      </svg>

                      Открыть карту
                    </button>
                  </div>
                  <!-- /.feedback__wrapper -->
                </div>
                <!-- /.col-5 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.feedback -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="FAQ" class="section">
          <div class="container">
            <div class="FAQ">
              <h2 class="FAQ__title section__title">Часто задаваемые вопросы</h2>

              <div class="FAQ__container">
                <div class="FAQ__wrapper swiper-container">
                  <div class="row swiper-wrapper">
                    <div class="swiper-slide col-12 col-xxl-4">
                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">Это один из проектов, которые обещают реализовать, но забудут?</h3>
                        <p class="FAQ-card__description">За время существования конкурса 320 городов выиграли гранты. Команда Центра Пространственного Развития (ЦПР) помогла выиграть гранты уже 9 городам — эти проекты сейчас реализуются и будут завершены до конца 2021 года. Поэтому главное — победить в Конкурсе.</p>
                      </div>
                      <!-- /.FAQ__card -->

                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">Сколько средств на это потратят?</h3>
                        <p class="FAQ-card__description">В случае победы на конкурсе город получит до 100 млн рублей, чтобы реализовать проект. Чтобы выиграть, мы опрашиваем жителей и вместе идем к развитию нового парка.</p>
                      </div>
                      <!-- /.FAQ__card -->
                    </div>
                    <!-- /.col-4 -->

                    <div class="swiper-slide col-12 col-xxl-4">
                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">В какие сроки проект будет реализован?</h3>
                        <p class="FAQ-card__description">В случае победы проект реализуют до 31 декабря 2022 года.</p>
                      </div>
                      <!-- /.FAQ__card -->

                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">Мое мнение действительно учтут?</h3>
                        <p class="FAQ-card__description">Безусловно! Победить в конкурсе не получится без вовлечения жителей города.</p>
                      </div>
                      <!-- /.FAQ__card -->
                    </div>
                    <!-- /.col-4 -->

                    <div class="swiper-slide col-12 col-xxl-4">
                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">Может ли проект измениться после конкурса?</h3>
                        <p class="FAQ-card__description">Только в некоторых деталях. Сама концепция нового парка останется неизменной. Это обязательное условие конкурса.</p>
                      </div>
                      <!-- /.FAQ__card -->

                      <div class="FAQ__card FAQ-card">
                        <h3 class="FAQ-card__title">Как я могу участвовать в проекте?</h3>
                        <p class="FAQ-card__description">Отвечайте на онлайн-опросы, участвуйте в общественных семинарах и фокус-группах или же станьте партнером или оператором коммерческого или социального объекта. </p>
                      </div>
                      <!-- /.FAQ__card -->
                    </div>
                    <!-- /.col-4 -->
                  </div>
                  <!-- /.row -->

                  <div class="swiper-button-prev FAQ-slider-prev"></div>
                  <div class="swiper-button-next FAQ-slider-next"></div>
                </div>
                <!-- /.FAQ__wrapper -->
              </div>
              <!-- /.FAQ__container -->
            </div>
            <!-- /.FAQ -->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide">
        <section id="callback" class="section">
          <div class="container">
            <div class="callback">
              <h2 class="callback__title section__title">Свяжитесь с нами</h2>

              <div class="row align-items-center align-items-xxl-start">
                <div class="col-12 col-lg-7 col-xxl-5 mb-5 mb-lg-0">
                  <p class="callback__text section__text">
                    Значимость этих проблем настолько очевидна, что рамки и место обучения кадров позволяет оценить значение соответствующий условий активизации. </p>

                  <div class="callback__form">
                    <form action="php/test.php" class="form" data-target="callback">
                      <div class="input mb-3">
                        <input name="user_name" data-required type="text" class="input__field" placeholder="Как вас зовут">
                        <img data-tippy-content="Имя не указано или содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="input mb-3">
                        <input name="user_age" type="number" class="input__field" placeholder="Ваш возраст">
                        <img data-tippy-content="Поле содержит ошибки" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="input mb-4">
                        <input name="user_message" data-required type="text" class="input__field" placeholder="Что думаете о новом парке">
                        <img data-tippy-content="Поле пустое или в нем меньше шести символов" class="input__warning" src="img/icons/warning.svg" alt="">
                      </div>
                      <!-- /.input -->

                      <div class="form__action">
                        <button type="submit" data-sending="Отправляем..." class="button button-primary d-block mx-auto">Отправить</button>
                      </div>
                      <!-- /.form__action -->
                    </form>
                  </div>
                  <!-- /.callback__form -->
                </div>
                <!-- /.col-7 -->

                <div class="col-12 col-xl-5 col-xxl-4 offset-0 offset-xxl-1">
                  <div class="contact">
                    <div class="contact__wrapper">
                      <div class="contact__list">
                        <a href="mailto:svobodniy@noviypark.ru" class="contact__link link link--inverted">
                          <svg class="contact__icon link__icon link__icon--inverted" width="32" height="25" viewBox="0 0 32 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.2 0H4.8C3.52696 0 2.30606 0.491665 1.40589 1.36684C0.505713 2.242 0 3.42899 0 4.66667V20.2222C0 21.4599 0.505713 22.6469 1.40589 23.5221C2.30606 24.3972 3.52696 24.8889 4.8 24.8889H27.2C28.473 24.8889 29.6939 24.3972 30.5941 23.5221C31.4943 22.6469 32 21.4599 32 20.2222V4.66667C32 3.42899 31.4943 2.242 30.5941 1.36684C29.6939 0.491665 28.473 0 27.2 0ZM26.544 3.11111L17.136 12.2578C16.9873 12.4036 16.8103 12.5193 16.6153 12.5983C16.4203 12.6772 16.2112 12.7179 16 12.7179C15.7888 12.7179 15.5797 12.6772 15.3847 12.5983C15.1897 12.5193 15.0127 12.4036 14.864 12.2578L5.456 3.11111H26.544ZM28.8 20.2222C28.8 20.6348 28.6314 21.0304 28.3314 21.3222C28.0313 21.6139 27.6243 21.7778 27.2 21.7778H4.8C4.37565 21.7778 3.96869 21.6139 3.66863 21.3222C3.36857 21.0304 3.2 20.6348 3.2 20.2222V5.30444L12.608 14.4511C13.508 15.325 14.728 15.8159 16 15.8159C17.272 15.8159 18.492 15.325 19.392 14.4511L28.8 5.30444V20.2222Z" fill="white" />
                          </svg>

                          svobodniy@noviypark.ru
                        </a>

                        <a href="https://vk.com/publicspacesvb" target="_blank" class="contact__link link link--inverted">
                          <svg class="contact__icon link__icon link__icon--inverted" width="32" height="19" viewBox="0 0 32 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.2663 1.25021C31.4899 0.528935 31.2663 0 30.2091 0H26.7071C25.816 0 25.4088 0.457584 25.1852 0.96015C25.1852 0.96015 23.4046 5.17767 20.8815 7.91231C20.067 8.70804 19.6949 8.95932 19.251 8.95932C19.029 8.95932 18.7064 8.70804 18.7064 7.98676V1.25021C18.7064 0.38468 18.4493 0 17.7068 0H12.2037C11.648 0 11.3127 0.400192 11.3127 0.781769C11.3127 1.60077 12.5742 1.79 12.7036 4.09808V9.10513C12.7036 10.2018 12.5008 10.4019 12.0536 10.4019C10.8671 10.4019 7.97986 6.16884 6.26635 1.32311C5.9326 0.381578 5.59564 0.00155176 4.70136 0.00155176H1.20089C0.199616 0.00155176 0 0.459135 0 0.961701C0 1.86446 1.18652 6.33171 5.52698 12.24C8.42061 16.2744 12.4944 18.4615 16.2056 18.4615C18.4302 18.4615 18.7048 17.976 18.7048 17.1384V14.0889C18.7048 13.1179 18.9172 12.9225 19.6215 12.9225C20.1389 12.9225 21.03 13.1768 23.1076 15.1204C25.4806 17.4254 25.8735 18.46 27.2069 18.46H30.7074C31.7071 18.46 32.2069 17.9745 31.9194 17.0159C31.6049 16.0619 30.471 14.6737 28.9667 13.031C28.1491 12.0942 26.9274 11.0859 26.5554 10.5818C26.0364 9.93188 26.1865 9.64492 26.5554 9.0679C26.557 9.06945 30.8224 3.2341 31.2663 1.25021Z" fill="white" />
                          </svg>

                          publicspacesvb
                        </a>

                        <a href="https://instagram.com/publicspace_svb" target="_blank" class="contact__link link link--inverted">
                          <svg class="contact__icon link__icon link__icon--inverted" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C11.6544 0 11.1104 0.0191993 9.40373 0.0959993C7.69707 0.172799 6.53653 0.443734 5.51893 0.840534C4.45641 1.25172 3.49146 1.88024 2.68585 2.68585C1.88024 3.49146 1.25172 4.45641 0.840534 5.51893C0.443734 6.53653 0.174933 7.6992 0.0959994 9.40373C0.017066 11.1083 0 11.6544 0 16C0 20.3456 0.0191993 20.8896 0.0959994 22.5963C0.172799 24.3029 0.443734 25.4635 0.840534 26.4811C1.25172 27.5436 1.88024 28.5085 2.68585 29.3141C3.49146 30.1197 4.45641 30.7483 5.51893 31.1595C6.53653 31.5563 7.6992 31.8251 9.40373 31.904C11.1083 31.9829 11.6544 32 16 32C20.3456 32 20.8896 31.9808 22.5963 31.904C24.3029 31.8272 25.4635 31.5563 26.4811 31.1595C27.5436 30.7483 28.5085 30.1197 29.3141 29.3141C30.1198 28.5085 30.7483 27.5436 31.1595 26.4811C31.5563 25.4635 31.8251 24.3008 31.904 22.5963C31.9829 20.8917 32 20.3456 32 16C32 11.6544 31.9808 11.1104 31.904 9.40373C31.8272 7.69706 31.5563 6.53653 31.1595 5.51893C30.7483 4.45641 30.1198 3.49146 29.3141 2.68585C28.5085 1.88024 27.5436 1.25172 26.4811 0.840534C25.4635 0.443734 24.3008 0.174933 22.5963 0.0959993C20.8917 0.017066 20.3456 0 16 0ZM15.9994 7.78452C14.3746 7.78452 12.7862 8.26635 11.4352 9.16907C10.0842 10.0718 9.03116 11.3549 8.40935 12.8561C7.78754 14.3572 7.62485 16.0091 7.94184 17.6027C8.25884 19.1964 9.04128 20.6602 10.1902 21.8092C11.3392 22.9581 12.803 23.7406 14.3967 24.0576C15.9903 24.3746 17.6422 24.2119 19.1434 23.5901C20.6445 22.9683 21.9276 21.9153 22.8304 20.5642C23.7331 19.2132 24.2149 17.6248 24.2149 16C24.2149 13.8211 23.3493 11.7315 21.8087 10.1908C20.268 8.65007 18.1783 7.78452 15.9994 7.78452ZM15.9994 21.3333C14.9446 21.3333 13.9135 21.0205 13.0364 20.4345C12.1593 19.8484 11.4758 19.0155 11.0721 18.0409C10.6684 17.0664 10.5628 15.9941 10.7686 14.9595C10.9744 13.9249 11.4823 12.9746 12.2282 12.2287C12.9741 11.4829 13.9244 10.9749 14.959 10.7691C15.9935 10.5633 17.0659 10.669 18.0404 11.0726C19.015 11.4763 19.8479 12.1599 20.4339 13.0369C21.02 13.914 21.3328 14.9451 21.3328 16C21.3328 17.4145 20.7709 18.771 19.7707 19.7712C18.7705 20.7714 17.4139 21.3333 15.9994 21.3333ZM26.4601 7.45813C26.4601 8.51852 25.6005 9.37813 24.5401 9.37813C23.4797 9.37813 22.6201 8.51852 22.6201 7.45813C22.6201 6.39775 23.4797 5.53813 24.5401 5.53813C25.6005 5.53813 26.4601 6.39775 26.4601 7.45813Z" fill="white" />
                          </svg>

                          publicspace_svb
                        </a>
                      </div>
                      <!-- /.contact__list -->

                      <div class="contact__partners partners">
                        <a href="" class="partners__link me-3"><img src="img/logo/7.png" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-4"><img src="img/logo/2.svg" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-4"><img src="img/logo/6.svg" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-4 me-lg-0"><img src="img/logo/5.svg" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-4 mt-3"><img src="img/logo/1.svg" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-3 mt-3"><img src="img/logo/3.svg" alt="" class="partners__icon"></a>
                        <a href="" class="partners__link me-3 mt-4"><img src="img/logo/4.svg" alt="" class="partners__icon"></a>
                      </div>
                      <!-- /.hero__partners partners -->
                    </div>
                    <!-- /.contact__wrapper -->
                  </div>
                  <!-- /.contact -->
                </div>
                <!-- /.col-5 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.callback-->
          </div>
          <!-- /.container -->
        </section>
      </div>
      <!-- /.swiper-slide -->
    </div>
    <!-- /.swiper-wrapper -->
  </div>
  <!-- /.swiper-container -->
</main>

<div class="modal modal-info micromodal-slide" id="modal-info">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <div class="modal__title">1 этап</div>
        <button class="modal__close" data-micromodal-close></button>
      </div>

      <div class="modal__content">
        <div class="modal__wrapper">
          <h3 class="modal__heading">Планирование функционального зонирования</h3>
          <p class="modal__description">
            В рамках конкурса на новый парк будет выделятся более 100 000 000 рублей и федерального бюджета. Город не потратится на благоустройство, если выиграем конкурс. Для этого мы опрашиваем жителей и вместе идем к развитию нового парка.
          </p>
        </div>
        <!-- /.modal__wrapper -->
      </div>
      <!-- /.modal__content -->
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<div class="modal modal-accept micromodal-slide" id="modal-accept">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <button class="modal__close" data-micromodal-close></button>
      </div>

      <div class="modal__content">
        <div class="modal__wrapper">
          <h3 class="modal__heading">Спасибо! Свободный станет лучше.</h3>
        </div>
        <!-- /.modal__wrapper -->
      </div>
      <!-- /.modal__content -->
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<div class="modal modal-document micromodal-slide" id="modal-document">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <div class="modal__title">Документы</div>
        <button class="modal__close" data-micromodal-close></button>
      </div>

      <div class="modal__content">
        <div class="modal__wrapper">
          <div class="about-document__item">
            <a href="/files/1.pdf" class="about-document__link link">
              <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
              </svg>

              Отчет об общественном семинаре «Функциональное зонирование Городского парка».pdf
            </a>
          </div>
          <!-- /.about-document__item -->

          <div class="about-document__item">
            <a href="/files/2.pdf" class="about-document__link link">
              <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
              </svg>

              Отчет об Общественном семинаре «Будущее Городского парка».pdf
            </a>
          </div>
          <!-- /.about-document__item -->

          <div class="about-document__item">
            <a href="/files/3.pdf" class="about-document__link link">
              <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
              </svg>

              Протокол №1 об определении территории реализации проекта
            </a>
          </div>
          <!-- /.about-document__item -->

          <div class="about-document__item">
            <a href="/files/4.pdf" class="about-document__link link">
              <svg class="link__icon link__icon--cyan me-2 mb-1" width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.1875 14.5C6.80625 14.5 6.44062 14.6528 6.17103 14.9247C5.90145 15.1966 5.75 15.5654 5.75 15.95C5.75 16.3346 5.90145 16.7034 6.17103 16.9753C6.44062 17.2472 6.80625 17.4 7.1875 17.4H15.8125C16.1937 17.4 16.5594 17.2472 16.829 16.9753C17.0985 16.7034 17.25 16.3346 17.25 15.95C17.25 15.5654 17.0985 15.1966 16.829 14.9247C16.5594 14.6528 16.1937 14.5 15.8125 14.5H7.1875Z" fill="#1E5B60" />
                <path d="M7.1875 11.6H8.625C9.00625 11.6 9.37188 11.4472 9.64147 11.1753C9.91105 10.9034 10.0625 10.5346 10.0625 10.15C10.0625 9.76544 9.91105 9.39662 9.64147 9.1247C9.37188 8.85277 9.00625 8.7 8.625 8.7H7.1875C6.80625 8.7 6.44062 8.85277 6.17103 9.1247C5.90145 9.39662 5.75 9.76544 5.75 10.15C5.75 10.5346 5.90145 10.9034 6.17103 11.1753C6.44062 11.4472 6.80625 11.6 7.1875 11.6Z" fill="#1E5B60" />
                <path d="M15.8125 20.3H7.1875C6.80625 20.3 6.44062 20.4528 6.17103 20.7247C5.90145 20.9966 5.75 21.3654 5.75 21.75C5.75 22.1346 5.90145 22.5034 6.17103 22.7753C6.44062 23.0472 6.80625 23.2 7.1875 23.2H15.8125C16.1937 23.2 16.5594 23.0472 16.829 22.7753C17.0985 22.5034 17.25 22.1346 17.25 21.75C17.25 21.3654 17.0985 20.9966 16.829 20.7247C16.5594 20.4528 16.1937 20.3 15.8125 20.3Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9138 9.541C22.8446 9.39191 22.7524 9.25486 22.6406 9.135L14.0156 0.435C13.8968 0.322213 13.7609 0.229217 13.6131 0.1595C13.5218 0.106333 13.2733 0 13.0094 0H4.3125C3.16875 0 2.07185 0.458302 1.2631 1.27409C0.454351 2.08987 0 3.19631 0 4.35V24.65C0 25.8037 0.454351 26.9101 1.2631 27.7259C2.07185 28.5417 3.16875 29 4.3125 29H18.6875C19.8312 29 20.9281 28.5417 21.7369 27.7259C22.5457 26.9101 23 25.8037 23 24.65V10.15V10.063C23 9.82768 22.9425 9.61695 22.9138 9.541ZM18.0981 8.7L14.375 4.9445V7.25C14.375 7.63456 14.5265 8.00338 14.796 8.2753C15.0656 8.54723 15.4313 8.7 15.8125 8.7H18.0981ZM19.704 25.6753C19.9736 25.4034 20.125 25.0346 20.125 24.65V11.6H15.8125C14.6688 11.6 13.5719 11.1417 12.7631 10.3259C11.9544 9.51013 11.5 8.40369 11.5 7.25V2.9H4.3125C3.93125 2.9 3.56562 3.05277 3.29603 3.3247C3.02645 3.59662 2.875 3.96544 2.875 4.35V24.65C2.875 25.0346 3.02645 25.4034 3.29603 25.6753C3.56562 25.9472 3.93125 26.1 4.3125 26.1H18.6875C19.0688 26.1 19.4344 25.9472 19.704 25.6753Z" fill="#1E5B60" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.625 11.6H7.1875C6.80625 11.6 6.44062 11.4472 6.17103 11.1753C5.90145 10.9034 5.75 10.5346 5.75 10.15C5.75 9.76544 5.90145 9.39662 6.17103 9.1247C6.44062 8.85277 6.80625 8.7 7.1875 8.7H8.625C9.00625 8.7 9.37188 8.85277 9.64147 9.1247C9.91105 9.39662 10.0625 9.76544 10.0625 10.15C10.0625 10.5346 9.91105 10.9034 9.64147 11.1753C9.37188 11.4472 9.00625 11.6 8.625 11.6ZM6.17103 14.9247C6.44062 14.6528 6.80625 14.5 7.1875 14.5H15.8125C16.1937 14.5 16.5594 14.6528 16.829 14.9247C17.0985 15.1966 17.25 15.5654 17.25 15.95C17.25 16.3346 17.0985 16.7034 16.829 16.9753C16.5594 17.2472 16.1937 17.4 15.8125 17.4H7.1875C6.80625 17.4 6.44062 17.2472 6.17103 16.9753C5.90145 16.7034 5.75 16.3346 5.75 15.95C5.75 15.5654 5.90145 15.1966 6.17103 14.9247ZM15.8125 20.3C16.1937 20.3 16.5594 20.4528 16.829 20.7247C17.0985 20.9966 17.25 21.3654 17.25 21.75C17.25 22.1346 17.0985 22.5034 16.829 22.7753C16.5594 23.0472 16.1937 23.2 15.8125 23.2H7.1875C6.80625 23.2 6.44062 23.0472 6.17103 22.7753C5.90145 22.5034 5.75 22.1346 5.75 21.75C5.75 21.3654 5.90145 20.9966 6.17103 20.7247C6.44062 20.4528 6.80625 20.3 7.1875 20.3H15.8125Z" fill="#1E5B60" />
              </svg>

              Итоговый протокол №2
            </a>
          </div>
          <!-- /.about-document__item -->
        </div>
        <!-- /.modal__wrapper -->
      </div>
      <!-- /.modal__content -->
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->

<?php include_once('partials/footer.php') ?>