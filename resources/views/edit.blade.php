<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Buku</h2><br/>
      <form method="post" action="{{action('ArtikelController@update', $id)}}" enctype="multipart/form-data">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto</label>
            <input type="file" class="form-control" name="foto" value="{{$artikel->foto}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Title">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Description">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{$artikel->deskripsi}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Pembuat</label>
                <select name="pembuat">
                  <option value="Bung Berenang" @if($artikel->pembuat=="Bung Berenang") selected @endif>Bung Berenang</option>
                  <option value="Cholil Mahmudi" @if($artikel->pembuat=="Cholil Mahmudi") selected @endif>Cholil Mahmudi</option>
                  <option value="Marsinah Ananti" @if($artikel->pembuat=="Marsinah Ananti") selected @endif>Marsinah Ananti</option>  
                  <option value="Rafika Marsih" @if($artikel->pembuat=="Rafika Marsih") selected @endif>Rafika Marsih</option>  
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Qty">Kategori</label>
              <input type="text" class="form-control" name="kategori" value="{{$artikel->kategori}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>