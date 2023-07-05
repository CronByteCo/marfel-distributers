<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <div id="app">

        <header class="px-3 bg-white">
            <div class="">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="{{ asset('images/logo.png') }}" width="150" alt="">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-2 justify-content-center mb-md-0">
                        {{-- <li>{{ Auth::user()->email }}</li> --}}
                        {{-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li> --}}
                    </ul>

                    <div>
                        <a type="button" href="{{ route('logout') }}"
                            class="d-inline-flex align-items-center btn btn-outline-danger me-2"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1h-1z" />
                                <path
                                    d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                            </svg>
                            <span class="mx-2">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <header class="p-3 bg-dark text-white">
            <div class="">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <div class="mx-3">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->username }} --}}
                        </a>

                        {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div> --}}
                    </div>

                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-2 justify-content-center mb-md-0">
                        <li>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</li>
                        {{-- <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li> --}}
                    </ul>

                    <ul class="nav col-12 col-lg-auto mb-2 mx-2 justify-content-center mb-md-0">
                        <li>
                            @if (!request()->routeIs('cart'))
                                <livewire:cart.show />
                            @endif
                        </li>
                        <li><a href="{{ route('categories') }}" class="nav-link px-2 text-white">Categories</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">List</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Orders</a></li>
                    </ul>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control form-control-dark" placeholder="Search..."
                            aria-label="Search">
                    </form>
                </div>
            </div>
        </header>

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire({
                icon: e.detail.icon,
                title: e.detail.title,
                text: e.detail.text,
                html: e.detail.html,
                width: e.detail.hasOwnProperty('width') ? e.detail.width : 400,
                confirmButtonColor: '#1B3B31',
                timer: e.detail.hasOwnProperty('timer') ? e.detail.width : 3000,
                timerProgressBar: true,
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
