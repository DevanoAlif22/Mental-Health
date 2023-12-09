<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - List Story</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="/css/content/listStory_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    {{-- nav --}}
    @include('layout.navbarStory')
    {{-- search --}}
    <div class="container">

        <div class="row mt-4">
            <div class="col-lg-5">
                <div class="search">
                    <div class="icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="inputan">
                        <form action="/list-story" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Cari disini..">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="filter justify-content-end">
                    <a href="/list-story-like"  style="  @if($like == true) background-color: #0044a3; @endif margin-right: 15px">Menyukai</a>
                    <a href="/list-story-view" style="  @if($view == true) background-color: #0044a3; @endif margin-right: 15px">Melihat</a>
                    <a style="background-color: #0A6EF6" href="/list-story">Muat ulang</a>
                </div>
            </div>
        </div>
    </div>
    {{-- search --}}
    {{-- isi artikel --}}
    <div class="section-cerita">

        <div class="wrap-card-cerita mt-5">
            <div class="container">


                <div class="row">


                    <div class="col-12">
                        @foreach ($listStory as $story)
                        <div class="cart-cerita mt-3">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="gambar-cerita"
                                        style="background-image: url('{{ $story->image }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 500px; height: 400px;">

                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="isi-cart-cerita">
                                        <div class="judul-cerita">
                                            <h2 style="color : white; padding-top:15px;">{{$story->title}}</h2>
                                            <p style="color:white;">{{$story->users->name}}</p>
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
                                                    <p class="text-white">View Story</p>
                                                    <h5 class="text-white">{{$story->view}}</h5>
                                                </div>
                                                <div class="gambar-view-artikel ms-2">

                                                <a href=""><img class="img-fluid"
                                                        src="{{ asset('images/content/like.png') }}"
                                                        alt=""></a>
                                            </div>
                                             <div class="isi_icon">
                                                    <p class="text-white">Like Story</p>
                                                    <h5 class="text-white">{{$story->story_like_count}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tombol-cerita mb-4">
                                            <a href="/story/{{$story->id}}">Lihat</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>



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
