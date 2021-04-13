@php
    $nav_links = [
        [
            'name' => 'Home',
            'route' => route('home'),

        ],

        [
            'name' => 'Buscar',
            'route' => route('buscar'),

        ]
];

@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
                              @guest
                              @if (Route::has('login'))
                              <div class="ml-auto" style="max-height: 100px;">
                                <a class="text-sm mr-2 text-light underline" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                              @endif

                              @if (Route::has('register'))
                                <a class="text-sm text-light underline" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                              @endif
                            </div>
                          @else

                          <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">

                                @foreach ($nav_links as $nav_link)
                                <li class="nav-item">

                                <a class="nav-link {{request()->is('*'.strtolower($nav_link['name']).'*')? 'active text-info':''}}" href="{{ $nav_link['route'] }}">
                                    {{ $nav_link['name'] }}
                                </a>

                                </li>

                                @endforeach
                         </ul>

                     <form id="logout-form" class="d-flex" action="{{ route('logout') }}" method="POST">
                            <div class="nav-item d-flex">
                                <span class="nav-link text-info">
                                     {{ Auth::user()->name }}
                                </span>

                            <a class="btn text-danger btn-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fas fa-power-off" style="font-size: 2em;"></i></a>
                        @csrf
                    </form>
                </div>

              @endguest
        </div>
    </div>
</nav>
