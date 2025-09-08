@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.produks.form')
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('produks.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
