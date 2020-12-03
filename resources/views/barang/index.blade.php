@extends ('layout/main')

@section('title', 'Daftar Barang')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt=3">Daftar Barang </h1>

<!-- Tabel Daftar Barang -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Aksi</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gambar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($daftarbarang as $brg): ?>
          <tr>
            <th>{{$brg->No}}</th>
            <td>
              <a href="" class="badge badge-success">Ubah</a> ||
              <a href="" class="badge badge-danger">Hapus</a>
            </td>
            <td>{{$brg->Barang}}</td>
            <td>{{$brg->Harga}}</td>
            <td>{{$brg->Kategori}}</td>
            <td>{{$brg->Gambar}}</td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>



    </div>
  </div>
</div>
@endsection
