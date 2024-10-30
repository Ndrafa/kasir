@extends('layouts.main')
@section('title','produk')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Produk Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/produk/create" class="btn btn-info mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($produk as $produk)
                  <tr>
                    <td><p class="text-sm mx-3">{{$loop->iteration}}</p></td>
                    <td><p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$produk->nama_produk}}</p></td>
                    <td><p class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$produk->harga}}</p></td>
                    <td><p class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$produk->stok}}</p></td>


                    <td class="align-middle text-center text-sm">
                      <a href="/produk/{{$produk->id}}/edit" class="badge badge-sm bg-gradient-success">
                        Edit
                      </a>
                      <a href="/produk/{{$produk->id}}/delete" class="badge badge-sm bg-gradient-danger">
                        Hapus
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@if (session('berhasil'))
<script>
  Swal.fire({
    title: "Berhasil!",
    text: "{{ session('berhasil') }}",
    icon: "success"
  });
</script>
@endif

@endsection
