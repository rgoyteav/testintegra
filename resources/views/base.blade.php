<?php 
use Illuminate\Support\Facades\Auth;
if (Auth::check()){

?>
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


<?php 
}
else
{
	?>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
@guest
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@else
    <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <div class="" aria-labelledby="">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endguest
<?php 
} ?>
</body>
</html>