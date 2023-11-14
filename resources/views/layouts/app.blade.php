<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page-title')</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="dashboard">
            <div class="row gx-0">
                <div class="asside text-center col-2">
                    <div class="lg_asside">
                        <div class="py-4">
                            <img class="w-75" src="/storage/img/logo1.png" alt="">
                        </div>
                        <div class="asside_menu py-5">
                            <div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Statistics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Sondaggi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
            
                                    <button type="submit" class="btn btn-outline-danger">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sm_asside">
                        A
                    </div>
                </div>
                <div class="main col-10">
                    <div>
                        <main>
                            @yield('main-content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
