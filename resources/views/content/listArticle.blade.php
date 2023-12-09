<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - List Artikel</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/content/listArticle_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        {{-- nav --}}
        @include('layout.navbarArticle')
    {{-- search --}}
    <div class="container">

        <div class="row mt-4">
            <div class="col-lg-5">
                <div class="search">
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="inputan">
                        <form action="/list-article" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Cari disini..">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="filter justify-content-end">
                    <a style=" @if($like == true) background-color: #0044a3; @endif margin-right: 20px" href="/list-article-like">Menyukai</a>
                    <a style=" @if($view == true) background-color: #0044a3; @endif margin-right: 20px" href="/list-article-view">Melihat</a>
                    <a style="background-color: #0A6EF6" href="/list-article">Muat ulang</a>
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
                    @foreach ($listArticle as $article)
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
                                        <div class="icon-lihat">

                                            <a> <img class="img-fluid" src="{{ asset('images/content/like.png') }}"></a>
                                            <p class="mt-3">{{$article->article_like_count}}</p>
                                        </div>
                                        <div class="icon-lihat">

                                            <a> <img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"></a>
                                            <p class="mt-3">{{$article->view}}</p>
                                        </div>
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

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
