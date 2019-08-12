<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Data Gallery</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>
  </head>
  <body>
  <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Judul</th>
        <th colspan="1">Action</th>
        <!-- <th colspan="2">Action</th> -->
      </tr>
    </thead>
    <tbody>
      
      @foreach($galleries as $galery)
      <tr>
        <td><img src="{{ url('gallery/'.$galery->foto)}}" alt="" width="100%"></td>
        <td>{{$galery['judul']}}</td>
        
        
        
        <td>
          <form action="{{action('GalleryController@destroy', $galery['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>

  </body>
</html>