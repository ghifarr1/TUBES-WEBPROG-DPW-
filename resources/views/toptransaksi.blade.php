<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Transaksi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://asset.kompas.com/crops/VmgRArUEy2xLWhjIv1iPh_QdG5s=/132x0:717x390/750x500/data/photo/2014/11/30/0921186tenda3780x390.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            width: 100%;
            max-width: 1000px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(45deg, #343a40, #6c757d);
            color: white;
            text-align: center;
            font-size: 1.75rem;
            font-weight: bold;
            padding: 20px;
        }
        .card-body {
            padding: 30px;
            background: linear-gradient(45deg, #4a024a, #07116c);
        }
        .table {
            margin-bottom: 0;
            font-size: 1rem;
        }
        thead th {
            background-color: #495057;
            color: white;
        }
        tbody tr:nth-child(odd) {
            background-color: #6c757d;
        }
        tbody tr:nth-child(even) {
            background-color: #adb5bd;
        }
        tbody tr:hover {
            background-color: #495057;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        Top 10 Transaksi
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Booking</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Harga Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topTransaksi as $index => $transaksi)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->nama_produk }}</td>
                        <td>{{ $transaksi->nama_pelanggan }}</td>
                        <td>{{ number_format($transaksi->harga_total, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
