{{-- <!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Add links here -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <!-- Add sidebar links here -->
                            <!-- resources/views/layouts/app.blade.php -->

                            <!-- Add the following inside the <ul class="nav flex-column"> in the sidebar section -->
                            @if (Auth::user()->roles->contains('label', 9))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('super-admin.dashboard') }}">Super Admin
                                        Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 8))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 7))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('operation-manager.dashboard') }}">Operation
                                        Manager Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 6))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('quality-manager.dashboard') }}">Quality Manager
                                        Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 5))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('quality-team.dashboard') }}">Quality Team
                                        Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 4))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('operation-team.dashboard') }}">Operation Team
                                        Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 3))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('assistant-manager.dashboard') }}">Assistant
                                        Manager Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 2))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('team-leader.dashboard') }}">Team Leader
                                        Dashboard</a>
                                </li>
                            @endif
                            @if (Auth::user()->roles->contains('label', 1))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent.dashboard') }}">Agent Dashboard</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemlix</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Pemlix</a>
                </div>
            </div>
            <ul class="sidebar-nav">


                <!-- Role-based links -->
                @if(Auth::user()->roles->contains('label', 9))
                <li class="sidebar-item">
                    <a href="{{ route('super-admin.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Super Admin Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('super-admin.dashboard.user_password') }}" class="sidebar-link">
                        <span>Users Password</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 8))
                <li class="sidebar-item">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Admin Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 7))
                <li class="sidebar-item">
                    <a href="{{ route('operation-manager.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Operation Manager Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 6))
                <li class="sidebar-item">
                    <a href="{{ route('quality-manager.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Quality Manager Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 5))
                <li class="sidebar-item">
                    <a href="{{ route('quality-team.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Quality Team Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 4))
                <li class="sidebar-item">
                    <a href="{{ route('operation-team.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Operation Team Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 3))
                <li class="sidebar-item">
                    <a href="{{ route('assistant-manager.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Assistant Manager Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 2))
                <li class="sidebar-item">
                    <a href="{{ route('team-leader.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Team Leader Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->roles->contains('label', 1))
                <li class="sidebar-item">
                    <a href="{{ route('agent.dashboard') }}" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Agent Dashboard</span>
                    </a>
                </li>
                @endif

                <!-- Common links for all users -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Task</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{ route('logout') }}" class="sidebar-link" >
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            {{-- <div class="text-center">
                <h1>
                    Sidebar Bootstrap 5
                </h1>
            </div> --}}
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
