<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body, html {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .background-image {
        background-image: url('https://lindungihutan.com/blog/wp-content/uploads/2022/02/Hutan-Pinus-Design-Blog-LindungiHutan.png'); /* Ganti dengan URL gambar latar belakang Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
      }
      .form-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem 1rem; /* Padding atas dan bawah */
      }
      .form-card {
        backdrop-filter: blur(10px); /* Efek blur untuk latar belakang form */
        background-color: rgba(255, 255, 255, 0.85); /* Warna latar belakang semi-transparan untuk form */
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 500px; /* Menentukan lebar maksimum card */
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="background-image"></div>
    <div class="form-container">
      <div class="card form-card">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Registration Form</h5>
          <form action="{{ route('CreateRegist') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nama_pelanggan" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="mb-3">
              <label for="email_pelanggan" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email_pelanggan" name="email_pelanggan" required>
            </div>
            <div class="mb-3">
              <label for="password_pelanggan" class="form-label">Password</label>
              <input type="password" class="form-control" id="password_pelanggan" name="password_pelanggan" required>
            </div>
            <div class="mb-3">
              <label for="nomor_pelanggan" class="form-label">Nomor Handphone</label>
              <input type="tel" class="form-control" id="nomor_pelanggan" name="nomor_pelanggan" required>
            </div>
            <div class="mb-3">
              <label for="alamat_pelanggan" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="pekerjaan_pelanggan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan_pelanggan" name="pekerjaan_pelanggan" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
