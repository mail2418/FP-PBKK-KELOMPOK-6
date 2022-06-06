<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <title>{{ __('home.El-Tavi Studio') }}</title>
    <link rel="stylesheet" type="text/css" href="css/home-style.css">
  </head>
  <body>
      <!-- Language Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                @php $locale = session()->get('locale'); @endphp
                <div>
                    @switch($locale)
                        @case('en')
                        English
                        @break
                        @case('id')
                        Indonesia
                        @break
                        @default
                        English
                    @endswitch
                </div>

                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="route('setLocale', 'en')">English</a>
              <a class="dropdown-item" href="route('setLocale', 'id')">Indonesia</a>
            </div>
          </div>
        <x-slot name="content">        
            <x-dropdown-link :href="route('setLocale', 'en')">
                {{ __('English') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('setLocale', 'id')">
                {{ __('Indonesia') }}
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
</div>
    <div class="container">
        <div class="pattern"></div>
        <div class="nav">
            <div class="menu">
                <ul>
                    <li><a href="#">{{ __('home.Home') }}</a></li>
                    <li><a href="schedule">Jadwal</a></li>
                    <li><a href="profile">Profil</a></li>
                    <li><a href="login">Login</a></li>
                    
                </ul>
            </div>
        </div>

        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>

        <div class="title-1">El-Tavi</div>
        <div class="title-2">Studio</div>

        {{-- <div class="player">
            <img src="img/football.png" alt="">
        </div> --}}

        <div class="content">
            <p>Studio musik ini berlokasi di Jalan Kenjeran No.97, Kenjeran Baru, Kota Surabaya, Jawa Timur, 60132, Indonesia</p>
            <button>Hubungi Sekarang</button>
        </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/js/home-script.js"></script>
</body>
</html>
