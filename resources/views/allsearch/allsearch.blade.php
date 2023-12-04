<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/allsearch/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/profile_style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/listArticle_style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/listStory_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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
                    <a class="nav-link" href="#biodata">Sistem pakar</a>
                    @if (Auth::user())
                        @if ($imageProfile == null)
                            <a class="nav-link" href="/profile-about"><img
                                    style="width: 35px; height: 35px; margin-top:-10px"
                                    src="{{ asset('images/profile/profile-null.png') }}" alt=""></a>
                        @else
                            <a class="nav-link" href="/profile-about"><img style="width: 40px; height: 40px;"
                                    src="{{ asset('images/main/user.png') }}" alt=""></a>
                        @endif
                    @else
                        <button><a style="" href="{{ route('auth') }}">Login</a></button>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    {{-- hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="judul-all">
                        <a href="">Semua Pencarian</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-2 col-sm-5"></div>
                        <div class="col-lg-10 col-sm-7">
                            <div class="search" style=" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <div class="icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="inputan">
                                    <input type="text" placeholder="Cari disini..">
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="judul-yangdicari">

                <p>Profil Yang Dicari</p>
            </div>
        </div>

    </section>
    <section class="wrap-profil mb-5">
        <div class="container">


            <div class="wrap-card-profil ">
                <div class="row mt-5">
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                <div class="row mt-5">
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">Davano alif</h4>

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

            <div class="judul-yangdicari mt-5" style="margin-bottom: -12rem;">

                <p>Artikel Yang Dicari</p>
            </div>

        </div>

    </section>
    <section class="wrap-artikel">
        <div class="container">

            <div class="wrap-card-artikel">
                <div class="see_all text-end pt-5 mb-4">
                    <a href="" class="text-white">See All..</a>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 357px; height: 200px;">

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
                            <div class="gambar-artikel"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 357px; height: 200px;">

                            </div>
                            <div class="isi-artikel">
                                <h4>Langit Senja: Misteri Hilangnya Waktu</h4>
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
                            <div class="gambar-artikel"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 357px; height: 200px;">

                            </div>
                            <div class="isi-artikel">
                                <h4>Langit Senja: Misteri Hilangnya Waktu</h4>
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

    </section>
    <div class="section-cerita " style="margin-top: -2rem">


        <div class="wrap-card-cerita mt-5">
            <div class="container">

                <div class="judul-yangdicari mb-2">

                    <p>Cerita Yang Dicari</p>
                </div>
                <div class="row">


                    <div class="col-12">

                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita"
                                        style="background-image: url('{{ asset('images/main/gambar-cerita.png') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 500px; height: 300px;">

                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita">
                                        <div class="judul-cerita">
                                            <h4>Langit Senja: Misteri Hilangnya Waktu</h4>
                                            <p>Seorang pembaca dapat teralihkan oleh konten yang dapat dibaca ketika
                                                melihat tata letak halaman. Penting memastikan kontennya mudah dibaca
                                                dan menarik perhatian. </p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
