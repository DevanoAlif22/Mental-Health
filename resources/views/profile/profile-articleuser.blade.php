<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Profil</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="/css/profileuser/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    {{-- nav --}}
    @include('layout.navbarDefault')

    <img class="bg-profile" src="{{ asset('images/profile/bg.png') }}" alt="">

    <div class="container-fluid mb-3 p-5" style="margin-top: -145px">
        <div class="row">
            <div class="col-lg-3 col-md-12 wrap-profile">
                @include('layout/profile')
            </div>
            <div class="col-lg-8 col-md-12 animate__animated animate__slideInRight wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        @if ($profilUser == true)
                        <h5><a href="/profile-aboutuser/{{Auth::user()->id}}">Tentang</a></h5>
                        <h5><a style="color: #0a6ef6" href="/profile-articleuser/{{Auth::user()->id}}">Artikel</a></h5>
                        <h5><a href="/profile-storyuser/{{Auth::user()->id}}">Cerita</a></h5>

                        @else
                        <h5><a href="/profile-aboutuser/{{$profil->id}}">Tentang</a></h5>
                        <h5><a style="color: #0a6ef6" href="/profile-articleuser/{{$profil->id}}">Artikel</a></h5>
                        <h5><a href="/profile-storyuser/{{$profil->id}}">Cerita</a></h5>

                        @endif
                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">
                    @if ($errors->any() || Session::get('success'))
                                    @include('layout/message')
                    @endif
                    <div class="row mb-3">
                        @if ($profilUser == true)
                        <div class="upload-story mb-5" style="text-align: right;">
                            <a href="/upload-articleuser">Posting</a>
                        </div>
                        @endif

                        @if ($listArticle->isEmpty() && $profilUser == true)
                        <p>Posting Artikel Pertama Anda</p>
                        @endif
                        @if ($listArticle->isEmpty() && $profilUser == false)
                        <p>Pengguna ini belum memosting Artikel sama sekali</p>
                        @endif

                        @foreach ($listArticle as $article)
                            <div class="col-lg-4 mb-3">
                                <div class="card-artikel">
                                    <div class="gambar-artikel"
                                        style="background-image: url('{{ asset($article->image) }}'); background-size: cover;background-position: center;background-repeat: no-repeat; width: 100%; height: auto;">

                                    </div>

                                    <div class="isi-artikel">
                                        <h4>{{$article->title}}</h4>
                                        <div class="penuli-tombol">
                                            <div class="nama-tombol">

                                                <p>{{$article->users->name}}</p>
                                                <a href="/article/{{$article->id}}">Lihat</a>
                                            </div>
                                            @if ($profilUser == true)
                                            <div class="hapus-edit mt-2">
                                                <div class="edit">

                                                    <a href="/edit-article/{{$article->id}}">Edit</a>
                                                </div>
                                                <div class="hapus mt-3">

                                                    <a href="/delete-article/{{$article->id}}">Hapus</a>
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                        <div class="icon-mata pt-3">
                                            <a> <img class="img-fluid" src="{{ asset('images/main/icon_view.png') }}"></a>
                                            <p>{{$article->view}}</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
