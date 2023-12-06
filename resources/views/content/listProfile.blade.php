<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/content/profile_style.css') }}">
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
                        <form action="/list-profile" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Cari disini..">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="filter justify-content-end">
                    <a style=" @if($follow == true) background-color: #0044a3; @endif margin-right: 20px" href="/list-profile-follower">Pengikut</a>
                    <a style=" @if($view == true) background-color: #0044a3; @endif margin-right: 20px" href="/list-profile-view">Melihat</a>
                    <a style="background-color: #0A6EF6" href="/list-profile">Muat ulang</a>
                </div>
            </div>
        </div>
    </div>
    {{-- search --}}
    {{-- isi profil --}}
    <section class="wrap-profil mb-5">
        <div class="container">


            <div class="wrap-card-profil ">
                <div class="row mt-5">
                    @foreach ($listUser as $user)
                    <div class="col-lg-3 mt-2 mb-4">

                        <div class="card-profil">


                            <div class="img-profile"
                                @if ($user->profiles->image == null)
                                style="background-image: url('{{ asset('images/profile/null.png') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                                @else
                                style="background-image: url({{ asset($user->profiles->image) }}); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                                @endif

                            </div>

                            <div class="section-profil text-center">
                                <h4 style="margin-bottom: 15px;">{{$user->name}}</h4>
                                <a href="/profile-aboutuser/{{$user->id}}">Lihat Saya</a>
                            </div>
                            <div class="sosial-media text-center">
                                <div class="wrap-media">


                                    <div class="media ms-2">
                                        <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="des-media">

                                        <p>Followers</p>
                                        <p>{{$user->follower_count}}</p>
                                    </div>
                                </div>

                                <div class="wrap-media">

                                    <div class="media">
                                        <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="des-media text-center">

                                        <p>Viewers</p>
                                        <p>{{$user->profiles->view}}</p>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    @endforeach

                </div>

            </div>

        </div>
    </section>
    {{-- isi profil --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
