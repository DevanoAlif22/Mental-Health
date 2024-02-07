<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Pencarian</title>
    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/allsearch/style.css">
    <link rel="stylesheet" href="/css/content/profile_style.css">
    <link rel="stylesheet" href="/css/content/listArticle_style.css">
    <link rel="stylesheet" href="/css/content/listStory_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    {{-- nav --}}
    @include('layout.navbarDefault')

    {{-- hero --}}
    <section class="hero-search">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-6" >

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

                                    <form action="/all-search" method="post">
                                        @csrf
                                        <input name="search" type="text" placeholder="Cari disini..">
                                    </form>
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
                    @if (count($data[0]) === 0)
                        <p>Tidak ada profil yang sesuai pencarian</p>
                    @else
                    @foreach ($data[0] as $profil)
                    <div class="col-lg-3 mt-2">

                        <div class="card-profil">


                            <div class="img-profile"
                            @if ($profil->profiles->image == null)
                                style="background-image: url('{{ asset('images/profile/null.png') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            @else
                                style="background-image: url({{ asset($profil->profiles->image) }}); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400; height: 200px;">

                            @endif
                            </div>

                            <div class="section-profil text-center">
                                <h4 class="mb-3">{{$profil->name}}</h4>

                                <a href="/profile-aboutuser/{{$profil->id}}">Lihat Saya</a>
                            </div>
                            <div class="sosial-media text-center">
                                <div class="wrap-media">

                                    <div class="media ms-2">
                                        <a><img class="img-fluid" src="{{ asset('images/main/icon_pengikut.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="des-media">

                                        <p>Followers</p>
                                        <p>{{$profil->follower_count}}</p>
                                    </div>
                                </div>

                                <div class="wrap-media">

                                    <div class="media">
                                        <a><img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="des-media text-center">

                                        <p>Viewers</p>
                                        <p>{{$profil->profiles->view}}</p>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    @endforeach

                    @endif

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
                    @if (count($data[1]) === 0)
                    <p>Tidak ada artikel yang sesuai dengan pencarian</p>
                    @else

                    @foreach ($data[1] as $article)
                    <div class="col-lg-4 mb-3">
                        <div class="card-artikel">
                            <div class="gambar-artikel"
                                style="background-image: url('{{ asset($article->image) }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 450px; height: 200px;">

                            </div>
                            <div class="isi-artikel">
                                <h4>{{$article->title}}</h4>
                                <div class="penuli-tombol">
                                    <div class="fery">

                                        <p>{{$article->users->name}}</p>
                                        <a href="/article/{{$article->id}}">Lihat</a>
                                    </div>
                                    <div class="icon-mata">

                                        <a> <img class="img-fluid"
                                                src="{{ asset('images/main/icon_view.png') }}"></a>
                                        <p>{{$article->view}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    @endforeach

                    @endif
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

                    @if (count($data[2]) === 0)
                    <p>Tidak ada cerita yang sesuai dengan pencarian</p>
                    @else
                    @foreach ($data[2] as $story)
                    <div class="col-12">

                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita"
                                        style="background-image: url('{{ asset('images/main/gambar-cerita.png') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 500px; height: 300px;">

                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita mt-3">
                                        <div class="judul-cerita">
                                            <h4>{{$story->title}}</h4>
                                            <p>{{ Illuminate\Support\Str::limit($story->description, 150) }}</p>
                                        </div>
                                        <div class="kategori">
                                            @foreach ($story->category as $category)
                                            <a class="text-white " style="text-decoration: none;">{{$category->storyCategory->name}}</a>
                                            @endforeach
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

                    @endforeach

                    @endif



                </div>
            </div>

        </div>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
