<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>

    <header>
        @include('partials.reservasi.navbar-reservasi')
    </header>

    <main class="container">
        {{-- gambar header --}}
        <img src="/img/membatik.png" alt="" class="object-fit-cover w-100" style="height:512px">

        <div class="card rounded-0 bg-success mb-5">
            <div class="card-body">
             <h5 class="card-title text-white">Pengalaman Membatik</h5>
            </div>
          </div>

          {{-- breadcumb --}}
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="/" class="link-offset-2 link-underline link-underline-opacity-0">Beranda</a></li>
              {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
            </ol>
          </nav>

          {{-- kalimat --}}
          <div class="card rounded-0  mb-5 border-0">
            <div class="card-body">
             {{-- <h5 class="card-title">Pengalaman Membatik</h5> --}}
             <p class="card-text text-start"><small class="text-body-secondary">Merasa tertarik untuk belajar membuat batik secara langsung? Jangan khawatir, kamu bisa mengikuti pelatihan singkat untuk membuat batik sendiri di sini.
                Kegiatan membuat batik benar-benar menyenangkan dan membuat liburan kamu makin berkesan. Kamu pun akan lebih mencintai dan menghargai warisan budaya Indonesia karena tahu seberapa rumitnya proses di balik terciptanya satu kain batik.</small></p>
            </div>
          </div>

          <div class="card mb-0 border-0">
            <div class="card-body text-center">
              <h5 class="text-title">Batik Education Package</h5>
            </div>
          </div>

          {{-- paket --}} 
          <div class="row row-cols-1 row-cols-md-3 g-4 rounded-0">
            <div class="col">
              <div class="card h-100 rounded-0 shadow">
                <img src="/img/paket1.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <p class="card-title">Paket Handkerchief</p>
                    <div class="pb-3">
                        <i class="bi bi-info-circle-fill text-success" data-bs-toggle="collapse" href="#paket1" role="button" aria-expanded="false" aria-controls="collapseExample"></i>
                        <span class="card-text"><small class="text-success">Informasi Paket</small></span>
                        <div class="collapse" id="paket1" style="position: absolute; z-index:1">
                            <div class="card card-body rounded-0 shadow">
                                <h6 class="card-title">Include : Rp 50.000 / orang</h6>
                                <p class="card-text"><small class="text-body-secondary">-Pelatihan membatik selama 2 jam</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Peminjaman alat membatik</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Media saputangan 30 x 30 cm</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Teknik pewarnaan colet</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Instruktur profesional</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Karya bisa dibawa pulang</small></p>
                                <h6 class="card-title">*minimal peserta 10 orang</h6>
                            </div>
                          </div>
                    </div>
                    <a href="#" class="btn btn-success">Beli Paket</a>
                </div>
              </div>
            </div>

        <div class="col">
            <div class="card h-100 rounded-0 shadow">
                <img src="/img/paket2.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                  <p class="card-title">Paket Totebag</p>
                  <div class="pb-3">
                    <i class="bi bi-info-circle-fill text-success" data-bs-toggle="collapse" href="#paket2" role="button" aria-expanded="false" aria-controls="collapseExample"></i>
                    <span class="card-text"><small class="text-success">Informasi Paket</small></span>
                    <div class="collapse" id="paket2" style="position: absolute; z-index:1">
                        <div class="card card-body rounded-0 shadow">
                            <h6 class="card-title">Include : Rp 90.000 / orang</h6>
                            <p class="card-text"><small class="text-body-secondary">-Pelatihan membatik selama 2 jam</small></p>
                             <p class="card-text"><small class="text-body-secondary">-Peminjaman alat membatik</small></p>
                            <p class="card-text"><small class="text-body-secondary">-Media saputangan 30 x 30 cm</small></p>
                            <p class="card-text"><small class="text-body-secondary">-Teknik pewarnaan colet</small></p>
                            <p class="card-text"><small class="text-body-secondary">-Instruktur profesional</small></p>
                            <p class="card-text"><small class="text-body-secondary">-Karya bisa dibawa pulang</small></p>
                            <h6 class="card-title">*minimal peserta 10 orang</h6>
                        </div>
                      </div>
                    </div>
                  <a href="#" class="btn btn-success">Beli Paket</a>
                </div>
            </div>
        </div>

            <div class="col">
              <div class="card h-100 rounded-0 shadow">
                <img src="/img/paket3.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                  <p class="card-title">Paket Cloth</p>
                  <div class="pb-3">
                    <i class="bi bi-info-circle-fill text-success" data-bs-toggle="collapse" href="#paket3" role="button" aria-expanded="false" aria-controls="collapseExample"></i>
                    <span class="card-text"><small class="text-success">Informasi Paket</small></span>
                        <div class="collapse" id="paket3" style="position: absolute; z-index:1">
                            <div class="card card-body rounded-0 shadow">
                                <h6 class="card-title">Include : Rp 90.000 / orang</h6>
                                <p class="card-text"><small class="text-body-secondary">-modul</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Pelatihan membatik selama 6 hari</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Peminjaman alat membatik</small></p>
                                <p class="card-text"><small class="text-body-secondary">-media kain 200 cm x 115 cm</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Teknik pewarnaan colet</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Penginapan Homestay</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Konsumsi 3x per hari</small></p>
                                <p class="card-text"><small class="text-body-secondary">-Karya bisa dibawa pulang</small></p>
                                <h6 class="card-title">*minimal peserta 5 orang</h6>
                            </div>
                      </div>
                    </div>
                     <a href="#" class="btn btn-success">Beli Paket</a>
                </div>
              </div>
            </div>
          </div>


    </main>

    <footer>
        @include('partials.reservasi.footer-reservasi')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>