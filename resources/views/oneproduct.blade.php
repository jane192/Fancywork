@extends('layouts.base') @section('content')

    <div class="gallery3">

        <h2 class="head" id="name1" name="name1" >{{$products->name}}</h2>
        <img class="image" id="picture1" name="picture1" src="{{asset('image/'.$products->picture)}}" alt="{{$products->name}}">

            <p class="indent" id="size1" name="size1">Размер:{{$products->size}}</p>
            <p class="price" id="price1" name="price1">Цена: {{$products->price}}</p>

        {{--<form class= forma method="post" class = "form2" action="{{asset('/basket')}}">
            {!!csrf_field()!!}
            <input type="number" name="count" value="1" steep="1" min="0">
            <button type="submit" class="button but2">Заказать</button>
        </form>--}}

                             </div>

@endsection