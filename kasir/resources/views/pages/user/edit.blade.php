@extends('layouts.main')
@section('title','user')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Edit User</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <form action="/user/{{ $user->id }}/update" class="m-4 ml-5 mr-5" method="post" autocomplete="off">
                @csrf

                <label class="form-label" for="nama_user">Nama User</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="text"
                        class="form-control"
                        name="nama_user"
                        id="nama_user"
                        value="{{ $user->nama_user}}"
                        required
                        >
                </div>
            
                <label class="form-label" for="email">Email</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        value="{{ $user->email}}"
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
                        value="{{ $user->alamat}}"
                        required
                        > 
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
             </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
