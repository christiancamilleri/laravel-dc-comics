@extends('layouts/main-layout')

@section('content')

<div class="banner-blue">
    <div class="container">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-start thumb-img" alt="...">
    </div>
</div>

<div class="container">
    <div class="card mb-3 border border-0" >
        <div class="row g-0 d-flex align-items-center">

          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <div class="container banner-card-verde d-flex justify-content-between align-items-center">
                    <div>
                        U.S. Price: {{ $comic->price }}
                    </div>
                    <div class="d-flex gap-4" >
                        <span class="">Aviable</span> <span>Check Aviability </span>
                    </div>
                </div>
              <p class="card-text">{{ $comic->description }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">Advertisement</div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
    </div>
    <div>
        <div class="container d-flex gap-3">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <th class="border border-0">Talent</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th >Art by:</th>
                            <td >
                                <a href="">{{$comic->artists}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Written by:</td>
                            <td>
                                <a href="">{{$comic->writers}}</a>  
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 ">
                <table class="table">
                    <thead>
                        <th class="border border-0">Specs</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Series:</td>
                            <td> {{ $comic->series}} </td>
                        </tr>
                        <tr>
                            <td>U.S. Price:</td>
                            <td>{{ $comic->price }}</td>
                        </tr>
                        <tr>
                            <td>On Sale Date:</td>
                            <td>{{ $comic->sale_date }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button class="btn btn-primary my-create"><a href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a> </button>
</div>

@endsection