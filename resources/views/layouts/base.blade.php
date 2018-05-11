<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Готовые вышивки</title>
    @section('styles')
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


        <script src="{{asset('js/delete.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        {{--<script>$(function(){


                var fx = {
                    'initModal': function(){
                        if($('.modal-window').length ==0){
                            $('<div>').attr('id','overlay').fadeIn(2000).appendTo('body');
                            $('#overlay').fadeOut(2000,function(){$(this).remove();
                            });
                            return $('<div>').addClass('modal-window').appendTo('body');


                        }else{
                            return $('.modal-window');
                        }

                    }

                }

                $('.link').bind('click',function(){
                    id = $(this).attr('data_id');
                    modal = fx.initModal();
                    console.log(modal);
                    $('<a>').attr('href','#').addClass('model-close-btn').html('&times;').click(function(e){
                        e.preventDefault();
                        console.log('gsgsgs');
                        modal.remove();
                    }).appendTo(modal);
                    $.ajax({
                        url:'menu',
                        type:'post',
                        data:'id='+id,
                        success:function(data) {
                            modal.append(data);
                        },
                        error:function(msg){
                            modal.append(msg);
                        }
                    });

                });
            });</script>--}}
    @show
</head>


<body>
    <header class="header">
        <div class="contacts">
            <form action="{{asset('/search')}}" method="get">
                <input type="search" name="str" placeholder="Поиск...">
                <button type="submit" class="button"><i class=" glyphicon glyphicon-search "></i></button>
            </form>

            <a href="{{asset('/register')}}">Регистрация</a>
            <a href="{{asset('/login')}}">Войти</a>
            {{--<a href="{{asset('/basket')}}" class="basket"><img src="{{asset('Image/photo2.png')}}" alt="корзина"></a>--}}
        </div>
        <div class="logo">
            <a href="{{asset('/')}}"><img src="{{asset('Image/photo1.png')}}" alt="готовые вышивки"></a>
            <h1><a  class="logoa" href="{{asset('/')}}">Готовые вышитые картины</a></h1>
        </div>
        <div class="phones">
            <p>Контакты:VEL +375296864847</p><br>
            <p>Life +375291854055</p>

        </div>

        <div class="categories">

            <a href="{{asset('/')}}" >Главная</a>
            <a href="{{asset('/breads')}}">Бисером</a>
            <a href="{{asset('/threads')}}">Крестом</a>
            <a href="{{asset('/comment')}}">Отзывы</a>
            <a href="{{asset('contacts')}}">Контакты</a>

        </div>
    </header>
    <main>
        <div class="main_menu">
            <a href="{{asset('/')}}">Главная</a>
            <a href="{{asset('/breads')}}">Бисером</a>
            <a href="{{asset('/threads')}}">Крестом</a>
            <a href="{{asset('/comment')}}">Отзывы</a>
            <a href="{{asset('contacts')}}">Контакты</a>
        </div>
        @yield('content')
        {{--<div class="number">
            <ul>
                <li><a href="#"><i class="glyphicon glyphicon-menu-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i></a></li>
            </ul>

        </div>--}}

    </main>
    <footer><small>Copyright</small>
        <div class="mini_menu">
            <a href="{{asset('/')}}">Главная</a>
            <a href="{{asset('/breads')}}">Бисером</a>
            <a href="{{asset('/threads')}}">Крестом</a>
            <a href="{{asset('/comment')}}">Отзывы</a>
            <a href="{{asset('contacts')}}">Контакты</a>

        </div>
    </footer>

</body>

</html>