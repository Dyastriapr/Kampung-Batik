<nav class="navbar navbar-expand bg-body-tertiary fixed-top">
  <div class="container">
    <img src="/img/icon/logo.png" alt="" style="width: 64px">
    <div class="">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Fasilitas</a>
        </li>
      </ul>
    </div>
    <div>
        <span>
            @auth
            <div class="card">
                <div class="card-body">
                  <p>Login berhasil</p>
                </div>
              </div>            @else
                <a href="/api/login"><button type="button" class="btn btn-success">Masuk</button></a>
            @endauth
        </span>
    </div>
  </div>
</nav>
