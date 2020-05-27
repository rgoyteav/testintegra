<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />  
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>