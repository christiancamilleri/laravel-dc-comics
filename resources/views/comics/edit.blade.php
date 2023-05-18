@extends('layouts.main-layout')


@section('content')


<main>

  {{-- @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
      @endforeach
    </ul>

  </div>

  @endif --}}

<div class="container create-section">

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      @method('PUT')
  
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ??  $comic->title}}" required>
        @error('title')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ??  $comic->description}}</textarea>
        @error('description')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
        <label for="thumb">Thumb</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ??  $comic->thumb}}" required>
        @error('thumb')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
        <label for="price">Prezzo:</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ??  $comic->price}}" required>
        @error('price')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
        <label for="series">Serie</label>
        <input  class="form-control @error('series') is-invalid @enderror"type="text" id="series" name="series" value="{{old('series') ??  $comic->series}}" required>
        @error('series')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Data uscita</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ??  $comic->sale_date}}" required>
        @error('sale_date')
        <div class="invalid-feedback">
         {{$message}}
        </div>
       @enderror
      </div>
  
      <div class="mb-3">
          <label for="type">Genere</label>
          <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ??  $comic->type}}" required>
          @error('type')
          <div class="invalid-feedback">
           {{$message}}
          </div>
         @enderror
        </div>
  
        <div class="mb-3">
          <label for="artists">Artista</label>
          <input class="form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists" value="{{old('artists') ??  $comic->artists}}" required>
          @error('artists')
          <div class="invalid-feedback">
           {{$message}}
          </div>
         @enderror
        </div>
  
        <div class="mb-3">
          <label for="writers">Scrittore</label>
          <input class="form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers" value="{{old('writers') ??  $comic->writers}}" required>
          @error('writers')
          <div class="invalid-feedback">
           {{$message}}
          </div>
         @enderror
        </div>
  
      <button class="btn btn-primary my-btn" type="submit">Salva</button>
    </form>
  
  </main>
</div>


@endsection