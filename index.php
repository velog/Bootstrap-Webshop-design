<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet"  type="text/css" href="css/css.css"
              <meta name="viewport" content="width=device-width , initial-scale=1.0" />
        <title></title>
    </head>
    <body >
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand">LOGO</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Начало</a></li>
                <li><a href="#">Влез</a></li>
                <li><a href="#">Регистрация</a></li>
                <li><a href="#">За нас</a></li>
                <li><a href="#">Контакти</a></li>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Търси</button>
                </form>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Кошница <img src="des_img/basket-icon.gif" height="20px" width="20px"/></a></li><div class="navbar-header">
                    <a class="navbar-brand">Здравей , Мирослав Ройдев &nbsp;&nbsp;&nbsp;</a>
                </div>


            </ul>

        </div>
        <div class="container-fluid">
            <div class="table">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12" id="categorys"> 
                        <ul class="list-group" >
                            <a href="#" class="list-group-item mcollapse" >Coffee</a>
                            <ul id="" class="list-group" style="display: none;">
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>                    
                            </ul> 
                            <a href="#" class="list-group-item mcollapse" class="collapse">Coffee</a>
                            <ul id="" class="list-group" style="display: none;">
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>                    
                            </ul> 
                            <a href="#" class="list-group-item mcollapse" class="collapse">Coffee</a>
                            <ul id="" class="list-group" style="display: none;">
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>                    
                            </ul> 
                            <a href="#" class="list-group-item mcollapse" class="collapse">Coffee</a>   
                            <ul id="" class="list-group colapse-list" style="display: none;">
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>
                                <a href="#" class="list-group-item colapse-items" style="background-color: yellowgreen">Coffee</a>                    
                            </ul> 
                        </ul> 
                    </div>
                    <div class="table">
                        <div class="col-md-1 col-sm-12 col-xs-12" ></div>
                        <div class="col-md-6 col-sm-12 col-xs-12"  >
                            <div class="row" style="height: 20px"></div>
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="banner"  >
                                            <ul>
                                                <li><img src="test_slide_img/01.jpg" /></li>
                                                <li><img src="test_slide_img/02.jpg" /></li>
                                                <li><img src="test_slide_img/03.jpg" /></li>
                                                <li><img src="test_slide_img/01.jpg" /></li>
                                                <li><img src="test_slide_img/02.jpg" /></li>
                                                <li><img src="test_slide_img/03.jpg" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="js/jquery.js" ></script>
            <script type="text/javascript" src="js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="js/unslider.js" ></script>
            <script type="text/javascript" >
                $(function () {
                    var slider = $('.banner').unslider({
                        speed: 500, //  The speed to animate each slide (in milliseconds)
                        delay: 3000, //  The delay between slide animations (in milliseconds)
                        complete: function () {
                        }, //  A function that gets called after every slide animation
                        keys: true, //  Enable keyboard (left, right) arrow shortcuts
                        dots: true, //  Display dot navigation
                        fluid: true              //  Support responsive design. May break non-responsive designs
                    });
                    var data = slider.data('unslider');
                    data.dots();

                    $('.colapse-items').hover(function () {
                        $(this).css("background-color", "#ffffff");

                    }, function () {

                        $(this).css("background-color", "yellowgreen");

                    });


                    $('.mcollapse').hover(function () {
                        $(this).css("background-color", "#ffffff");
                    }, function () {
                        $(this).css("background-color", "#449d44");

                    }).click(function () {

                        console.log($(this).css('font-weight'));
                        if ($(this).css('font-weight') === '700') {
                            $(this).css({
                                'font-weight': 'normal',
                                'background-color': '#ffffff'
                            });
                        } else {
                            $(this).css({
                                'font-weight': 'bold',
                                'background-color': '#449d44'
                            });
                        }
                        $(this).next().toggle('slow');
                    });
                });
            </script>
    </body>
</html>
