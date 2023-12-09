<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Daftar</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="/css/login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
  <body>


    <div class="container-fluid" style="">
            <div class="row">
                <div class="col-md-6"  style="background-color: #0A6EF6; height:100vh">
                    <div class="container">
                        <img class="logo" src="{{ asset('images/login/logo.png')}}" alt="">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <img src="{{asset("/images/login/slide1.png")}}" class="img-caraousel d-block mx-auto " alt="...">
                                    <div style="text-align: left" class="carousel-caption">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <img src="{{asset("/images/login/slide2.png")}}" class="d-block mx-auto  img-caraousel" alt="...">
                                    <div style="text-align: left" class="carousel-caption">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <img src="{{asset("/images/login/slide3.png")}}" class="d-block mx-auto  img-caraousel" alt="...">
                                    <div style="text-align: left" class="carousel-caption">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container" style="color: white; ">
                            <h2 style="padding-left: 15px;">Selamat datang!</h2>
                            <p style="padding-left: 15px;  margin-bottom: 65px">Di website Mental health, Pulihkan kesehatan mental mu disini!</p>

                        </div>


                    </div>
                </div>
                <div class="col-md-6" style="display: flex;">
                    <div class="form-login" style="margin: auto">
                        <h1 style="color: #0A6EF6">Daftar</h1>
                        <p style="color: #999999; margin-bottom:20px; font-size: 15px">Ini akan memakan waktu kurang dari 1 menit</p>


                        <div class="d-flex flex-column">
                            @if ($errors->any() || Session::get('success'))
                                @include('layout/message')
                            @endif
                            <form action="/register" method="POST">
                            @csrf
                            <div class="d-flex">
                                <input class="input-login" type="text" name="name" id="" placeholder="Nama">
                                <i class="fa-solid fa-user" style="color: #a6a6a6; padding-top: 10px; padding-left: 10px"></i>
                            </div>
                            <div class="d-flex">
                                <input class="input-login" type="email" name="email" id="" placeholder="Email">
                                <i class="fa-solid fa-user" style="color: #a6a6a6; padding-top: 10px; padding-left: 10px"></i>
                            </div>
                            <div class="d-flex">
                                <input class="input-login" type="password" name="password" id="" placeholder="Kata sandi">
                                <i class="fa-solid fa-lock" style="color: #a6a6a6; padding-top: 10px; padding-left: 10px"></i>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" name="remember" id="">
                                <p style="color: #999999; margin-left: 10px; padding-top:10px;">ingat saya</p>
                            </div>
                            <button type="submit" class="btn" style="background-color: #0A6EF6; color: white; height: 40px !important; width:300px !important;">Daftar</button>
                            </form>
                            <a href="/login"> <span style="color: #a6a6a6">Sudah punya akun?</span>  Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tambahkan script ini untuk membuat carousel bergerak secara otomatis
            var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleCaptions'), {
                interval: 3000, // Ganti dengan interval yang diinginkan dalam milidetik (contohnya 3000 untuk 3 detik)
                wrap: true, // Untuk membuat carousel bergerak secara infinity
                pause: 'hover' // Menghentikan gerakan carousel saat kursor di atasnya
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
