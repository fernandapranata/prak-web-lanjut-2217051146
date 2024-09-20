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
            background-color: #ADD8E6; /* Warna biru muda */
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

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
            <img src="Fernanda Pranata.jpg" alt="Profile Image">
        </div>

        <div class="profile-details">
            <div class="profile-info">{{ $nama }}</div>
            <div class="profile-info">{{ $kelas }}</div>
            <div class="profile-info">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>