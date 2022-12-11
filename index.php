<!DOCTYPE html>
<html lang="ru" class="page">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Гульшат Ярмухаметова</title>
</head>

<?php 
    date_default_timezone_set("Asia/Yekaterinburg");
    $currentHour = (int)date('H');
    $dayStartHour = 8;
    $dayEndHour = 20;
?>

<body class="page__body <?php if(($currentHour < $dayStartHour) || ($currentHour >= $dayEndHour)):?>page__body--dark-theme<?php endif;?>">
  <header class="header">
    <nav>
      <ul class="header__list">
        <li class="header__item">
          <a class="header__link" href="table.html">Посмотреть на таблицы</a>
        </li>

        <li class="header__item">
          <a class="header__link" href="flex.html">Посмотреть на флексы</a>
        </li>

        <li class="header__item">
          <a class="header__link" href="flex.html">Посмотреть на красоту</a>
        </li>

        <li class="header__item">
          <a class="header__link" href="https://ya.ru">Сам красоту найду</a>
        </li>
      </ul>
    </nav>

    <img class="header__pic" src="img/enface.jpg" height="100" alt="Фотография в профиль">
  </header>

  <main class="main">
    <img class="main__pic" src="img/smile.jpg" width="500" alt="Улыбаюсь">

    <div class="main__content">
      <h1 class="main__content-heading">Гульшат Ярмухаметова</h1>

      <section class="main__content-section">
        <h2 class="main__section-heading">О себе</h2>
  
        <p class="main__section-text">Люблю рисовать. Кистью, контурами, div-ами</p>
      </section>
  
      <section class="main__content-section">
        <h2 class="main__section-heading">Что понравилось на первом занятии</h2>
  
        <p class="main__section-text">Уютная атмосфера. Подробный разбор вопросов. Попытки писать код сразу</p>
      </section>
    </div>

    <section class="cats">
      <h2 class="cats__heading">И другие кошечки</h2>

      <ul class="cats__list cats__list--four-columns">
        <li class="cats__item">
          <img class="cats__img" src="https://gas-kvas.com/uploads/posts/2022-06/1655210839_15-gas-kvas-com-p-lvitsa-foto-zhivotnogo-21.jpg" width="200" height="200" alt="Лев и львица">
          
          <p class="cats__text">Львица</p>
        </li>

        <li class="cats__item">
          <img class="cats__img" src="https://img1.goodfon.ru/original/1400x1050/d/fc/leopard-derevo-stvol-idet-fon.jpg" width="200" height="200" alt="Леопард">
          
          <p class="cats__text">Леопард</p>
        </li>

        <li class="cats__item">
          <img class="cats__img" src="https://i.pinimg.com/originals/c9/68/29/c9682903c5f458fc4f7cd7419d5e9031.jpg" width="200" height="200" alt="Пантера">
          <p class="cats__text">Пантера</p>
        </li>

        <li class="cats__item">
          <img class="cats__img" src="https://look.com.ua/pic/201801/2560x1600/look.com.ua-266033.jpg" width="200" height="200" alt="Ягуар">
          
          <p class="cats__text">Ягуар</p>
        </li>
      </ul>

      <ul class="cats__list">
        <li class="cats__item">
          <img class="cats__img" src="https://avante.biz/wp-content/uploads/Tiger-Wallpapers-Free/Tiger-Wallpapers-Free-049.jpg" width="200" height="200" alt="Пума">
          
          <p class="cats__text">Тигр</p>
        </li>

        <li class="cats__item">
          <img class="cats__img" src="https://s1.1zoom.me/b5050/47/166855-foxixol_2048x1152.jpg" width="200" height="200" alt="">
          
          <p class="cats__text">Пума</p>
        </li>

        <li class="cats__item">
          <img class="cats__img cats__img--home" src="https://img.huffingtonpost.com/asset/5d3088c52400009d17935e3f.jpeg?cache=tnDGGEI9GA&amp;ops=1778_1000" width="200" height="200" alt="">
          
          <p class="cats__text">Кошка домашняя</p>
        </li>
      </ul>
    </section>
  </main>

  <footer class="contacts">
    <ul class="contacts__list">
      <li class="contacts__item">
        Телефон
        <a class="contacts__link" href="tel:+79177373884">(917) 7373-884</a>
      </li>

      <li class="contacts__item">
        E-mail
        <a class="contacts__link" href="mailto:goulshat@yandex.ru">goulshat@yandex.ru</a>
      </li>
    </ul>
  </footer>
</body>
</html>