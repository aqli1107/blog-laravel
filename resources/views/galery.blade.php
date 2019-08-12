<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Artikel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aqli Hamdan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('portofolio')}}">Portofolio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('artikel')}}">Artikel</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ url('galery')}}">Gallery <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ url('dahboard')}}" class="dropdown-item" style="margin-left: 0 px;">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </nav>


<main role="main" class="container">
    <div class="blog-main">
      <h1 class="mt-4 mb-4 border-bottom">
        Gallery
      </h1>
      @foreach($galleries as $galery)
      <div class="card" style="width: 18rem;">
        <img src="{{url('gallery/'.$galery->foto)}}" class="card-img-top" alt="..." width="  100%">
        <div class="card-body">
          <p class="card-text">{{$galery['judul']}}</p>
        </div>
      </div>
      @endforeach
      <br>
      

    </div><!-- /.blog-main -->

    <p>
        <a href="#">Back to top</a>
    </p>
</main><!-- /.container -->
<div class="text-center">
        <footer class="card-footer bg-dark">
          <p class="mt-3" style="color:white">Copyright &copy Aqli Hamdan</p>
        </footer>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
