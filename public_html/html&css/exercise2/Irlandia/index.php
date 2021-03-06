<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Hello World</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <link rel="stylesheet" href="css/style.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <span>Delphic</span>
                </div>
                <nav>
                    <ul>
                        <a href="#"><li>Home</li></a>
                        <a href="#"><li>Portfolio</li></a>
                        <a href="#"><li>Services</li></a>
                        <a href="#"><li>Others</li></a>
                        <a href="#"><li>Contact</li></a>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container main">
            <!--Slider-->
            <div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/slider.jpg">
                        <div class="carousel-caption">
                            <h3>Первый слайд</h3>
                            <p>Описание первого слайда</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slider.jpg">
                        <div class="carousel-caption">
                            <h3>Второй слайд</h3>
                            <p>Описание второго слайда</p>
                        </div>
                    </div>

                </div>
                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <div class="main__content">
                <h4>Идейные соображения высшего порядка, а также начало повседневной 
                    работы по формированию позиции требуют от нас анализа направлений 
                    прогрессивного развития. С другой стороны начало повседневной работы 
                    по формированию позиции играет важную роль в формировании направлений 
                    прогрессивного развития. Задача организации, в особенности же рамки и 
                    место обучения кадров в значительной степени обуславливает создание систем
                    массового участия.</h4>
            </div>
            <div class="main__blocks">
                <div class="col-lg-3">
                    <img src="img/slider1.jpg">
                    <p>Example Text</p>
                    <span>С другой стороны постоянный количественный рост и
                        сфера нашей активности требуют от нас анализа направлений
                        прогрессивного развития. С другой стороны реализация намеченных
                        плановых заданий играет важную роль в формировании систем массового
                        участия.
                    </span>
                </div>
                <div class="col-lg-3">
                    <img src="img/slider1.jpg">
                    <p>Example Text</p>
                    <span>С другой стороны постоянный количественный рост и
                        сфера нашей активности требуют от нас анализа направлений
                        прогрессивного развития. С другой стороны реализация намеченных
                        плановых заданий играет важную роль в формировании систем массового
                        участия.
                    </span>
                </div>
                <div class="col-lg-3">
                    <img src="img/slider1.jpg">
                    <p>Example Text</p>
                    <span>С другой стороны постоянный количественный рост и
                        сфера нашей активности требуют от нас анализа направлений
                        прогрессивного развития. С другой стороны реализация намеченных
                        плановых заданий играет важную роль в формировании систем массового
                        участия.
                    </span>
                </div>
                <div class="col-lg-3">
                    <img src="img/slider1.jpg">
                    <p>Example Text</p>
                    <span>С другой стороны постоянный количественный рост и
                        сфера нашей активности требуют от нас анализа направлений
                        прогрессивного развития. С другой стороны реализация намеченных
                        плановых заданий играет важную роль в формировании систем массового
                        участия.
                    </span>
                </div>
            </div>
        </section>
    </body>
</html>
