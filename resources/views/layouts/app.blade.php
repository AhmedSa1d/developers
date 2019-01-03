<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Developers') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
              <img src="{{ asset('images/dev_logo.png') }}" width="140" height="40">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item is-tab is-hidden-mobile m-l-30"> Learn   </a>
              <a class="navbar-item is-tab is-hidden-mobile"> Discuss </a>
              <a class="navbar-item is-tab is-hidden-mobile"> Share   </a>
            </div>


              

            <div class="navbar-end m-r-30">

                @if(Auth::guest())

                  <div class="navbar-item">
                    <div class="buttons">
                      <a class="button is-primary">
                        <strong>Sign up</strong>
                      </a>
                      <a class="button is-light">
                        Log in
                      </a>
                    </div>
                  </div>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">{{ Auth::user()->name }}</a>

                        <div class="navbar-dropdown">
                          <a class="navbar-item"> Profile </a>
                          <a class="navbar-item"> Notifications </a>
                          <a class="navbar-item"> Settings </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>
                      </div>
                    </div>


                @endif


          </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
