<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Data Tag</title>
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
        <th>Tag</th>
        <th colspan="2">Action</th>
        <!-- <th colspan="2">Action</th> -->
      </tr>
    </thead>
    <tbody>
      
    @foreach($tags as $tag)
      <tr>
      <td>{{$tag['nama_tags']}}</td>
                            
                            <td><a href="{{action('TagController@edit', $tag['id'])}}" class="btn btn-warning">Edit</a></td>
                            <td>
                            <form action="{{action('TagController@destroy', $tag['id'])}}" method="post">
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