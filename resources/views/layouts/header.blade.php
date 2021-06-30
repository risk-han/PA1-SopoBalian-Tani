<div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ccffe6;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                <img width="150px" class="circular--square" src="{{ asset('image/logo.jpg') }}" alt="SopoBalian Tani">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                                
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('MENDAFTAR') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">BERANDA</a>
                            </li>
                            @can('buy-product')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hasiltani.index') }}">HASIL TANI</a>
                            </li>
                            @endcan
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}">FORUM DISKUSI</a>
                            </li>
                            @can('manage-info')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('infos.index') }}">{{ __('KELOLA INFORMASI') }}</a>
                            </li>
                            @endcan
                            @can('manage-product')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">{{ __('KELOLA HASIL TANI') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hasiltani.index') }}">DAFTAR TAWARAN</a>
                            </li>
                            @endcan
                            <li class="nav-item dropdown">
                                <a style="text-transform: uppercase;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>