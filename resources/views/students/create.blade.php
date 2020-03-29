@extends('layout.main')

@section('title', 'Form Tambah Data Students')



@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Tambah Data Students</h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama..">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP :</label>
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan nrp..">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email..">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan"
                        placeholder="Masukkan Jurusan..">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection