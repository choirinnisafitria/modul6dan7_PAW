<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Data Mahasiswa</title>
  </head>
  <body>
    <h1 class="text-center">Modul VI PHP & MySQL</h1>
    <p class="text-center">Nama/NRP : Choirinnisa' Fitria/200411100149</p>
    <h2 class="text-center mb-4">Master Data Mahasiswa</h2>

    <div class="container">
    <a href="/mahasiswa/create" type="button"  nctype="multipart/form-data" class="btn btn-success">Tambah +</a>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($mahasiswa as $m)
    <tr>
      <th scope="row">{{ $m->id }}</th>
      <td>{{ $m->nrp }}</td>
      <td>{{ $m->nama }}</td>
      <td>{{ $m->email }}</td>
      <td>{{ $m->alamat }}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
          <a href="/mahasiswa/{{$m->id}}/edit" type="button" class="btn btn-warning">Edit</a>
          <form action="/mahasiswa/{{$m->id}}" method="POST">
            @csrf
            @method('delete')
          <input type="submit" value = "Delete" class="btn btn-danger"> 
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>