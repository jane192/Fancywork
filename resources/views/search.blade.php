@extends('layouts.base') @section('content')
    <div class="gallery2">
        <h2 class="head">Поиск. На ваш запрос найдено:</h2>

            @foreach ($products as $one)

                <div align="center">
                    <p><a class="search" href="{{asset('products/'.$one->id)}}">{{$one->name}}</a></p>

                </div>
            @endforeach
    </div>
@endsection
