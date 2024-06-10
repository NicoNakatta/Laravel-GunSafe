<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Category</title>
</head>

<body>
  <h3>Data Categories</h3>
  <table border="1" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Jenis Keamanan</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($category as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{$category->jenis_keamanan}}</td>
        <td>Rp. {{number_format ($category->harga)}}</td>
      </tr>
      @empty
      <tr>
        <td colspan="2" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>
