<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ADD8E6;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #333;
            letter-spacing: 1px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #2193b0;
            outline: none;
        }

        button {
            padding: 14px;
            background-color: #2193b0;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #176e87;
        }
        
        button:active {
            transform: scale(0.98);
        }

        input::placeholder {
            color: #aaa;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Create User</h2>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="npm" placeholder="NPM" required>
        <input type="text" name="kelas" placeholder="Kelas" required>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>