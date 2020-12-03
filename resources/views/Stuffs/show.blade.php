@extends ('layout/main')

@section('title', 'Stuffs')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-5">
      <h1 class="mt=3">Detail Barang </h1>

      <div class="card" style="width: 18rem;">
          <img src="{{ $stuffs['0']->Gambar }}" class="card-img-top"  >
        <div class="card-body">
          <h5 class="card-title">{{ $stuffs['0']->Barang }}</h5>
          <p class="card-text">{{ $stuffs['0']->Harga }}</p>
          <p class="card-text">{{ $stuffs['0']->Kategori }}</p>
        </div>
      </div>


    </div>
  </div>
</div>
@endsection
