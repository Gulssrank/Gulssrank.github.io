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
<section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">
          <div class="services__title">
            Обслуживание серверов
          </div>
          <div class="services__text">
            Компания «PC.M» оказывает техническое обслуживание серверов в Санкт-Петербург и обеспечивает бесперебойную работу с гарантией безопасности и полной сохранности информации для вашей компании. Все поставленные задачи решаются компетентными специалистами, которые обладают наработанной базой знаний и четко отточенной схемой действий по поддержанию стабильного функционирования серверного оборудования.


          </div>
        </div>
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


