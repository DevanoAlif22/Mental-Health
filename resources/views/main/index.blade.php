<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('/css/main/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg bg-trasnparant">
        <div class="container wrap_navbar pt-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/main/logo_mentahan.png') }}" alt="">Mental Health
            </a>
            <button style="border: none; color: rgba(0, 12, 12, 0)" class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="navigation">
                <span class="">
                    <p style="color: #0A6EF6"><i class="fa-solid fa-bars"></i></p>
                </span>
            </button>
            <div class="collapse navbar-collapse" style="justify-content: end" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="aboutme">
                    <a class="nav-link aktive" href="#aboutme">Home</a>
                    <a class="nav-link " href="#aboutme">Home</a>
                    <a class="nav-link" href="#biodata">Sistem pakar</a>
                    <button><a style="" href="">Login</a></button>


                </div>
            </div>
        </div>
    </nav>
    {{-- end nav --}}
    {{-- hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="judul">
                        <h1>Welcome Web
                            Mental Health</h1>
                    </div>
                    <div class="des">
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has</p>
                    </div>
                    <div class="tombol-hero">
                        <a href="">Our Service</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5"></div>
                        <div class="col-lg-7 col-sm-7">
                            <div class="search">
                                <div class="icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="inputan">
                                    <input type="text" placeholder="Cari disini..">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gambar">
                        <img class="img-fluid" src="{{ asset('images/main/dokter.png') }}" alt="">
                    </div>

                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" stroke="white" stroke-width="10"
                d="M0,224L40,197.3C80,171,160,117,240,128C320,139,400,213,480,213.3C560,213,640,139,720,144C800,149,880,235,960,245.3C1040,256,1120,192,1200,176C1280,160,1360,192,1400,208L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- end hero --}}
    {{-- profile --}}
    <section class="wrap-profil mb-5">
        <div class="container">
            <div class="row text-center">
                <div class="judul-profil">
                    <h4>List Profile</h4>
                </div>
                <div class="wrap-des">
                    <div class="des-profile">

                        <p>

                            Lorem Ipsum is simply dummy
                            text of the printing and typesetting
                        </p>
                    </div>
                </div>
            </div>
            <div class="see_all text-end pt-5">
                <a href="">See All..</a>
            </div>
            <div class="wrap-card-profil ">

                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-profil">
                    <div style="width: 300px">

                        <div class="image-profil">
                            <img class="img-fluid" src="{{ asset('images/main/profil1.png') }}" alt="">
                        </div>

                        <div class="section-profil text-center">
                            <h4>Maharani f</h4>
                            <p>is simply dummy text of </p>
                            <a href="">Lihat Saya</a>
                        </div>
                        <div class="sosial-media text-center">
                            <div class="wrap-media">


                                <div class="media ms-2">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                            alt=""></a>


                                </div>
                                <div class="des-media">

                                    <p>Followers</p>
                                    <p>25k</p>
                                </div>
                            </div>

                            <div class="wrap-media">

                                <div class="media">
                                    <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="des-media text-center">

                                    <p>Viewers</p>
                                    <p>25k</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>



        </div>
    </section>
    {{-- profile --}}
    {{-- artikel --}}
    <div class="row text-center mb-4">
        <div class="judul-profil">
            <h4>List Artikel</h4>
        </div>
        <div class="wrap-des">
            <div class="des-profile">

                <p>

                    Lorem Ipsum is simply dummy
                    text of the printing and typesetting
                </p>
            </div>
        </div>
    </div>
    <section class="wrap-artikel mb-5">
        <div class="container">

            <div class="wrap-card-artikel">
                <div class="see_all text-end pt-5 mb-4">
                    <a href="" class="text-white">See All..</a>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel">
                                <img class="img-fluid" src="{{ asset('images/main/gambar-artikel.png') }}"
                                    alt="">
                            </div>
                            <div class="isi-artikel">
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>25K</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>



        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" stroke="white" stroke-width="10"
                d="M0,224L40,197.3C80,171,160,117,240,128C320,139,400,213,480,213.3C560,213,640,139,720,144C800,149,880,235,960,245.3C1040,256,1120,192,1200,176C1280,160,1360,192,1400,208L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
    </section>
    {{-- artikel --}}
    {{-- serita --}}
    <div class="row text-center mb-4">
        <div class="judul-profil">
            <h4>List Cerita</h4>
        </div>
        <div class="wrap-des">
            <div class="des-profile">

                <p>

                    Lorem Ipsum is simply dummy
                    text of the printing and typesetting
                </p>
            </div>
        </div>
    </div>
    <div class="see_all text-end pt-5 mb-2 container">
        <a href="">See All..</a>
    </div>
    <div class="section-cerita">

        <div class="wrap-card-cerita">
            <div class="container">


                <div class="row">

                    <div class="col-12">

                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita">
                                        <img class="img-fluid" src="{{ asset('images/main/gambar-cerita.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita">
                                        <div class="judul-cerita">
                                            <h4>Judul cerita</h4>
                                            <p>It is a long established fact that a reader
                                                will be distracted by the readable content
                                                of a page when looking at its layout.</p>
                                        </div>
                                        <div class="kategori">
                                            <a class="text-white " style="text-decoration: none;">Bahagia</a>
                                            <a class="text-white" style="text-decoration: none;">Motivasi</a>
                                        </div>
                                        <div class="icon-view-artikel pt-3">
                                            <div class="gambar-view-artikel">

                                                <a href=""><img class="img-fluid"
                                                        src="{{ asset('images/main/icon_view.png') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bungkus-icon-tombol">

                                                <div class="isi_icon">
                                                    <p class="text-white">View artikel</p>
                                                    <h5 class="text-white">25.k</h5>
                                                </div>
                                                <div class="tombol-cerita">
                                                    <a href="">Lihat</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita">
                                        <img class="img-fluid" src="{{ asset('images/main/gambar-cerita.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita">
                                        <div class="judul-cerita">
                                            <h4>Judul cerita</h4>
                                            <p>It is a long established fact that a reader
                                                will be distracted by the readable content
                                                of a page when looking at its layout.</p>
                                        </div>
                                        <div class="kategori">
                                            <a class="text-white " style="text-decoration: none;">Bahagia</a>
                                            <a class="text-white" style="text-decoration: none;">Motivasi</a>
                                        </div>
                                        <div class="icon-view-artikel pt-3">
                                            <div class="gambar-view-artikel">

                                                <a href=""><img class="img-fluid"
                                                        src="{{ asset('images/main/icon_view.png') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bungkus-icon-tombol">

                                                <div class="isi_icon">
                                                    <p class="text-white">View artikel</p>
                                                    <h5 class="text-white">25.k</h5>
                                                </div>
                                                <div class="tombol-cerita">
                                                    <a href="">Lihat</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita">
                                        <img class="img-fluid" src="{{ asset('images/main/gambar-cerita.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita">
                                        <div class="judul-cerita">
                                            <h4>Judul cerita</h4>
                                            <p>It is a long established fact that a reader
                                                will be distracted by the readable content
                                                of a page when looking at its layout.</p>
                                        </div>
                                        <div class="kategori">
                                            <a class="text-white " style="text-decoration: none;">Bahagia</a>
                                            <a class="text-white" style="text-decoration: none;">Motivasi</a>
                                        </div>
                                        <div class="icon-view-artikel pt-3">
                                            <div class="gambar-view-artikel">

                                                <a href=""><img class="img-fluid"
                                                        src="{{ asset('images/main/icon_view.png') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bungkus-icon-tombol">

                                                <div class="isi_icon">
                                                    <p class="text-white">View artikel</p>
                                                    <h5 class="text-white">25.k</h5>
                                                </div>
                                                <div class="tombol-cerita">
                                                    <a href="">Lihat</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    {{-- serita --}}
    {{-- footer --}}
    <footer>
        <div class="container">
            <div class="row wrap-footer">
                <div class="col-lg-4 pt-4 ">
                    <div class="logo-footer ">
                        <div class="bungkus-logo text-center">

                            <img class="img-fluid" src="{{ asset('images/main/logo-putih.png') }}" alt="">
                        </div>
                    </div>
                    <div class="des-footer ">


                        <p>It is a long established fact that a reader
                            will be distracted by the readable content
                            of a page when looking at its layout.</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="judul-media-footer">
                        <p>Social Media</p>
                    </div>
                    <div class="icon-media-footer">
                        <div class="wrap-link-media">

                            <a href=""> <img class="img-fluid" src="{{ asset('images/main/ig.png') }}"
                                    alt=""></a>
                            <a href=""> <img class="img-fluid" src="{{ asset('images/main/fb.png') }}"
                                    alt=""></a>
                            <a href=""> <img class="img-fluid" src="{{ asset('images/main/linkd.png') }}"
                                    alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="judul-kontak">
                        <p>Contact Us</p>
                    </div>
                    <div class="isi-kontak">
                        <p>yustinamalia22@gmail.com</p>
                        <p style="margin-top: -1rem">089616915841</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="create text-white text-center pt-2">
            <p>@Createbykakacksquad</p>
        </div>
    </footer>
    {{-- end footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
