@extends('layouts.main')
@section('title','user')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah User</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <form action="/user/store" class="m-4 ml-5 mr-5" method="post" autocomplete="off">
                @csrf
                <label class="form-label" for="name">Nama User</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        required
                        >
                </div>

                <label class="form-label" for="email">Email User</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        required
                        >
                </div>
                <label class="form-label" for="alamat">Alamat</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="alamat"
                        class="form-control"
                        name="alamat"
                        id="alamat"
                        required
                        >
                </div>
            
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
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
