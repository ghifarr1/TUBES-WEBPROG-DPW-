<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Penyerahan Produk</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .card {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
        }
        .card-header, .card-footer {
            background: linear-gradient(45deg, rgb(192, 211, 27), rgb(49, 0, 128));
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 15px;
        }
        .card-footer {
            border-radius: 0 0 15px 15px;
            text-align: center;
            font-size: 0.875rem;
        }
        .card-body {
            padding: 30px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 25px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header text-center">
        Upload Bukti Pengembalian Produk
    </div>
    <div class="card-body">
        <form action="{{ route('booking-update-pengembalian', $booking->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="foto" class="form-label">Upload Foto Bukti Pengembalian</label>
                <input class="form-control" type="file" id="bukti_pengembalian" name="bukti_pengembalian" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Upload</button>
        </form>
    </div>
    <div class="card-footer">
        Pastikan foto yang diupload jelas dan sesuai dengan produk.
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
