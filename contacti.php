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
<header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__contacts">
          <a class="header__phone" href="tel:380963092145">+7 (921) 189 39 59</a>
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
              <li><a href="profile.php">Главная</a></li>
              <li><a href="#">О компании</a></li>
              <li><a href="megauslugi.php">Сервера</a></li>
              <li><a href="contacti.php">Контакты</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

<footer class="footer">
    <div class="footer__content">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__info">

            <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">
              Бесплатная консультация
            </a>
            <ul class="footer__list">
              <li><a class="footer__phone" href="tel:380963092145">+7 (921) 189 39 59</a></li>
              <li><a href="#">artem_db_2002@mail.com</a></li>
              <li><a class="footer__adress" href="#">Балтийский бул., 4 ст1</a></li>
            </ul>
          </div>
          <div class="footer__map">
            <iframe height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2002.7908047105416!2d30.154124167092274!3d59.86921969092551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963a2a295cf5af%3A0x54611d7091efd5d2!2z0JHQsNC70YLQuNC50YHQutC40Lkg0LHRg9C7LiwgNCDRgdGCMSwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5ODMyOA!5e0!3m2!1sru!2sru!4v1670605788935!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__copy">
      <div class="container">
        <div class="copy__text">

        </div>
      </div>
    </div>
  </footer>
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
