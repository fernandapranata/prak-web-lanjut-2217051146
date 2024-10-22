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

       .list-data-title {
           font-size: 28px; 
           font-weight: 700;
           color: #000000; 
           letter-spacing: 1px;
           text-transform: uppercase;
           text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); 
           position: relative;
           padding-bottom: 10px;
       }

       .list-data-title::after {
           content: '';
           position: absolute;
           left: 50%;
           bottom: 0;
           transform: translateX(-50%);
           width: 80px; 
           height: 2px;
           background-color: #000000; 
       }

       .btn-custom {
           font-size: 16px; 
           padding: 10px 20px;
           background: linear-gradient(135deg, #28a745 0%, #218838 100%);
           border-radius: 50px;
           color: white;
           text-decoration: none;
           box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
           transition: all 0.3s ease;
           display: inline-flex;
           align-items: center;
           gap: 10px;
       }

       .btn-custom i {
           font-size: 20px;
           color: white;
       }

       .btn-custom:hover {
           background: linear-gradient(135deg, #218838 0%, #28a745 100%);
           transform: translateY(-2px);
           box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
       }

       .btn-custom:active {
           transform: translateY(0);
           box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
       }

       .table-container {
           margin: 50px auto;
           width: 100%;
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
   </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>