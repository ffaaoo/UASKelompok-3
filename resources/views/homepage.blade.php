@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/DVDLOGO.png"/>
    <title>DVD Rent</title>
    <style>
              body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }
        
        
    </style>
</head>
@section('main')
<body>
      <div class="container">
        <div class="float-start">
            <p style="font-size: 100px; font-weight: 700; color:#eb0ceb; margin-top: 100px">!!!! Rental Dvd Sekarang !!!!</p>
        </div><br>

      </div>
      <div class="align-self-center text-center">
            <a href="{{ url('/create') }}" class="btn btn-danger" style="color: #f7f7f7">Pesan Sekarang</a>
        </div>
</body>
@endsection
</html>

