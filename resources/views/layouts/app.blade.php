<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @php $currentRoute = Request::route()->getName() @endphp
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @if (Auth::check())
                        <!-- Check active -->
                        @if (Auth::user()->state)
                        @foreach ($navigations as $route => $item)
                        <!-- Check role -->
                        @if (in_array(Auth::user()->state->role->name, $item['role']) || Auth::user()->id == 1)
                        <!-- Check sub-menu -->
                        @if (isset($item['child']))
                        <li class="nav-item dropdown @if ($currentRoute == $route || stristr($currentRoute, $route)) active @endif">
                            <a class="nav-link dropdown-toggle" href="#" id="nav_dropdown_{{ $route }}" role="button" data-toggle="dropdown">{{ $item['name'] }}</a>
                            <div class="dropdown-menu" aria-labelledby="nav_dropdown_{{ $route }}">
                                @foreach ($item['child'] as $child_route => $child_item)
                                    <a href='{{ route($child_route) }}' class="dropdown-item">{{ $child_item }}</a>
                                @endforeach
                            </div>
                        </li>
                        @else
                        <li @if ($currentRoute == $route || stristr($currentRoute, $route)) class="active"@endif>
                            <a class="nav-link" href="{{ route($route) }}">
                                {{ $item['name'] }}
                            </a>
                        </li>
                        @endif
                        @endif
                        @endforeach

                        @else
                        <span class="navbar-text">No Workspace</span>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} [ {{ Auth::user()->name }} ]
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <!-- Check active -->
                            @if (Auth::user()->state)
                            <li class="nav-item dropdown">
                                <a id="currentWorkspace" class="nav-link dropdown-toggle btn btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->state->role->name }} _at_ {{ Auth::user()->state->workspace->name }}</a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="currentWorkspace">
                                @foreach(Auth::user()->workspaces as $workspace)
                                    <a class="dropdown-item">
                                    {!! Form::open(['method' => 'PUT', 'route' => ['workspaces.setCurrent', $workspace->id, Auth::user()->id, Auth::user()->role($workspace->id)->id] ]) !!}
                                    {!! Form::button(Auth::user()->role($workspace->id)->name . ' _at_ ' . $workspace->name, ['type' => 'submit', 'class' => 'btn btn-link']) !!}
                                    {!! Form::close() !!}
                                    </a>
                                @endforeach
                                </div>
                            </li>
                            @else
                            <span class="navbar-text">No Workspace</span>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if(Session::has('flash_message'))
            <div class="container">
                <div class="alert custom alert-info">
                    <i class="icon-flash"></i> <em> {!! session('flash_message') !!}</em>
                </div>
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
