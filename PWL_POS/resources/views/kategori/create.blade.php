@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
            </div>

            <form action="../kategori" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kaetgori_kode">
                            Kode Kategori
                        </label>
                        <input type="text" class="form-control" id="kategori_kode" name="kategori_kode"
                            placeholder="Kode Kategori">
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">
                            Nama Kategori
                        </label>
                        <input type="text" class="form-control" id="kategori_nama" name="kategori_nama"
                            placeholder="Nama Kategori">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
