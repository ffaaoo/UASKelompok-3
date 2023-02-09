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
    <title>Dvd</title>
    <style>
        body {
      background-color: #dff4fd;
      font-family: 'Ubuntu', sans-serif !important;
  }
  
  
</style>
</head>
@section('main')
<body>
    
    <div class="card-group">
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/KASET1.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">GTA SA</h4>
                <p class="card-text">Grand Theft Auto: San Andreas (sering disingkat sebagai GTA: SA atau GTA: San Andreas), adalah permainan video laga-petualangan yang dikembangkan oleh Rockstar North, dan diterbitkan oleh Rockstar Games. Permainan ini adalah permainan 3D ke-7 dalam seri Grand Theft Auto, yang ke-5 pada rilis konsol dan permainan ke-7 secara keseluruhan. </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/kaset2.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Winning Eleven 2023</h4>
                <p class="card-text">Winning Eleven 2023 terpilih sebagai game sepak bola PlayStation terbaik sepanjang sejarah, mengalahkan sekian banyak game serupa yang pernah ada di PlayStasion. Meskipun Jepang mungkin satu-satunya tim berlisensi penuh yang bisa dimainkan dalam game ini, tetapi game klasik yang dikeluarkan sebelum Piala Dunia 2002 itu disebut sebagai salah satu game speak bola terbesar dan paling berpengaruh baru-baru ini.
                    </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/kaset3.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">God Of War II</h4>
                <p class="card-text">Cerita dalam God of War II merupakan kelanjutan dari cerita dalam God of War yang pertama. Kratos telah membunuh Ares dan menggantikannya sebagai Dewa Perang (God of War). Dua tahun kemudian, Kratos, yang kini telah menjadi dewa dan memiliki segala kekuatan dewanya, terus berperang dan berusaha menguasai dunia bersama pasukan Spartanya. Atena dan para dewa lainnya tidak menyukai sikap Kratos yang menyalahgunakan kekuatannya tersebut.</p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/kaset4.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Dragon Ball Z</h4>
                <p class="card-text">Dragon Ball Z berlatar tujuh tahun setelah akhir dari anime Dragon Ball. Goku sekarang sudah menikah dan mempunyai anak bernama Gohan. Lalu seorang alien humanoid bernama Raditz tiba di bumi dan melacak Goku yang tengah berada di Kame House, dia mengungkapkan padanya bahwa dia adalah adiknya yang telah lama hilang dan kalau mereka adalah anggota sebuah ras luar bumi yang hampir punah yang disebut Saiya.</p>
            </div>
        </div>
        
    </div>
</body>
@endsection
</html>