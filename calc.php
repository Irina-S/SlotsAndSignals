<?php
    echo<<<EOT
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>fitme - Калькулятор</title>
        <!--стили без jQuery-->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="global.css">
        <link rel="stylesheet" href="calc.css">
        <!--стили с использованием jQuery-->
        <link rel="stylesheet" href="jQueryStyles.css">
        <!--используется jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--скрипт взаимодейсвия с табами-->
        <!-- <script src="tabsInteraction.js"></script>  -->
    </head>
    <body>
        <!--шапка сайта-->
        <div id="hdr" class="header"></div> 
        <!--таб бар-->
        <div id="wr-tabs"> 
                <!--вкладки-->
                <div class="tabs"> 
                    <div class="tab"><a href="main.html">Продукты</a></div>
                    <div class="tab active"><a href="calc.html">Калькулятор</a></div>
                    <div class="tab"><a href="login.html">Вход/Регистрация</a></div>
                </div>
                <!--контент-->
                <div class="content">
                    <!--контент, соответсвующий вкладке-->
                    <div class="tab-cont active">
                        <!--иерархия навигации-->
                        <div class="nav">
                            <div class="nav_elem nav_link"><a href="">Главная</a></div>
                            <div class="nav_sep">></div>
                            <div class="nav_elem nav_noLink">Калькулятор</div>
                        </div>
                        <div class="inner_content" >
                            <div class = "block_header">Калькулятор</div>
                            <form class="calc" formaction="calc.php">
                                <div class="label">Рост:</div>
                                <div class="txtfield calcfield">
                                    <input type="number" max="3" min="2" name="height">
                                </div>
                                <div class="label">Вес:</div>
                                <div class="txtfield calcfield">
                                    <input type="number" max="3" min="2" name="weight">
                                </div>
                                <div class="label">Возраст:</div>
                                <div class="txtfield calcfield">
                                    <input type="number" max="3" min="2" name="age">
                                </div>
                                <div class="label">Пол:</div>
                                    <input type="radio" name="gender" value="male">Мужской
                                    <input type="radio" name="gender" value="female">Женский
                                <div class="label">Цель:</div>
                                    <input type="radio" name="purpose" value="weightLoss">Снижение веса
                                    <input type="radio" name="purpose" value="weightGain">Набор веса
                                    <input type="radio" name="purpose" value="weightSup">Поддержка веса
                                <div class="label">Активность:</div>
                                    <input type="radio" name="activity" value="low">Малоподвижный
                                    <input type="radio" name="activity" value="normal">Средний
                                    <br>
                                    <input type="radio" name="activity" value="active">Активный
                                    <input type="radio" name="activity" value="hard">Интенсивные нагрузки
                                    <input type="submit" value="Расчитать" class="button">
                                    <input type="reset" value="Очистить" class="button">
                                    <input type="hidden" name="submitted" value="yes">                               
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="footer" id="ftr">
            </div>
            <script>
                    //выяснение размеров экрана и задание фиксированной ширины элементов на странице
                   var winWidth = screen.width;//вся ширина окна браузера на весь экран
                   h = document.getElementById("hdr"); 
                   t = document.getElementById("wr-tabs"); 
                   f = document.getElementById("ftr");
                   h.style.width = winWidth+"px";//шапка на весь экран
                   h.style.height = winWidth*0.2+"px"; //высота:ширина=1:5
                   t.style.width = winWidth+"px";//табы на весь экран
                   f.style.width = winWidth+"px";
            </script>
    </body>
</html>
EOT;
