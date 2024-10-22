<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ADD8E6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container:hover {
            transform: scale(1.08);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }

        .profile-image img:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .profile-details {
            margin-top: 25px;
        }

        .profile-info {
            background-color: #e0f7fa;
            padding: 12px;
            margin: 12px 0;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-info:first-child {
            color: #00796b;
        }

        .profile-info:nth-child(2) {
            color: #00796b;
        }

        .profile-info:last-child {
            color: #00796b;
        }

        .profile-info:hover {
            background-color: #b2ebf2;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            padding: 10px 15px;
            background-color: #00796b;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="{{ route('users.index') }}" class="back-button">&#8592; Kembali List Data</a>


    <div class="profile-container">
        <div class="profile-image">
            <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Image">
        </div>

        <div class="profile-details">
            <div class="profile-info">Nama: {{ $user->nama }}</div>
            <div class="profile-info">Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
            <div class="profile-info">NPM: {{ $user->npm }}</div>
        </div>
    </div>
</body>
</html>