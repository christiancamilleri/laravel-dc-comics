@extends('layouts/main-layout')

@section('content')

<main>
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2 card-container">
                <div class="img-container">
                    <img class="comic-cover" src="{{$comic['thumb']}}" alt="">
                </div>
              <span><a href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a></span> 
            </div>
            @endforeach

        </div>

        <div class="btn">
            <button class="btn-primary">
                LOAD MORE
            </button>
            <button class="btn-primary my-create">
                <a href="{{route('comics.create')}}">ADD COMIC</a> 
            </button>
        </div>
    </div>
</main>

<div class="shop-section">
    <div class="container">
        <ul>
            
            <li>
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                <a href="#">Digital Comics</a>
            </li>

            <li>
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                <a href="#">DC Merchandise</a>
            </li>

            <li>
                <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                <a href="#">Subscription</a>
            </li>

            <li>
                <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                <a href="#">Comic Shop Locator</a>
            </li>

            <li>
                <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                <a href="#">DC Power Visa</a>
            </li>

            
            

            

        </ul>
    </div>
</div>


@endsection