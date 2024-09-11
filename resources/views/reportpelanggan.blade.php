<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://advontura.com/wp-content/uploads/2020/10/hutan_pinus_mangunan-G0dUKjgs.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            width: 100%;
            max-width: 1200px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
            overflow: hidden;
            background: linear-gradient(to right, #343a40, #000000);
            color: white;
        }
        .card-header {
            background-color: transparent;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }
        .card-body {
            padding: 0;
        }
        .table {
            margin-bottom: 0;
            width: 100%;
            color: white;
        }
        thead {
            background-color: transparent;
            color: white;
        }
        tbody tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }
        tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        th, td {
            padding: 15px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        Data Pelanggan
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $index => $data)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $data->nama_pelanggan }}</td>
                            <td>{{ $data->email_pelanggan }}</td>
                            <td>{{ $data->nomor_pelanggan }}</td>
                            <td>{{ $data->alamat_pelanggan }}</td>
                            <td>{{ $data->pekerjaan_pelanggan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
