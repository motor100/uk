@section('title', $house->address)

@extends('layouts.main')

@section('content')

  <div class="house">
    <div class="container">
      <p>{{ $house->address }}</p>
      <div class="image">
        <img src="{{ Storage::url($house->image) }}" alt="">
      </div>
      <p>{!! $house->description !!}</p>
    </div>
  </div>

  <style>
    .image {
      width: 200px;
    }
    .image img {
      width: 100%;
    }
  </style>

@endsection