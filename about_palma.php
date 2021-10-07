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
     
      <!-- Основной контент по середине форма заполнение контактов -->
      <div class="about_film">
        Фильм «Пальма» – пожалуй, самое эмоциональное и семейное кино последнего времени, и тот редкий случай, когда постановщики во главе с практически дебютантом Александром Домогаровым-младшим не стесняются выводить на первый план животных и детей, с которыми, как известно, всегда трудно конкурировать профессиональным актерам. За проектом «Пальма» мы следили с самого начала и вместе с его авторами вспоминаем, как проходили съемки этого действительно неординарного для современного российского кино фильма.
        <img src="img/palma2.jpg">
        От старой газетной заметки к нынешнему фильму

        Сценарий «Пальмы» снят по мотивам реальных событий, изложенных в статье Юрия Роста, в 1970-е вышедшей в «Комсомольской правде». Тогда собака на протяжении даже нескольких лет, а не месяцев, как показано в фильме, ждала на аэродроме своего хозяина. Эту историю режиссер Александр Домогаров-младший увидел на странице своего отца в Facebook и сразу же загорелся идеей снять фильм. Причем произошло это практически перед тем, как Домогаров-младший собирался работать над своим полнометражным дебютом «Пиковая дама. Зазеркалье» – хоррором, максимально отличающимся по своему визуальному решению от «Пальмы».
        <br><br>
        «Как только я прочитал статью Юрия Роста, то предложил снять об этом фильм своей подруге, продюсеру Кристине Рейльян, с которой снял короткометражку «Пустите детей». Кстати, благодаря этой картине меня пригласили на встречу в кинокомпанию «Марс Медиа», где я и озвучил свою идею. Последние быстро раскрутили историю, и буквально через пару недель я встретился со сценаристкой Катей Мавроматис, которая ею очень вдохновилась. А дальше – я ушел снимать «Пиковую даму», а Катя – писать сценарий. Мы немного рассинхронились, и в итоге работа над сценарием, которая должна была продлится год, растянулась на полтора. Надеюсь, что это пошло на пользу проекту. В сам сценарий я добавлял только режиссерские комментарии, потому что мне всегда было интересно, как воздействовать на чувства через режиссерские приемы. Знаю, что у всех складывается по-разному: кто-то через актеров приходит в кино, кто-то – через драматургию, а я вижу кино через картинки – к сожалению или к счастью», – говорит Александр Домогаров-младший. 
        <img src="img/palma3.jpg">
        Удивительно при этом, что до семейной «Пальмы» он снимал, в основном, хорроры. Одним из его первых режиссерских опытов был короткометражный фильм «Детки в клетке» по Стивену Кингу.
        <br><br>
        «В «Пальме» мне хотелось поработать с чувствами, но опять же с помощью визуальных придумок, а не драматургически. Хорошо написанную сцену не испортишь даже плохой режиссурой, но здесь хотелось именно баланса, немного повыпендриваться, если так можно сказать, но оставить эмоции», – продолжает режиссер.
        <br><br>
        <b>На площадке – собака и дети</b>
        <br><br>
        Рассказанные в заметке Роста события в художественном кино, конечно, претерпели ряд изменений. «Пальма» – это не только история верной собаки, но и шире – история дружбы, семьи, потери близкого и того, как эту потерю пережить. Причем этот сложный материал рассказан не только и даже не столько взрослыми актерами. Основная нагрузка легла на исполнителя главной роли – мальчика Леонида Басова, чей Коля, по сюжету, и становится другом и защитником Пальмы. На эту роль пробовалось более 300 детей, но в итоге режиссер остановил свой выбор именно на Басове, для которого работа в «Пальме» – дебют в кино.
        <br><br>
        «Я безумно рад, что мы взяли именно его, хотя поначалу останавливался на разных вариантах. Помню, после первых проб я почему-то Леньку задвинул, но хорошо, что наш кастинг-директор Лика Леонидзе настояла именно на нем. С Ленькой очень круто работать и интересно. Все, что делал на площадке Леня, я переживал и искал вместе с ним. Это было сложно, потому что сцены у него есть очень драматические, а для них надо иметь опыт. Да и мне как режиссеру нужен был опыт, чтобы направить артиста. Но в этом мне помогал мой друг, однокурсник Филипп Савенков, который был для Лени коучем на площадке», – рассказывает Домогаров-младший.
        <img src="img/palma4.jpg">
        Он признает, что Басов, несмотря на возраст, работал самоотверженно. Например, в фильме есть очень драматическая и сложная сцена под проливным дождем, которую снимали на протяжении двух ночей.
        <br><br>
        «Первая ночь была леденющая, во вторую тоже было холодно, мы еще с него сняли термобелье, Леня плакал, губы тряслись, он ходил ходуном от мороза, но ни разу не сказал, что больше не будет, все это вынес, а потом еще написал мне трогательное смс: «Саня, ты не заболел?». Я его, конечно, спросил, не обижается ли он на нас, за то, что мы так давили на него при этих съемках, но он честно ответил, что все понимает и ни в коем случае не обижается», – вспоминает режиссер.
        <br><br>
        Но если с детьми еще до «Пальмы» Домогаров-младший уже работал – все в той же короткометражке «Детки в клетке», – то с животными ему предстояло встретиться на площадке впервые.
        <br><br>
        «Многие говорят, что такое снимать легко – мол, собаки все сыграют. Это не правда! Собака всегда работает на контексте. Как ты снимешь, так собака и будет читаться, это абсолютно режиссерский прием. Еще перед съемками «Пальмы» мы с коллегой смотрели фильм «Собачья жизнь», разбирали его: вот стоит, например, собака с грустными глазами, но просто так это не работает. Как только в кадре мы видим ее оценку – например, плачет человек, – то и собака выглядит в два раза сильнее, потому что мы понимаем контекст, зачем и почему это происходит», – уточняет Домогаров-младший.
        <img src="img/palma5.jpg">
        Кастинг на роль Пальмы тоже был непростым – кандидаток было много, однако выбор пал на семилетнюю овчарку Лили, для которой это, кстати, первая главная роль в большом кино.
        <br><br>
        «Лили подкупила режиссера мордой: у нее как раз необходимый трагический типаж, – рассказывает ведущий дрессировщик и художественный руководитель агентства «Энимал Арт» Александра Степанова. – Собаку готовили к съемкам в течение трех месяцев. А уже на площадке от нее требовалось то же, что от других актеров: контактировать с людьми, изображать, что определенный человек, которого она видит первый раз, – ее хозяин, и ей надо страдать по нему, потому что он ее оставил. Или Лили должна была радостно встречать мальчика, с которым никогда не жила. Чтобы все было точно, мы с Лили старались делать заготовки до мотора: выйти на определенную точку, где будет сниматься сцена, и репетировали. Или подходили к артисту, с кем предстояло играть, и положить, к примеру, морду на колено. Все это было необходимо, чтобы собака существовала в кадре как полноценная актриса».
        <br><br>
        <b>Опытные взрослые – Виктор Добронравов, Владимир Ильин, Валерия Федорович</b>
        <br><br>
        Пожалуй, тяжелее всего по-актерски пришлось Виктору Добронравову, у которого как раз больше всего сцен и с Леней Басовым, и с Лили. Причем по сюжету их общение строится на конфликте – герой Добронравова, опытный летчик Лазарев, когда-то променявший семью на карьеру, – не находит общий язык с мальчиком, а потом еще и с собакой. Однако на площадке казалось, что все происходило ровным счетом наоборот.
        <br><br>
        «Не секрет, что с детьми работать тяжелее. В кадре от них требуется такая органика, чтобы не было видно, что ребенок играет, как в «Ералаше», где все немножечко с плюсом. В таких историях, как наша, плюс не допустим. Ребенку нужно существовать перед камерой так, как он существует в жизни. Как мой брат Иван Добронравов в фильме Андрея Звягинцева «Возвращение»: ему было 11 лет, и он провел колоссальную актерскую работу, большой труд. Леня Басов замечательно справлялся с задачами, которые перед ним ставились, работать с ним – одно удовольствие. А моя задача была не мешать ему», – говорит Добронравов. 
        <br><br>
        С собакой у актера тоже были свои «правила игры». «В первый же съемочный день нам было строго-настрого сказано, что те, кто не работает с собакой в кадре, не должны к ней подходить, ласкать, кормить, – вспоминает актер. – И, снимаясь с Лили, я старался ничего лишнего не делать, чтобы не отвлекать ее от главного – игры».
        <br><br>
        Другая важная мужская роль – наставника Коли, механика аэродрома, который проверяет не только работающие самолеты, но и чинит свой старенький летательный аппарат – досталась артисту Владимиру Ильину. А его экранную дочь сыграла Валерия Федорович.
        <br><br>
        «Где-то за семь месяцев до того, как меня пригласили на пробы в «Пальму», я фантазировала о будущем и подумала: «Вот бы поработать с Ильиным!». Прошло время, я забыла про это. И тут меня утверждают, и я интересуюсь: «А кто будет играть моего папу?». В ответ слышу: «Владимир Ильин». И я от шока, что такое случается, конечно, обалдела. В первый наш съемочный день испытывала и робость, и страх, поскольку он – огромная величина! А Ильин после первой же нашей сцены подошел ко мне и спросил: «Простите, пожалуйста, я вам ничем не мешаю?» – «Владимир Адольфович, да вы что! Это я вам могу мешать тут». Это великий артист, великий человек, и, когда ты с таким встречаешься на площадке, не можешь врать. Априори сцена становится живой. У него учиться и учиться мастерству», – отмечает актриса. 
        <img src="img/palma7.jpg">
        <b>Аэропорты и города</b>
        <br><br>
        Самолеты, аэропорт, костюмы – все было сделано в рамках предложенной эпохи. Согласно сюжету, Пальма бегает по взлетно-посадочным полосам в надежде наконец встретить своего хозяина, улетевшего на Ил-18. Собака причем отличает гул именно этого самолета от сотни других, прилетающих в Москву. Самолет для съемок нашли довольно быстро, а вот трап, подходящий для эпохи 1970-х, найти, как рассказывает художник-постановщик Давид Дадунашвили, оказалось гораздо сложнее. Впрочем, и эти поиски не шли ни в какое сравнение с общей работой на открытом пространстве «аэродрома», где операторско-постановочному цеху нужно было постоянно учитывать направление солнца и ветра, тщательно следить за погодой и безопасностью на площадке – с учетом того, что на ней работала собака, весь реквизит нужно было расставлять так, чтобы она ни в коем случае не поранилась.
        <br><br>  
        Самой впечатляющей стала декорация находящегося непосредственно на аэродроме дома механика в исполнении Владимира Ильина и того самого маленького самолета, который он чинит. Так, домом стало этакое бунгало с небольшими пристройками и указателем на разные города.
        <br><br>
        «Самое сложное, конечно, было достать самолет. Он был привезен в разобранном состоянии и специальные люди его собирали, причем наши художники восстанавливали его практически в режиме онлайн – вместе с героем Ильина. Для его домика референсов не было. Зная сюжетную линию и учитывая типаж актеров, мы доставляли в кадр разные мелочи. Надстройку и «вагончик» мы сделали сами из дерева, потом решили натянуть тент, который работал и технически, и визуально. Таким образом мы спасались от солнца и могли снимать внутри этой площадки в разных направлениях, тент давал такой рисующий художественный свет», – вспоминает Дадунашвили. 
        <img src="img/palma8.jpg">
        «Пальму» снимали в трех городах – Москва, Брест и Акита. Последний город не случаен – у российского фильма будет специальная японская версия, которая выйдет там в прокат летом этого года. В нее вошли дополнительные сцены – например, именно в Японию приезжает повзрослевший Коля в исполнении, кстати, Александра Домогарова, чтобы купить собаку породы акита-ину.
        <br><br>
        «Вообще-то я не планировал снимать отца в картине, но японские продюсеры очень настаивали. Несколько лет назад папа сыграл в их фильме про войну и подружился с местными кинематографистами. Кстати, именно отец и познакомил меня с ними, а они придумали японскую часть, чтобы поработать вместе. Правда, я до последнего не понимал, как именно продюсеры хотят интегрировать свою историю в нашу картину, и переживал из-за сравнений с Хатико. Японцы же, наоборот, культивируют это сравнение. Им хотелось, чтобы история нашей Пальмы соприкоснулась с историей Хатико», – говорит Александр Домогаров-младший.
        <br><br>
        Однако отечественную «Пальму» никак нельзя назвать версией «Хатико». На этом настаивает и Виктор Добронравов.
        <br><br>
        «”Хатико” – очень грустная и печальная картина о верности и дружбе, ее без слез смотреть невозможно. Наш фильма другой: он больше про людей, которых собака заставляет вести себя по-человечески. Это история про любовь, предательство, дружбу, верность, но точно не про Хатико. Благодаря собаке отец и сын приходят к взаимопониманию», – заключает актер.
        <br><br>
        <i>Данные взяты из источника Кино-Театр.РУ https://www.kino-teatr.ru/blog/y2021/3-15/1502/</i>
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