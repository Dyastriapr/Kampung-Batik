<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/masuk.css">
</head>
  <body>
    <div class="dasar-masuk">
        <div class="dasar-konten-masuk">
          <div class="kiri">
            <div id="kalimat">
              <p  style="border: solid blue 1px; margin:0px"  class="text fs-5 text-white text-center">SELAMAT DATANG DI</p>
              <p  style="border: solid blue 1px; margin:0px"  class="text fs-3 fw-bold text-white text-center">KAMPUNG BATIK</p>
              <p  style="border: solid blue 1px; margin:0px"  class="text fs-3 fw-bold text-white text-center">CIBULUH BOGOR</p>
              <p  style="border: solid blue 1px; margin:0px"  class="text fs-6 text-white text-center">Masuk untuk mendapatkan Akses Reservasi dan Belanja</p>
            </div>
          </div>
          <div class="kanan">
            <div id="konten-kanan">
              <img id="logo" src="img/logo.png" alt="">
              <form id="formulir-masuk">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control form-control rounded-0" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-secondary rounded-0">Masuk</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>