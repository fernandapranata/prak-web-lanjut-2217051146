<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <style>
       body {
           background-color: #f8f9fa;
           font-family: 'Poppins', Arial, sans-serif;
       }

       h1, h2 {
           text-align: center;
           margin: 20px 0;
           color: #343a40;
       }

       .table-container {
           margin: 50px auto;
           width: 90%;
           max-width: 1200px;
           background-color: #ffffff;
           padding: 30px;
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
       }

       table {
           width: 100%;
           border-collapse: collapse;
           background-color: #ffffff;
       }

       table th, table td {
           padding: 15px;
           text-align: left;
       }

       table thead {
           background-color: #007bff;
           color: white;
       }

       table tbody tr:nth-child(even) {
           background-color: #f2f2f2;
       }

       table tbody tr:hover {
           background-color: #e9ecef;
           cursor: pointer;
       }

       .btn-custom {
           display: inline-block;
           padding: 10px 20px;
           background-color: #007bff;
           color: white;
           border-radius: 5px;
           text-decoration: none;
           transition: background-color 0.3s ease;
       }

       .btn-custom:hover {
           background-color: #0056b3;
       }
   </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
