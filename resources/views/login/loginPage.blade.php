<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body, html {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1; /* Posisikan di belakang elemen lain */
      }
      .form-container {
        height: 100%;
        backdrop-filter: blur(10px); /* Efek blur untuk latar belakang form */
        background-color: rgba(255, 255, 255, 0.50); /* Warna latar belakang semi-transparan untuk form */
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <img src="https://media.suara.com/pictures/653x366/2020/07/17/89710-hutan-pinus-mangunan-dok-istimewa.jpg" alt="Background Image" class="background-image">
    <div class="form-container">
      <div class="card" style="width: 24rem;">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Login</h5>
          <form method="POST" action="{{ route('loginCreate') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus required value="{{ old('email') }}">
              <div class="form-text">Kami janji kok gabakal share email kamu kemanapun.</div>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <p>Belum registrasi?, Klik <a href="{{ route('formRegist') }}">registrasi</a> disini</p>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
