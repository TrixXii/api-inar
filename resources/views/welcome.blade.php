<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
    .info {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.movie {
    background-color: #f5f5f5;
    padding: 20px;
    margin-bottom: 10px;
    width: 200px;
}

.movie h1 {
    font-size: 20px;
    margin-bottom: 10px;
}

.movie img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.movie p {
    font-size: 14px;
    color: #888;
}


  </style>
</head>

<body>
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/login-google">Looo</a></li>
      <li><a href="/logout">Irse</a></li>
      <li><a href="/bySearchMovies">Search movies</a></li>
    </ul>
  </nav>
  <div class="container">
    @yield('content')
    
  </div>
  @yield('scripts')
</body>

</html>