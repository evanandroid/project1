@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>
    <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.produks.form')
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('produks.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
