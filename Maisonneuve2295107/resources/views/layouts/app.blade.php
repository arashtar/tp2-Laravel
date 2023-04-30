<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
        @php $lang =  session('locale') @endphp
        <a class="navbar-brand" href="#">@lang('lang.text_hello') {{ Auth::user()->name ?? 'Guest'  }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="container px-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('etudiant.index')}}">Etudiant</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('etudiant.create')}}">Ajouter</a></li>
                    </ul> -->
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
                @guest
                <a class="nav-link" href="{{route('auth.create')}}">@lang('lang.text_register')</a>
                <a class="nav-link" href="{{route('login')}}">@lang('lang.text_login')</a>
                @else
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('etudiant.index')}}">@lang('lang.text_students')</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{route('etudiant.create')}}">Ajouter</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{route('article.index')}}">Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.list')}}">@lang('lang.text_users')</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="{{route('repertoire.page')}}">@lang('lang.text_repertoire')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">@lang('lang.text_logout')</a></li>
                        
                </ul>
                <!-- <a class="nav-link" href="{{route('user.list')}}">@lang('lang.text_users')</a>
                <a class="nav-link" href="{{route('etudiant.index')}}">@lang('lang.text_students')</a>
                <a class="nav-link" href="{{route('logout')}}">@lang('lang.text_logout')</a> -->
                @endguest
                <a class="nav-link @if($lang=='fr') text-primary @endif" href="{{route('lang', 'fr')}}">Français <i class="flag flag-france"></i></a>
                <a class="nav-link @if($lang=='en') text-primary @endif" href="{{route('lang', 'en')}}">English <i class="flag flag-united-states"></i></a>
        </div>
        </div>
            </div>
        </div>
        </nav>
        
<div class="body">
    <div class="container">
        @if(session('success'))
        <div class="row justify-content-center mt-2 mb-1">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show">{{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        @yield('content')
    </div>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</html>
