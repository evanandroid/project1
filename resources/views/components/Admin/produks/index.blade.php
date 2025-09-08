@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen Produk</h1>
    <a href="{{ route('produks.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->merk }}</td>
                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>
                        @if($produk->gambar)
                            <img src="{{ asset('storage/'.$produk->gambar) }}" width="80" alt="{{ $produk->nama }}">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus produk ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $produks->links() }}
</div>
@endsection
