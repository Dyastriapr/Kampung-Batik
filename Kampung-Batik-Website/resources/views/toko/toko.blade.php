<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <header>
        @include('partials.toko.navbar-toko')
    </header>
    <main class="container">
        
        <div id="carouselExample" class="carousel slide mt-5 mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/toko1.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 256px" data-bs-interval="3500">
              </div>
              <div class="carousel-item">
                <img src="/img/toko1.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 256px" data-bs-interval="3500">
              </div>
              <div class="carousel-item">
                <img src="/img/toko1.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 256px" data-bs-interval="3500">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- breadcumb --}}
        {{-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <div class="card rounded-0 shadow w-100">
              <div class="card-body">
                <li class="breadcrumb-item"><a href="/" class="link-offset-2 link-underline link-underline-opacity-0">Beranda</a></li>
              </div>
            </div>
          </ol>
        </nav>       --}}
  
        {{-- button --}}
          <div class="card mb-5 w-100 border-0">
            <div class="row g-3">
              <div class="col-md-1 ">
                <button type="button" class="btn btn-success w-100 btn-sm rounded-0">Pakaian</button>
              </div>
              <div class="col-md-1 "> 
                <button type="button" class="btn btn-success btn-sm w-100 rounded-0">Souvenir</button>
              </div>
              <div class="col-md-1 ">
                <button type="button" class="btn btn-success w-100 btn-sm rounded-0">kain</button>
              </div>
              <div class="col-md-1 ">
                <button type="button" class="btn btn-success w-100 btn-sm rounded-0">Topi</button>
              </div>
              <div class="col-md-8  d-flex justify-content-end ">
                <button type="button" class="btn btn-outline-dark rounded-0 btn-sm">Sort By</button>
              </div>
            </div>
          </div>

          <div class="card mb-0 border-0">
            <div class="card-body ps-0">
              <h5 class="card-title ">UNTUK KAMU</h5>
            </div>
          </div>


          {{-- Daftar produk --}}
          
          <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($produk as $item)
            <div class="col">
              <div class="card h-100">
                <a href="/detail-produk/{{ $item->id }}"><img src="{{ $item->image }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">Rp. {{ $item->price }}</p>
                  <button type="button" class="btn btn-outline-dark btn btn-sm">Masukan Keranjang</button>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      
      

    </main>
    <footer></footer>
    {{-- <h1>Hello, world!</h1> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>