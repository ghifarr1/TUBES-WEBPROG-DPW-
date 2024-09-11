<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2020/03/288.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            width: 100%;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(45deg, #04310e, #10392d);
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
        }
        .card-body {
            padding: 30px;
            background: linear-gradient(45deg, #1d1f1d, #30246a);
        }
        .btn-report {
            width: 100%;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 25px;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-report:hover {
            transform: scale(1.05);
        }
        .btn-keuangan {
            background-color: #007bff;
            border: none;
        }
        .btn-keuangan:hover {
            background-color: #0056b3;
        }
        .btn-top-transaksi {
            background-color: #ffc107;
            border: none;
        }
        .btn-top-transaksi:hover {
            background-color: #e0a800;
        }
        .btn-pelanggan {
            background-color: #dc3545;
            border: none;
        }
        .btn-pelanggan:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        Admin Menu
    </div>
    <div class="card-body">
        <a href="{{ route('keuangan') }}" class="btn btn-report btn-keuangan" style="text-decoration: #f5f8f7">Report Keuangan</a>
        <a href="{{ route('toptransaksi') }}" class="btn btn-report btn-top-transaksi" style="text-decoration: #f5f8f7">Report Top Transaksi</a>
        <a href="{{ route('report-pelanggan') }}" class="btn btn-report btn-pelanggan" style="text-decoration: #f5f8f7">Report Pelanggan</a>
    </div>
    <a href="/"><button type="button" class="btn btn-secondary">Back to home</button></a>
    <a href="{{ route('approval-pelanggan') }}"><button type="button" class="btn btn-secondary">Admin Approval</button></a>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
