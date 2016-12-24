<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ elixir('css/app.css')}}">
  <title>Laracasts</title>
  @yield('header')
</head>
<body>
  @yield('content')

  @yield('footer')
</body>
</html>