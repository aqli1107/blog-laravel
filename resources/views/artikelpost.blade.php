
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
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ url('artikel')}}">Artikel <span class="sr-only">(current)</span></a>
                        </li>
                      </ul>
                    </div>
                  </nav>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h1 class="pb-3 mt-4 mb-4 border-bottom">
        Artikel
      </h1>

      
      <div class="blog-post">
        <img src="{{ url ('foto/'.$artikel->foto) }}" style="width: 100%">
        <h2 class="blog-post-title">{{$artikel->Judul}}</h2>
        <p class="blog-post-meta">{{$artikel->created_at}} by {{$artikel->pembuat}}</a></p>
        tag :
        @foreach ($artikel->tags as $d)
                            <small>{{ $d->nama_tags }}</small>
                        @endforeach

        <p class="content" >{{$artikel->deskripsi}}</p>
      </div><!-- /.blog-post -->

      <!-- /.post-comment -->
      <div class="comments">
        <h2>Add Comments</h2>
        <ul class="comment-list">
          <li>
            <div class="commetn-text">
              <form action="{{ route('blog.comment.store')}}" class="form-horizontal" method="POST">
                @csrf
              <input type="hidden" name="id" value="{{ $artikel->id}}">
              <textarea name="message" id="" method='post' cols="30" rows="5" class="form-control" placeholder="Add Comment"></textarea>
            <br>
              <input type="submit" value="Komentar" class="btn btn-primary">
              </form>
            </div>
          </li>
        </ul>

        @foreach ($come as $comment)
        <div class="panel-body">
            <hr>
        <h3>{{ $comment->user->name}} - {{ $comment->created_at->diffForHumans() }}</h3>
        <p>{{ $comment->message }}</p>
        </div>
            
        @endforeach
      </div>
      

    </div><!-- /.blog-main -->

    

      
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->
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
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
