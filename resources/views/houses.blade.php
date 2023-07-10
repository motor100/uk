@section('title', 'Жилой фонд')

@extends('layouts.main')

@section('content')

  <div class="houses">
    <div class="container">
      @foreach($houses as $house)
        <p>
          <a href="/houses/{{ $house->slug }}">{{ $house->address }}</a>
        </p>
      @endforeach
    </div>
  </div>

@endsection