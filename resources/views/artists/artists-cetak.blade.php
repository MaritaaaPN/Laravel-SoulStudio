<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Data Artist</title>
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
      background-color: #62858d;
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
  <h3>Data Artists</h3>
  <table class="table-data">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Kebangsaan</th>
        <th>Gaya Seni</th>
        <th>Biografi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($artist as $artist)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $artist->nama }}</td>
        <td>{{ $artist->lahir}}</td>
        <td>{{ $artist->bangsa }}</td>
        <td>{{ $artist->gaya }}</td>
        <td>{{ $artist->bio }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="6" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>
