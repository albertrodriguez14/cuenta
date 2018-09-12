<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{asset('asset/css/sb-admin.css')}}" rel="stylesheet">
    @yield('styles')
    
</head>
<body>
        <div id="wrapper"> 
                           <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}<span class="glyphicon glyphicon-menu-down"></span>
                                    </a>
        
                                    <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                   <span class="glyphicon glyphicon-log-in"> Logout </span>
                                                </a> 
        
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                    </ul>
                                </li>
                          
                        </ul>
                    </div> <!--fin container-->
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <a href="{{route('home')}}"><i class="glyphicon glyphicon-th"></i> Dashboard</a>
                            </li>
                            
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-tasks"></i> Empresa <i class="glyphicon glyphicon-menu-down"></i></a>
                                <ul id="demo" class="collapse">
                                    <li>
                                        <a href="{{route('enterprise.index')}}">crear empresa</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="active">
                                <a href="{{route('acount.index')}}"><i class="glyphicon glyphicon-tasks"></i> Cuentas</a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
              
                @endguest
                </ul>
                </div>
                </div>
            </nav>
            <!-- /#wrapper -->
            @yield('content') 
            </div>
          
    <!-- Scripts -->
    <script src="{{ asset('asset/js/app.js') }}"></script>
     @yield('script')
   
</body>
</html>
