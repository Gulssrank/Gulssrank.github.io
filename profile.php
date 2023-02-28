<?php
     session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&amp;subset=cyrillic"
    rel="stylesheet">
  <link rel="stylesheet" href="CSS/normalize.css">
  <link rel="stylesheet" href="CSS/fonts.css">
  <link rel="stylesheet" href="CSS/jquery.fancybox.min.css">
  <link rel="stylesheet" href="CSS/slick.css">
  <link rel="stylesheet" href="CSS/jquery.formstyler.css">
  <link rel="stylesheet" href="CSS/style2.css">
  <link rel="stylesheet" href="CSS/media.css">
</head>

<body>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__contacts">
          <a class="header__phone" href="tel:+79045150265">+7 (921) 189 39 59</a>
          <a class="header__email" href="#">artem_db_2002@mail.com</a>
          <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Бесплатная
            консультация</a>
        </div>
      </div>
    </div>
    <div class="header__content">
      <div class="container">
        <div class="header__content-inner">
          <div class="header__logo">
            <a href="#">
              <img src="img/logo_transparent.png" alt="">
            </a>
          </div>
          <nav class="menu">
            <div class="header__btn-menu">
              <span class="icon-bars"></span>
            </div>
            <ul>
              <li><a href="#">Главная</a></li>
              <li><a href="#">О компании</a></li>
              <li><a href="megauslugi.php">Сервера</a></li>
              <li><a href="contacti.php">Контакты</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="slider">
    <div class="container">
      <div class="slider__inner">
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
              ОБСЛУЖИВАНИЕ СЕРВЕРОВ
            </div>
            <div class="slider__text">
              Администрирование локальных сетей на профессиональном уровне для любых ПК, организаций и предприятий практически любого плана — что позволяет избежать, большинство неприятностей. Высококачественная помощь, предоставляет на высоком уровне при круглосуточной поддержке.
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
              Оставить заявку
            </a>
          </div>
        </div>
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
              НАСТРОЙКА СЕРВЕРОВ
            </div>
            <div class="slider__text">
              Диагностика компьютера производится при помощи современных технологий и специального программного обеспечения. Наиболее точная диагностика исключительно только у нас. Комплексная диагностика неисправности компьютера — не только устраняет неисправности в работе вашего пк, но и выявляет наличии вирусов. Если у вас нет времени, то возможно заказать диагностику ПК на дому для выявления неисправности.
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
              Оставить заявку
            </a>
          </div>
        </div>
        <div class="slider__item">
          <div class="slider__item-content">
            <div class="slider__title">
              ПРОФИЛАКТИКА КОМПЬЮТЕРОВ
            </div>
            <div class="slider__text">
              Профилактика компьютера – это своевременно производимый комплекс мер по проверке состояния Вашего компьютера, который продлит ему жизнь. Под профилактикой подразумевают как  физическое обслуживание «железа», так и меры программного обслуживания. А если профилактику вовремя не провели и требуется комплексная диагностика компьютера специалистами Центра Computest, то Мы работаем каждый день, а выезд сервис-инженера возможен в день обращения.
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
              Оставить заявку
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">

        </div>
        <div class="services__btn">
          <a href="#">
            Показать все услуги
          </a>
        </div>
      </div>
      <div class="services__items">
        <div class="services__item">
          <img src="img/icons8-%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%BF%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%BA%D0%B0-50.png" alt="">
          <div class="services__item-title">
            Обслуживание ПК
          </div>
          <div class="services__item-text">
            Обслуживание компьютеров — это качественный ИТ аутсорсинг от компании по обслуживанию компьютерной техники. Мы зарекомендовали себя как надёжный и стабильный поставщик услуг в области компьютерного обслуживания и поддержки в сегменте малого бизнеса и физических лиц на территории Санкт-Петербурга, Ленинградской Области, в Иваново, Ярославль, Кострома, Киев, Харьков, Хмельницкий и Винница.
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="img/icons8-%D0%B1%D0%B5%D0%B7-%D1%88%D0%BF%D0%B8%D0%BE%D0%BD%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%BF%D0%BE-50.png" alt="">
          <div class="services__item-title">
            Установка антивируса
          </div>
          <div class="services__item-text">
            Антивирусная программа — компьютерная программная защита, целью которой является обнаружение и удаление компьютерных вирусов, а также других вредоносных программ. Многие  антивирусы разрешают не только обнаруживать, но и блокируют несанкционированному проникновению вредоносных вирусов на компьютер.
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="img/icons8-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8-50.png" alt="">
          <div class="services__item-title">
            Настройка программ
          </div>
          <div class="services__item-text">
            Предоставяем услуги по установке программного обеспечения на компьютер или ноутбук. Если вы столкнулись с необходимостью установить программу, но не можете разобраться с настройками при процессе инсталляции, Наши специалисты окажут квалифицированную помощь и проведут базовую настройку любого приложения.
          </div>
          <div class="services__item-btn">
            <a class="services__item-link" href="#">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <div class="about__inner">
        <div class="about__title">
          О компании
        </div>
        <div class="about__text">
          Ремонт компьютеров и ноутбуков – сложный и трудоёмкий процесс, который могут провести только знающие и хорошо технически оснащенные специалисты. Ведь самостоятельное вмешательство может повлечь за собой целый ряд негативных факторов, что грозит дополнительными существенными денежными затратами на исправление брака или покупкой новой техники, так как она и вовсе не будет подлежать восстановлению. Так зачем создавать себе такие риски, когда всего этого можно избежать? Нужно лишь обратиться в надёжный сервисный центр!
        </div>
        <a href="#" class="about__btn default-btn">
          Узнать больше
        </a>
      </div>
    </div>
  </section>

  <section class="form">
    <div class="container">
      <div class="form__inner">
        <div class="form__content">
          <div class="form__title-box">
            <div class="form__title">
              Получить Консультацию
            </div>
            <div class="form__text">
              Комплексный подход к вашему вопросу, своевременная помощь.
            </div>
          </div>
          <div class="form__box">
            <form>
              <div class="form__box-inner">
                <div class="form__box-left">
                  <label>
                    E-mail
                    <input type="text">
                  </label>
                  <label>
                    Контактный телефон
                    <input type="text">
                  </label>
                  <label>
                    ФИО
                    <input type="text">
                  </label>
                  <label>
                    Тема вопроса
                    <input type="text">
                  </label>
                </div>
                <div class="form__box-right">
                  <label>
                    Сообщение
                    <textarea></textarea>
                  </label>
                  <button class="default-btn" href="javascript:;" type="submit">Получить консультацию</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="advantages">
    <div class="container">
      <div class="advantages__inner">
        <div class="advantages-item">
          <div class="advantages__title">
            Десятки успешных ремонтов ежемесячно.
          </div>
          <div class="advantages__text">
            Мы не допускаем ошибок.
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
            Мы умеем минимизировать все риски в процессе ремонта.
          </div>
          <div class="advantages__text">
            Наши специалисты самые лучшие.
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
            Широкий спектр сотрудников.
          </div>
          <div class="advantages__text">
            Самая лучшая компания на свете.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="news__top">
        <div class="news__title-box">
          <div class="news__title">
            Новости Компании
          </div>

        </div>
        <div class="news__btn">
          <a href="#">
            Открыть все новости
          </a>
        </div>
      </div>
      <div class="news__inner">
        <div class="news__slider">
          <div class="news__slider-inner">
            <div class="news__slider-item">
              <div class="news__slider-title">
                Видеокарты для компьютеров стремительно дешевеют
              </div>
              <div class="news__slider-text">
                « На одном из крупнейших рынков компьютерного "железа" фиксируется снижение цен на дефицитные видеокарты. О стабилизации ситуации с графическими ускорителями в Китае сообщает портал ITHome....»
              </div>
              <div class="news__slider-author">

              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
                Intel или Amd?
              </div>
              <div class="news__slider-text">
                «Анализ многочисленных тестов, где сталкиваются процессоры AMD и Intel, показывают, что лучше себя проявляют процессоры Intel...»
              </div>
              <div class="news__slider-author">

              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
                Куда пропали видеокарты в 2022 году?
              </div>
              <div class="news__slider-text">
                «Стоп, а где карты то в магазинах? В смысле самая мощная GTX 1050Ti за 15000 рублей?

                 Где все эти новые «супер-пупер-вундервафля-эдишины» с лучами добра за рекомендованные 499$ и 699$?...»
              </div>

            </div>
          </div>
        </div>
        <a href="#" class="news__blog">
          <div class="news__images">
            <img src="img/news-1.jpg" alt="">
            <div class="news__date">03.04</div>
          </div>
          <div class="news__blog-title">
            Новость компании
          </div>
          <div class="news__blog-text">
            На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в
            отдельных областях программирования...»
          </div>
        </a>
        <a href="#" class="news__blog">
          <div class="news__images">
            <img src="img/news-2.jpg" alt="">
            <div class="news__date">03.04</div>
          </div>
          <div class="news__blog-title">
            Новость компании
          </div>
          <div class="news__blog-text">
            На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в
            отдельных областях программирования...»
          </div>
        </a>
      </div>
    </div>
  </section>



  <div id="modal">

    <form action="zakaz.php" method="post" >
      <input type="text" name="full_name" placeholder="Ваше имя">
      <input type="text" name="telephone" placeholder="Ваш телефон">
      <input type="submit" value="Отправить">
    </form>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.formstyler.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

