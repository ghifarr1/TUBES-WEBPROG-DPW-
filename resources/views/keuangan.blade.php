<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Keuangan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://bobobox.com/blog/wp-content//uploads/elementor/thumbs/cikole-family-gathering-q5ntcbncdg2zebtzhjnekvjxrb6c44f2jyu3v3qwv8.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            width: 100%;
            max-width: 800px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(45deg, #0c1e21, #1e2e3e);
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
        }
        .card-body {
            padding: 30px;
            background: linear-gradient(45deg, #5b0f4f, #71a62c73);
        }
        .total-keuangan {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            color: #fdffff;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        Laporan Keuangan
    </div>
    <div class="card-body">
        <div class="total-keuangan">
            Total Keuangan: Rp. {{ number_format($totalKeuangan) }}
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
