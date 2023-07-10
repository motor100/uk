@section('title', 'Главная')

@extends('layouts.main')

@section('content')
  <div class="main-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <p>111</p>
        </div>
      </div>
    </div>
  </div>

  <div id="about-section" class="about-section">

  </div>

  <div class="houses-section">

  </div>

  <div id="services-section" class="services-section">
    <div class="container">
      <div class="row">
        @foreach($services as $service)
          <div class="col-md-3">
            <div class="services-item">
              <div class="services-item__image">
                <img src="{{ Storage::url($service->image) }}" alt="">
              </div>
              <div class="services-item__title">{{ $service->title }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="combine-section">
    <div class="news combine-section-item">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="combine-section-image">
              <img src="{{ Storage::url($mainnew->image) }}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="combine-section-text">
              <div class="section-subtitle">Последние новости</div>
              <div class="date">{{ $mainnew->created_at->format('d.m.Y') }}</div>
              <div class="excerpt">{{ Str::words(strip_tags($mainnew->text), 40) }}</div>
              <div class="see-all">
                <a href="/mainnews" class="see-all__link">Все новости</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonials combine-section-item">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="combine-section-text">
              <div class="section-subtitle">Отзывы жильцов</div>
              <div class="date">{{ $testimonial->created_at->format('d.m.Y') }}</div>
              <div class="excerpt">{{ Str::words(strip_tags($testimonial->text), 40) }}</div>
              <div class="see-all">
                <a href="/testimonials" class="see-all__link">Все отзывы</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="combine-section-image">
              <img src="{{ Storage::url($mainnew->image) }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contacts-section">

  </div>

@endsection