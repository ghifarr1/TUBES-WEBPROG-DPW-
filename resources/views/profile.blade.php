<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 50px;
            padding-bottom: 50px;
            background: url('https://i.pinimg.com/originals/b3/5e/89/b35e89656bde1a04f66bd6809f036ba3.jpg') no-repeat center center fixed; /* Ubah 'background.jpg' dengan path gambar latar belakang Anda */
            background-size: cover;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        }
        .profile-picture-frame {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            border: 5px solid #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .profile-picture-frame:hover {
            transform: scale(1.1);
        }
        .profile-picture {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-details {
            padding-top: 30px;
            text-align: center;
        }
        .profile-details .card {
            border: none;
            background-color: #ffffff;
            border-radius: 15px;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .profile-details .card:hover {
            transform: scale(1.02);
        }
        .profile-details .card .card-body {
            padding: 10px 15px;
            border-radius: 0;
        }
        .profile-details .card .card-body label {
            font-weight: 500;
            margin-right: 10px;
            font-size: 1rem;
            color: #495057;
        }
        .profile-details .card .card-body p {
            margin: 0;
            font-size: 1rem;
            color: #495057;
        }
        .profile-title {
            font-size: 2rem;
            font-weight: bold;
            color: darkgreen;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container text-center">
            <div class="profile-title">Biodata Pelanggan</div>
            <div class="profile-picture-frame">
                <div class="profile-picture">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture" class="img-fluid">
                </div>
            </div>
            <div class="profile-details">
                <div class="card">
                    @foreach ($pelanggan as $item)
                    <div class="card-body">
                        <label for="name">Nama:</label>
                        <p id="name">{{ $item->nama_pelanggan }}</p>
                    </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label for="email">Email:</label>
                            <p id="email">{{ $item->email_pelanggan }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label for="email">Password:</label>
                            <p id="email">***************</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label for="phone">Nomor:</label>
                            <p id="phone">{{ $item->nomor_pelanggan }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label for="address">Alamat:</label>
                            <p id="address">{{ $item->alamat_pelanggan }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <label for="job">Pekerjaan:</label>
                            <p id="job">{{ $item->pekerjaan_pelanggan }}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
            <a href="/"><button type="button" class="btn btn-secondary">Back to home</button></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
