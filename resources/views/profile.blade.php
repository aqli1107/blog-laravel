<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Profile</title>

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>
  <body>
    {{-- Navbar --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Aqli Hamdan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('home')}}">Home</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('profile')}}">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('portofolio')}}">Portofolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('artikel')}}">Artikel</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('galery')}}">Gallery</a>
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
      {{-- Tutup Nav --}}


<main role="main" class="container">
  <div class="awal">
    <div class="blog-main">
      <h2 class="pb-3 mb-4 font-italic border-bottom">
        Hello There!
      </h2>

      <div class="blog-post">
        <h2 class="blog-post-title">About me</h2>
        <p class="blog-post-meta">January 26, 2018 by <a href="#">Aqli Hammdan</a></p>
        <hr>
      <div class="text-center">  
        <img src="{{ asset('image/hammdan.jpg')}}" width="25%" class="mb-4">
      </div>

        
      </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->
    <p class="text-center">Perkenalkan nama saya, <b>Aqli Hammdan</b>. Saya adalah web developer yang masih amateur yang belajar untuk menjadi web developer handal. Saya murid kelas XI di SMK Taruna Bhakti Depok. Jurusan saya yaitu Rekayasa Perangkat Lunak. Saya lahir di Jakarta, pada tanggal 11 Juli 2002. Jadi umur saya sekarang adalah 16 tahun. Hobby saya adalah bermain, dan berolahraga.Saya 3 bersaudara, dan saya adalah anak laki satu-satunya di keluarga saya. Saya tinggal di Bukit Cengkeh 1, Kelurahan Tugu, Kecamatan Cimanggis, Kota Depok.</p>
  </div><!-- /.row -->
</main><!-- /.container -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.17537770592!2d106.85478301397188!3d-6.371345264096224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec7b17aa2b47%3A0xb717e64c5f2dff2c!2sJl.+Dili%2C+Tugu%2C+Cimanggis%2C+Kota+Depok%2C+Jawa+Barat+16451!5e0!3m2!1sid!2sid!4v1549009049986" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="text-center">
<footer class="card-footer bg-dark">
  <p class="mt-3" style="color:white">Copyright &copy Aqli Hamdan</p>
</footer>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
