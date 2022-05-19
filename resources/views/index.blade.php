<!-- <h1>CRUD dengan menggunakan LARAVEL</h1> !-->
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CRUD LARAVEL</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Mahasiswa</a>
                </div>
                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Alamat</th>
                        </tr>    
                    </table>
                </div>
            </div>    
        </div>
    </section>
@endsection