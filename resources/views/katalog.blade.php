
  <x-layout></x-layout>
  <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
  <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css"/>

  <div class="judulkatalog">
    <img src="{{ asset('image/gambarkatalog2.avif') }}" alt="katalog image">
    <h1>Katalog Produk</h1>
  </div>

  <div class="catalog-container">
    @foreach ($produks as $merk => $items)
      <h2 class="mb-3">{{ $merk }}</h2>
      <div class="row">
        @foreach ($items as $produk)
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="{{ asset('storage/'.$produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama }}">
              <div class="card-body">
                <h5 class="card-title">{{ $produk->nama }}</h5>
                <p class="card-text">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#specModal{{ $produk->id }}">
                  Lihat Spesifikasi
                </button>
              </div>
            </div>
          </div>

          <!-- Modal Spesifikasi -->
          <div class="modal fade" id="specModal{{ $produk->id }}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">{{ $produk->nama }}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  {!! nl2br(e($produk->spesifikasi)) !!}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
