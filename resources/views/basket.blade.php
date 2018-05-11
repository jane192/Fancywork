@extends('layouts.base')

@section('content')
<div class="gallery3">


    <h2 class="head">Выбранные товары</h2>
    <table class="table table-bordered table-striped" width="100%">
        <tr>
            <td width="200px">Товар</td>
            <td>Название</td>
            <td>Количество</td>
            <td>Цена</td>
            <td>Сумма</td>
            <td>Действие</td>
        </tr>
        @foreach($baskets as $one)
        <tr>
            <td width="200">
                <a href="#"><img
                            src="image/{{$one->picture}}" alt="{{$one->name}}" width=200px></a>

            </td>
            <td>{{$one->title}}</td>
            <td>{{$one->price}}</td>
            <td>{{$one->price}}</td>
            <td><{{$one->amount}}/td>
            <td><a href="#" class="btn btn-default" onClick="delete_position('/basket/delete/{{$one->id}}','Вы действительно хотите удалить?')">Удалить</a></td>
        </tr>
        @endforeach


    </table>
    <form method="post" id="contactform" name="send-contact" class = "form3" enctype = "multipart/form-data" action="{{asset('/order')}}">
        {{ csrf_field() }}
        <button type="submit" class="but2 button">Подтвердить</button></form>
</div>
    @endsection
