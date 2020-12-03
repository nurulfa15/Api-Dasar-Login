@extends ('layout/main')

@section('title', 'Stuffs')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-5">
      <h1 class="mt=3">Daftar Barang </h1>

      <ul class="list-group">
        <?php foreach ($stuffs as $stuff): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$stuff->Barang}}
          <a href="/stuffs/1" class="badge badge-info"> Detail</a>
        </li>
      <?php endforeach; ?>
      </ul>


    </div>
  </div>
</div>
@endsection
