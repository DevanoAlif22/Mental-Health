<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/content/listArticle_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-trasnparant animate__animated animate__fadeInDown">
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
    {{-- search --}}
    <div class="container">

        <div class="row mt-4">
            <div class="col-lg-5">
                <div class="search">
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="inputan">
                        <input type="text" placeholder="Cari disini..">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="filter">
                    <a href="" class="active">Terlaris</a>
                    <a href="">Terlaris</a>
                    <a href="">Terlaris</a>
                    <a href="">Terlaris</a>
                </div>
            </div>
        </div>
    </div>
    {{-- search --}}
    {{-- isi artikel --}}
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

                                        <a> <img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"></a>
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
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"></a>
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
                                <h4>Pelangi setelah hujan badai</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>Ferry yulia</p>
                                        <a href="">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"></a>
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


    </div>
    </section>
    {{-- isi profil --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
