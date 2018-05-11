@extends('layouts.base') @section('content')
    <div class="gallery">
        <h2 class="head">Вышивки крестом</h2>
        <ul class="main">
            @foreach ($products as $one)
            <li>

                <figure>
                    <p class="main">{{$one->name}}</p>

                    <figcaption><a href="{{asset('products/'.$one->id)}}"><img src="{{asset('image/'.$one->picture)}}" alt=""></a></figcaption>
                    <a href="#" id="link" data_id="{{asset('products/'.$one->id)}}" class="but">Купить</a></figure>
            </li>
@endforeach
        </ul>
    </div>
    <div align="center"  >
        {!!$products->links();!!}
    </div>
  @endsection