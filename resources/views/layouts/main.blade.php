<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Управляющая компания Счастье">
  <meta name="keywords" content="Управляющая компания Счастье">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('robots')
  <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}" type="image/x-icon">
  <title>@yield('title', config('app.name') )</title>
  @vite(['resources/sass/main.scss', 'resources/js/main.js'])
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="top-menu">
        <ul class="menu">
          <li class="menu-item">
            <a href="/#about-section">О компании</a>
          </li>
          <li class="menu-item">
            <a href="/houses">Жилой фонд</a>
          </li>
          <li class="menu-item">
            <a href="/uslugi">услуги</a>
          </li>
          <li class="menu-item">
            <a href="/novosti">новости</a>
          </li>
          <li class="menu-item">
            <a href="/kontakty">контакты</a>
          </li>
        </ul>
      </div>
    </div>
        
  </header>
  
  @yield('content')

  <footer class="footer">
    <div class="container">
      <a href="/politika-konfidencialnosti">Политика конфиденциальности</a>
    </div>
  </footer>

</body>
</html>
