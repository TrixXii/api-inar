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
            margin: 0;
            padding: 0;
            background: linear-gradient(#333, rgba(0, 0, 0, 0.5)), url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c83c004e-1370-4756-88e5-4071de797088/dfredg5-0a60e875-646e-4d6c-bb91-73086f012808.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M4M2MwMDRlLTEzNzAtNDc1Ni04OGU1LTQwNzFkZTc5NzA4OFwvZGZyZWRnNS0wYTYwZTg3NS02NDZlLTRkNmMtYmI5MS03MzA4NmYwMTI4MDguZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.LGN_eGL7dT0xRj4oRbyRRVay-pHbyiXHru7YoVPcRro');
            background-size: cover;
        }

    h1{
      margin: 0;
      padding: 16px;
    }
    
    nav {
      background-color: #333;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      display: inline-block;
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    nav ul li.active a {
      background-color: #555;
    }

    nav .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav .logout-link {
      background-color: #dc3545;
    }

    nav .logout-link:hover {
      background-color: #c82333;
    }

    .form-group {
    
        margin-bottom: 20px;
        animation: slideInDown 0.5s ease-in-out;
    }

    .form-control {
        width: 300px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 5px 10px;
        font-size: 16px;
        animation: slideInRight 0.7s ease-in-out;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 5px;
        border: none;
        background-color: #337ab7;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
        animation: fadeIn 0.5s ease-in-out;
    }

    .btn:hover {
        background-color: #23527c;
    }

    @keyframes slideInDown {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        0% {
            transform: translatey(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
   

    #pelise{
      padding: 16px;
      background-color: silver;
      text-align: center;
    }

    .info {
      justify-content: center;
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding-top: 20px;
    }

    .movie {
      background-color: #f5f5f5;
      padding: 20px;
      margin-bottom: 10px;
      width: 250px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #23527c;
    }

    .movie h1 {
      font-size: 20px;
      margin-bottom: 10px;
      height: 30px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .movie img {
      width: 100%;
      height: 310px;
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
      <li><a href="/bySearchMovies">Search movies</a></li>
      <li><a href="/bySearchSeries">Search Series</a></li>

      <li><a href="/logout">Cerrar Sesion </a></li>
    </ul>
  </nav>
  <div class="container">
    
    @yield('content')

  </div>
  @yield('scripts')
</body>

</html>