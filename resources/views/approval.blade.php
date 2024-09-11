<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/013/333/306/non_2x/outing-equipment-for-hiking-trips-summer-travel-and-camp-adventure-outdoor-icon-set-collection-of-tourist-tool-and-campground-cartoon-elements-recreation-trekking-and-survival-illustration-vector.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .table-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .table thead th {
            background-color: darkblue;
            color: white;
            border: none;
        }
        .table tbody tr {
            transition: background-color 0.3s;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            margin-right: 5px;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-warning {
            background-color: #ffc107;
        }
        h1, h2 {
            font-weight: 600;
        }
        h1 {
            color: darkblue;
        }
        h2 {
            color: #343a40;
        }
        .btn-approve {
            background-color: #007bff;
            color: white;
        }
        .btn-approve:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Admin Approval</h1>
        <div class="table-container">
            <h2 class="text-center mb-4">Booking List</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Customer Name</th>
                            <th>Booking Date</th>
                            <th>Item Booked</th>
                            <th>Quantity</th>
                            <th>Duration (days)</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_pelanggan }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->jumlah_booking }}</td>
                            <td>{{ $item->durasi_booking }}</td>
                            <td>{{ $item->harga_total }}</td>
                            <td><span class="badge badge-success">{{ $item->status_booking }}</span></td>
                            <td>
                                <form action="{{ route('approve-booking', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-approve btn-sm"><i class="fas fa-check"></i> Approve</button>
                                </form>
                                <form action="{{ route('booking-delete', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus booking ini?')"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <a href="/"><button type="button" class="btn btn-secondary">Back to home</button></a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
