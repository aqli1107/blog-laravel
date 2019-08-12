
<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Foto</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Pembuat</th>
        <th>Kategori</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($artikels as $artikel)
      <tr>
        <td>{{$artikel['id']}}</td>
        <td><img src="{{ url ('foto/'.$artikel->foto) }}" style="width: 30%"></td>
        <td>{{$artikel['Judul']}}</td>
        <td>{{$artikel['deskripsi']}}</td>
        <td>{{$artikel['pembuat']}}</td>
        <td>{{$artikel['kategori']}}</td>
        
        <td><a href="{{action('ArtikelController@edit', $artikel['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ArtikelController@destroy', $artikel['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <button class="btn btn-success"><a href="{{action('ArtikelController@create')}}" style="text-decoration: none; color :white;">Tambah Data</a></button>
  </div>
  @section('js')
  @show
  </body>
</html>