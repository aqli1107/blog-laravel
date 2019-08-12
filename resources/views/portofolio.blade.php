<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Portofolio</title>
  </head>
  <body>
  	<!-- NAVBAR -->
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
      <li class="nav-item">
      <a class="nav-link" href="{{ url('profile')}}">Profile</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{ url('portofolio')}}">Portofolio <span class="sr-only">(current)</span></a>
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
<!-- TUTUP NAV -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/bg.jpg); background-size: 100%;" id="home"	>
  <div class="container text-center mt-4">
  	<img src="{{ asset('image/myAvatar.png')}}" width="20%">
    <h1 class="display-4" style="color: white;">Aqli Hammdan</h1>
    <p class="lead" style="color: white;">Web Developer</p>
  </div>
</div>
<!-- Tutup Jumbo -->

<!-- kontent -->
<div class="container">
  <div class="row text-center justify-content-center">
    <div class="col-md-3 text-secondary">
      <img src="{{asset('image/html5.png')}}" width="20%">
      <i class="fab fa-html5"></i>
      <h1 class="mb-3 mt-3">HTML</h1>
      <p>HTML5 adalah suatu spesifikasi atau standard yang dikeluarkan oleh W3C (World Wide Web Consortium) sebagai revisi dari standard HTML. Saat ini ditulis kita banyak menjumpai aplikasi web yang masih menggunakan standard HTML4 namun beberapa sudah mulai migrasi ke standard web HTML5.</p>
    </div>
    <div class="col-md-3 text-secondary">
      <img src="{{asset('image/css.png')}}" width="20%">
      <h1 class="mb-3 mt-3">CSS</h1>
      <p>CSS kependekan dari Cascading Style Sheet. CSS merupakan kumpulan kode-kode yang bertujuan untuk menghias dan mengatur gaya tampilan/layout halaman web supaya lebih elegan dan menarik. CSS adalah sebuah teknologi internet yang direkomendasikan oleh World Wide Web Consortium.</p>
    </div>
    <div class="col-md-3 text-secondary">
      <img src="{{asset('image/javascript.png')}}" width="20%">
      <h1 class="mb-3 mt-3">JavaScript</h1>
      <p>Javascript adalah adalah bahasa pemrograman tingkat tinggi dan dinamis.JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer (IE), dan Mozilla Firefox. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.</p>
    </div>
  </div>
  <hr class="my-5">
</div>
<!-- tutupkontent -->

<!-- konten1 -->
<div class="container text-center" id="about">
    <h1 class="display-4" >About Me</h1>
    <p class="lead">Nama saya Aqli Hamdan, biasa di panggil Aqli. Saya lahir di Jakarta, 11 - Juli - 2002. Umur saya 16 tahun. Saya anak ke-2 dari 3 bersaudara. Saya bersekolah di SMK Taruna Bhakti, Depok. Jurusan Rekayasa Perangkat Lunak.</p>
 </div>
<!-- Tutupkonten1 -->
 <hr class="my-5">
<!-- konten2 -->
<div class="container text-center" id="expe">
    <h1 class="display-4">Experience</h1>
    <p class="lead">Ketika H-4 Ujian Nasional tingkat SD, di pagi hari rambut saya di cukur oleh ayah saya, seperti anak Rock, sesudah dicukur, saya bercermin dan melihat muka saya, ternyata saya tidak begitu cocok dengan cukuran seperti itu, tetapi temen saya banyak yang memuji rambut baru saya, namun saya sangat khawatir karena sebentar lagi Ujian Nasional akan diadakan, namun cukuran rambut saya seperti itu, saya terus merasa ketakutan. Hingga akhirnya, ketika malam hari saya meminta ayah saya untuk mencukur kembali rambut saya, karena atasnya panjang tetapi sampingnya sudah pelontos, alhasil saya menjadi botak pelontos. Kemudian ketika esok hari bersekolah saya di tertawakan oleh teman saya karena rambut saya yang botak pelontos.</p>
 </div>
<!-- Tutupkonten2 -->
<hr class="my-5">
<!-- Konten3 -->
<div class="container">
  <h1 class="row text-center justify-content-center display-4">Pendidikan</h1>
  <br>
  <div class="row text-center justify-content-center">
    <div class="col-md-3 text-secondary">
      <img src="{{ asset('image/sd.png')}}" width="60%">
      <h1 class="mb-3 mt-3">SDN TUGU 10 Depok</h1>
    </div>
    <div class="col-md-3 text-secondary">
      <img src="{{ asset('image/smp.jpg')}}" width="70%">
      <h1 class="mb-3 mt-3">SMPN 15 Depok</h1>
    </div>
    <div class="col-md-3 text-secondary">
      <img src="{{ asset('image/smk.png')}}" width="80%">
      <h1 class="mb-3 mt-3">SMK TARUNA BHAKTI</h1>
    </div>
  </div>
</div>

<!-- tutupKonten3 -->
<hr class="my-5">
<!-- konten4 -->
<div class="container text-center" id="award">
  <h1 class="display-4">Skills</h1>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" aria-valuenow="75"
    aria-valuemin="0" aria-valuemax="100" style="width:75%">
      75% Complete
    </div>
  </div>
  <p><strong>HTML</strong></p>

  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="60"
    aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete
    </div>
  </div>
  <p><strong>CSS</strong></p>

	<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="55"
    aria-valuemin="0" aria-valuemax="100" style="width:55%">
      55% Complete
    </div>
  </div>
  <p><strong>JavaScript</strong></p>
</div>
<!-- Tutupkonten4 -->
<br class="my-2">
<!-- Footer -->
<div class="card">
	<footer class="card-footer bg-dark text-light text-center">Copyright &copy Aqli Hamdan</footer>
</div>

  	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>