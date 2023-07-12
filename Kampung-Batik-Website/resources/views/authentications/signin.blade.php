<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <header></header>

    <main class="container">

        <div class="card w-50 mt-5">
            <div class="card-body">
              <h5 class="card-title">Masuk ke akun anda</h5>
              <p class="card-text">Masukkan email dan password anda untuk masuk</p>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Lanjutkan</button>
            </form>
            </div>

          </div>
          {{-- <form action="{{ url('/signin') }}" method="post" >
            <div>
            <h1>Sign In to Kantin IBIK</h1>
            <div>Please use your email and password with correctly</div>
            </div>
            <div>
            <label for="email">Email</label>
            <input type="text" name="email" />
            </div>
            <div>
            <div>
             <label for="password">Password</label>
             <a href="#">Forgot Password ?</a>
            </div>
            <input type="password" name="password" />
            </div>
            <button type="submit">Continue</button>
            </div>
            </form> --}}
    </main>
    <footer></footer>
    {{-- <h1>Hello, world!</h1> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>