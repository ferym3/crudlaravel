@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <h1>Tambah Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8 mt-5">
                    <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa *</label>
                            <input type="text" name="nama" class="form-control" placeholder="Ahmad Roni">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM *</label>
                            <input type="number" name="nim" class="form-control" placeholder="12345">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat *</label>
                            <textarea name="alamat" class="form-control" placeholder="Indonesia"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}"><< Kembali ke halaman utama</a>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>    
    </section>    
@endsection