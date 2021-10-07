<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Киномонстр-это портал о кино">
  <meta name="keywords" content="фильмы,фильмы онлайн,hd">
  <title>КиноБлок</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="main">
    <!-- Шапка страницы -->
    <div class="header">
      <div class="logo">
        <div class="logo_text">
          <h1><a href="/">КиноБлок</a></h1>
          <h2>Все новинки здесь!</h2>
        </div>
      </div>
      <div class="menubar">
        <ul class="menu">
          <li><a href="index.php">Главная</a></li>
          <li class="selected"><a href="films.php">Фильмы</a></li>
          <li><a href="series.php">Сериалы</a></li>
          <li><a href="rating.php">Рейтинг фильмов</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul>
      </div>
    </div>
    <!-- Основной контент -->
    <div class="site_content"> 
      <div class="sidebar_container">
        <!-- Первый блок поиск -->
        <div class="sidebar">
          <h2>Поиск</h2>
            <form method="post" action="#" id="search_form">
              <input type="search" name="search_field" placeholder="ваш запрос" />
              <input type="submit" class="btn" value="найти" />
            </form>
        </div>
        <!-- второй блок справа вход-->
        <div class="sidebar">
          <h2>Вход</h2>
          <form method="post" action="#" id="login">
            <input type="text" name="login_field" placeholder="логин" />
            <input type="password" name="password_field" placeholder="пароль" />
            <input type="submit" class="btn" value="войти" />
            <div class="lables_passreg_text">
              <span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>
            </div>
          </form>
        </div>
        <!-- третий блок справа новости -->
        <div class="sidebar">
          <h2>Новости</h2>
          <span>23.09.2021</span>
          <p>Мы запустили расширенный поиск</p>
          <a href="#">читать</a>
        </div>
        <!-- четвертый блок рейтинг фильмов -->
        <div class="sidebar">
          <h2>Рейтинг фильмов</h2>
          <ul>
            <li><a href="show_cruella.php">Круэлла</a><span class="rating_sidebar">7.4</span></li>
            <li><a href="show_palma.php">Пальма</a><span class="rating_sidebar">7.3</span></li>
            <li><a href="show_assasin.php">Ассасин:битва миров</a><span class="rating_sidebar">6.2</span></li>
            <li><a href="show_devitaev.php">Девятаев</a><span class="rating_sidebar">6.2</span></li>
          </ul>
        </div>
      </div>
      <!-- Основной контент по середине Пальма -->
      <div class="content">
        <h1>Пальма</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2t8ckmFuAcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">7.3 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Александр Домогаров мл.</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Пальма</h2>
        <div class="description_film">
          <img src="img/palma.jpg" alt="Пальма" width="200" height="250">
          Овчарка по кличке Пальма вынужденно расстается с хозяином: тот улетает за границу, а верную собаку не берут на рейс и оставляют прямо на летном поле. Пальма прячется в аэропорту и каждый день встречает самолеты в надежде, что хозяин вернулся. Но время идет… 9-летний Коля — тоже новенький в аэропорту: он потерял маму и переехал к отцу-пилоту, которого почти не знает. Пальма становится для мальчика родственной душой и лучшим другом. А отцу Коли, летчику Лазареву, предстоит заслужить доверие и любовь сына, сделав нелегкий выбор между карьерой и семьей. И найти способ не разлучить друзей, когда за Пальмой однажды возвращается хозяин.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Пальма</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Владимир
          </div>
          <div class="review_text">
            Очень ярко талантливо рассказана давняя история хотя может быть немного приукрашено в свете сегодняшних реалий но всё равно очень приятно и эмоционально Уверен что не только женщины плакали во время просмотра но и у многих мужчин в некоторых сценах слезы сами наворачивались на глаза Безусловно это великолепная удача молодого режиссёра  и очень органичны и мальчик и собака и вот почему то я заметил что чем меньше фильм рекламируется хотя бы на ТВ тем приятнее его смотреть Может это связано с тем что  то  о чём больше говорят   без неё смотреть не будут а шедевры в большой рекламе  и не нуждаются
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Марина
        </div>
        <div class="review_text">
          Фильм просто замечательный. Снят отлично,очень трогательно, фильм не однодневка, вызывает какие то противоречивые чувства, с одной стороны очень жаль собаку, что её так предал хозяин, так жестоко с ней поступил, с другой стороны и радость берет за неё, что все же о ней позаботились, и все у неё хорошо сложилось. Актёры все хорошие, и играют достоверно, никто не раздражает. Ну и главная актриса Лили, красавица невероятная, душка такая, обаяшка, и умница, а эти глаза, сколько в них души, печали, отчаинья передано, вот артистка так артистка настоящая) Спасибо всем создателям, за такой замечательный фильм. 
        </div>
        </div>
        <!-- Форма оставить отзыв -->
      <div class="send">
        <form id="review" action="#" method="POST">
          <input name="review_name" type="text" placeholder="ваше имя">
          <textarea name="review_text"></textarea>
          <input class="btn" type="submit" value="отправить">
        </form>
      </div>
      </div>
    </div>
    <!-- Подвал сайта -->
      <div class="footer">
        <p>
          <a href="index.php">Главная</a> |
          <a href="films.php">Фильмы</a> |
          <a href="series.php">Сериалы</a> |
          <a href="rating.php">Рейтинг фильмов</a> |
          <a href="contact.php">Контакты</a> 
        </p>
      </div> 
    </div>
</body>
</html>
