<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Ulasan E-Literasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-dark" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo_E-literasi.png" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">All </a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Seluruh Ulasan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">

        </div>
    </div>
</div>

<div class="container">
  <table class="table" id="table-ulasan">
      <thead>
      <tr>
          <th scope="col">Judul Karya</th>
          <th scope="col">Judul Chapter</th>
          <th scope="col">ID Komentar</th>
          <th scope="col">Username</th>
          <th scope="col">Komentar</th>
          <th scope="col">Rating</th>
      </tr>
      </thead>
      <tbody id="tableBody"></tbody>
  </table>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $.ajax({
          url:"koneksidatabase.php",
          type : "GET",
          dataType:"json",
          success:function(json_array){
              console.log(json_array);
              var html_append = $('#table-ulasan tbody');
              $.each(json_array, function(index,item){
                  html_append.append(
                      '<tr><td>'+item.judul_buku +'</td><td>'+item.judul_chapter+'</td><td>'+item.id_komentar+'</td><td>'+item.nama_pengguna+'</td><td>'+item.komentar+'</td><td>'+item.rating+'</td></tr>');
              });

          }
          
      });
  </script>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
