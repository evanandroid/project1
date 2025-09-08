<div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama ?? '') }}">
</div>

<div class="mb-3">
    <label>Merk</label>
    <input type="text" name="merk" class="form-control" value="{{ old('merk', $produk->merk ?? '') }}">
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga ?? '') }}">
</div>

<div class="mb-3">
    <label>Spesifikasi</label>
    <textarea name="spesifikasi" class="form-control">{{ old('spesifikasi', $produk->spesifikasi ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control">
    @if(!empty($produk->gambar))
        <img src="{{ asset('storage/'.$produk->gambar) }}" width="100" class="mt-2">
    @endif
</div>
