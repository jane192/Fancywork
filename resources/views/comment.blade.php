@extends('layouts.base') @section('content')
<div class="contact gallery3">

    <h2 class="head">Отзывы</h2>

    <div class="center ">
        <form method = "post" action = "{{asset('comment/add')}}" class="form" >
            <input type = "text" name = "name" id="name" placeholder = "ваше имя">
            <textarea name = "discription" id="discription" placeholder = "ваш отзыв"></textarea>
            <input type = "submit" class="but2 button but3" value = "Отправить">
            {!!csrf_field()!!}
        </form>
    </div>
    @foreach ($comments as $one)
        <div class="reviews">
            <div class="review_name">
                {{$one->name}}
            </div>
            <div class="review_text">
                {{$one->discription}}
            </div>
        </div>
    @endforeach

</div>


@endsection