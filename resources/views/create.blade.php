<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Tambah Artikel Baru</h2><br/>
      <form method="post" action="{{url('artikels')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto</label>
            <input type="file" class="form-control" name="foto">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Title">Judul</label>
              <input type="text" class="form-control" name="judul">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Description">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Pembuat</label>
                <select name="pembuat">
                  <option value="Bung Berenang">Bung Berengan</option>
                  <option value="Cholil Mahmudi">Cholil Mahmudi</option>
                  <option value="Marsinah Ananti">Marsinah Ananti</option>  
                  <option value="Rafika Marsih">Rafika Marsih</option>  
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Qty">Kategori</label>
              <input type="text" class="form-control" name="kategori">
            </div>
          </div>
           <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="tag">Tags:</label>
                            <select name="tags[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                @foreach($tag as $e)
                                <option value="{{ $e->id }}">{{ $e->nama_tags }}</option>
                                @endforeach
                            </select>
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
    {{-- modall tags --}}
    <script>
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
  </body>
</html>