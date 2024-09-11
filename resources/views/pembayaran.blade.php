<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: darkgreen;
            color: white;
            font-weight: bold;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control-file {
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('booking-update-pembayaran', $booking->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-header">
                        Form Pembayaran
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="qr_code">QR Code Pembayaran</label>
                            <!-- Tampilkan foto QR code untuk pembayaran -->
                            <img src="https://baitulmal.acehprov.go.id/assets/img/news/paperless_-bayar-zakat-ke-bma-bisa-via-qris.jpeg" class="img-fluid" alt="QR Code">
                        </div>
                        <div class="form-group">
                                <label for="bukti_pembayaran">Upload Bukti Pembayaran</label>
                                <!-- Input untuk mengunggah bukti pembayaran -->
                                <input type="file" class="form-control-file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*" required>
                            </div>
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                        <!-- Tampilkan total harga dari data booking -->
                    <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $booking->harga_total }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit Pembayaran</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
