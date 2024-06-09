<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Data Artwork</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Artworks</h3>
  <table class="table-data">
    <thead>
      <tr>
        <th>No</th>
        <th>Foto Artwork</th>
        <th>Judul</th>
        <th>Artist</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($artwork as $artwork)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><img src="{{ asset('img_artworks/' . $artwork->foto)  }}" alt="" width="300px"></td>
        <td>{{ $artwork->judul }}</td>
        <td>{{ $artwork->artis}}</td>
        <td>{{ $artwork->kategori }}</td>
        <td>{{ $artwork->deskripsi }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="6" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>
