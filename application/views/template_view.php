<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>MYGODS</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        // return a random integer between 0 and number
        function random(number) {

            return Math.floor( Math.random()*(number+1) );
        };

        // show random quote
        $(document).ready(function() {

            var quotes = $('.quote');
            quotes.hide();

            var qlen = quotes.length; //document.write( random(qlen-1) );
            $( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
        });
    </script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <a href="/">MY</span><span class="cms">GODS</span></a>
        </div>
        <div id="menu">
            <ul>
                <li class="first active"><a href="/">Главная</a></li>
                <li><a href="/services">Кто на что горазд</a></li>
                <li><a href="/portfolio">Портфолио</a></li>
                <li class="last"><a href="/contacts">Официальный представитель на Земле</a></li>
            </ul>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="sidebar">
            <div class="side-box">
                <h3>Случайная цитата</h3>
                <p align="justify" class="quote">
                    « - Бог умер, - сказал Ницше...
                    - Ницше умер, сказал Бог.»
                </p>
                <p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
                    «- Опять, зараза, повисла - проворчал Бог и, закрыв зависшее приложение, снова щелкнул курсором на ярлычке WINTER.EXE»
                </p>
                <p align="justify" class="quote">
                    «Обращайся к чужим богам. Они выслушают вне очереди.»
                </p>
                <p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
                    «Остается надеяться лишь на то, что у богов есть чувство юмора...»
                </p>
                <p align="justify" class="quote">
                    «О боги, ниспошлите мне терпение! Сейчас! Сию же минуту!»
                </p>
            </div>
            <div class="side-box">
                <h3>Основное меню</h3>
                <ul class="list">
                    <li class="first "><a href="/">Главная</a></li>
                    <li><a href="/services">Кто на что горазд</a></li>
                    <li><a href="/portfolio">Портфолио</a></li>
                    <li class="last"><a href="/contacts">Официальный представитель на Земле</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div class="box">
                <?php include 'application/views/'.$content_view; ?>
            </div>
            <br class="clearfix" />
        </div>
        <br class="clearfix" />
    </div>
    <div id="page-bottom">
        <div id="page-bottom-sidebar">
            <h3>Официальный представитель на Земле</h3>
            <ul class="list">
                <li class="first">githubid: Slavka-JD</li>
                <li>skypeid: Slavka_JD</li>
                <li class="last">email: miledi777@ukr.net</li>
            </ul>
        </div>
        <div id="page-bottom-content">
            <h3>О нас? Или о них?</h3>
            <p>
                Во времена древних богов, воителей и королей...

                - Как появился Мир?
                - Господь пересолил суп. Рассердившись, Он выплеснул суп (вместе с ложкой) на ближайший мертволетящий камень. Так образовался Океан. Второпях, пытаясь выловить ложку (вещь антикварная, подарок тети Сары), Бог ошпарил руку. Так появился Мат и, чуть позже, Гель От Ожогов. Для охлаждения ситуации были созданы Дождь и Ветер. Чтобы облегчить поиски Он сотворил Свет. Тьма возникла несколько раньше, как непредсказуемый побочный эффект при выращивании Черных Дыр.
                Ложка, к всеобщей радости, была успешно извлечена и водружена на свое законное место. Вылитый же бульон же со временем стух и дал Жизнь Первобактериям. Далее - все по Дарвинизму.
            </p>
        </div>
        <br class="clearfix" />
    </div>
</div>
<div id="footer">
    <a href="/">MYGODS</a> &copy; 2014</a>
</div>
</body>
</html>