@extends('layouts.main-layout')


@section('content')


<main>

<div class="container create-section">

    <form action="{{route('comics.store')}}" method="POST">
      @csrf
  
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title">
      </div>
  
      <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea id="description" name="description"></textarea>
      </div>
  
      <div class="mb-3">
        <label for="thumb">Thumb</label>
        <input type="text" id="thumb" name="thumb">
      </div>
  
      <div class="mb-3">
        <label for="price">Prezzo:</label>
        <input type="text" id="price" name="price">
      </div>
  
      <div class="mb-3">
        <label for="series">Serie</label>
        <input type="text" id="series" name="series">
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Data uscita</label>
        <input type="text" id="sale_date" name="sale_date">
      </div>
  
      <div class="mb-3">
          <label for="type">Genere</label>
          <input type="text" id="type" name="type">
        </div>
  
        <div class="mb-3">
          <label for="artists">Artista</label>
          <input type="text" id="artists" name="artists">
        </div>
  
        <div class="mb-3">
          <label for="writers">Scrittore</label>
          <input type="text" id="writers" name="writers">
        </div>
  
      <button class="btn btn-primary my-btn" type="submit">Aggiungi</button>
    </form>
  
  </main>
</div>


@endsection