@extends('layouts.main')
@section('title','pelanggan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah Pelanggan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <form action="/pelanggan/store" class="m-4 ml-5 mr-5" method="post" autocomplete="off">
                @csrf

                <label class="form-label" for="nama_pelanggan">Nama Pelanggan</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="text"
                        class="form-control"
                        name="nama_pelanggan"
                        id="nama_pelanggan"
                        required
                        >
                </div>
            
                <label class="form-label" for="alamat">Alamat</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="alamat"
                        id="alamat"
                        required
                        >
                   
                </div>
                <label class="form-label" for="telp">No Telp</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="no_telp"
                        id="no_telp"
                        required
                        >
                   
                </div>
                <button type="submit" class="btn btn-info">Tambah Data</button>
             </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
