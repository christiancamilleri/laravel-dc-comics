@extends('layouts.main-layout')


@section('content')


<main>

<div class="container create-section">

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      @method('PUT')
  
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="{{$comic->title}}">
      </div>
  
      <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea id="description" name="description">{{$comic->description}}</textarea>
      </div>
  
      <div class="mb-3">
        <label for="thumb">Thumb</label>
        <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
      </div>
  
      <div class="mb-3">
        <label for="price">Prezzo:</label>
        <input type="text" id="price" name="price" value="{{$comic->price}}">
      </div>
  
      <div class="mb-3">
        <label for="series">Serie</label>
        <input type="text" id="series" name="series" value="{{$comic->series}}">
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Data uscita</label>
        <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
      </div>
  
      <div class="mb-3">
          <label for="type">Genere</label>
          <input type="text" id="type" name="type" value="{{$comic->type}}">
        </div>
  
        <div class="mb-3">
          <label for="artists">Artista</label>
          <input type="text" id="artists" name="artists" value="{{$comic->artists}}">
        </div>
  
        <div class="mb-3">
          <label for="writers">Scrittore</label>
          <input type="text" id="writers" name="writers" value="{{$comic->writers}}">
        </div>
  
      <button class="btn btn-primary my-btn" type="submit">Salva</button>
    </form>
  
  </main>
</div>


@endsection