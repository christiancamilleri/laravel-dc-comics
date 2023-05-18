@extends('layouts.main-layout')


@section('content')


<main>

  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
      @endforeach
    </ul>

  </div>

  @endif

<div class=" create-section">

    <form action="{{route('comics.store')}}" method="POST" class="my-form">
      @csrf
  
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" required value="{{old('title')}}">

        @error('title')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <labe  for="description">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{old('description')}}</textarea>
        @error('description')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror


      </div>
  
      <div class="mb-3">
        <label for="thumb">Thumb</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" required  value={{old('thumb')}}>
        @error('thumb')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="price">Prezzo:</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" required  value={{old('price')}}>
        @error('price')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="series">Serie</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" required value={{old('series')}}>
        @error('series')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Data uscita</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date"  required value={{old('sale_date')}}>
        @error('sale_date')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
      </div>
  
      <div class="mb-3">
          <label for="type">Genere</label>
          <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" required value={{old('type')}} >
          @error('type')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
        </div>
  
        <div class="mb-3">
          <label for="artists">Artista</label>
          <input class="form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists" required value={{old('artists')}}>
          @error('artists')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
        </div>
  
        <div class="mb-3">
          <label for="writers">Scrittore</label>
          <input class="form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers" required  value={{old('writers')}}>
          @error('writers')
         <div class="invalid-feedback">
          {{$message}}
         </div>
        @enderror
        </div>
  
      <button class="btn btn-primary my-btn" type="submit">Aggiungi</button>
    </form>
  
  </main>
</div>


@endsection