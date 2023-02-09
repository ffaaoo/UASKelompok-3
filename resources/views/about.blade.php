@extends('template')


<html>
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
        <style>
            body {
                font-family: 'Ubuntu', sans-serif !important;
                background-color: #dff4fd;
            }     
        </style>
    </head>
     @section('main')
     <div class="card-group">
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/rafi.jpeg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Muhammad Raafi Ramadhan</h4>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/yusup.jpeg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">M. Yusuf Mulya Utama</h4>
                    </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/alwan.jpeg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Alwan Fauzaan</h4>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/aldo.jpeg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Aldo Nicholas</h4>
            </div>
        </div>
        
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/yanuar.jpeg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Yanuar Efendhi</h4>
            </div>
        </div>
        

    </div>
    @endsection