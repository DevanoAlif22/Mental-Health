<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Profil</title>
    <link rel="stylesheet" href="{{ asset('/css/profileuser/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('/css/content/listStory_style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('/css/content/listArticle_style.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <img class="bg-profile" src="{{ asset('images/profile/bg.png') }}" alt="">

    <div class="container-fluid mb-3 p-5" style="margin-top: -145px">
        <div class="row">
            <div class="col-lg-3 col-md-12 wrap-profile">
                @include('layout/profile')
            </div>
            <div class="col-lg-8 animate__animated animate__slideInRight col-md-12 wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        @if ($profilUser == true)
                        <h5><a href="/profile-aboutuser/{{Auth::user()->id}}">Tentang</a></h5>
                        <h5><a  href="/profile-articleuser/{{Auth::user()->id}}">Artikel</a></h5>
                        <h5><a style="color: #0a6ef6" href="/profile-storyuser/{{Auth::user()->id}}">Cerita</a></h5>

                        @else
                        <h5><a href="/profile-aboutuser/{{$profil->id}}">Tentang</a></h5>
                        <h5><a  href="/profile-articleuser/{{$profil->id}}">Artikel</a></h5>
                        <h5><a style="color: #0a6ef6" href="/profile-storyuser/{{$profil->id}}">Cerita</a></h5>

                        @endif
                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">
                    @if ($errors->any() || Session::get('success'))
                         @include('layout/message')
                    @endif
                    <div class="row">
                        @if ($profilUser == true)
                        <div class="upload-story mb-5" style="text-align: right">
                            <a href="/upload-storyuser">Posting</a>
                        </div>
                        @endif

                        @if ($listStory->isEmpty() && $profilUser == true)
                        <p>Posting Story Pertama Anda</p>
                        @endif
                        @if ($listStory->isEmpty() && $profilUser == false)
                        <p>Pengguna ini belum memosting story sama sekali</p>
                        @endif
                        @foreach ($listStory as $story)
                        <div class="col-12" >
                            <div class="cart-cerita mt-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="gambar-cerita"
                                            style="background-image: url('{{ asset($story->image) }}'); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 400px; height:300px">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 isi-card"
                                        <div class="isi-cart-cerita">
                                            <div class="judul-cerita">
                                                <h4>{{$story->title}}</h4>
                                                <p>{{ Illuminate\Support\Str::limit($story->description, 100) }}.</p>
                                            </div>
                                            <div class="kategori">
                                                @foreach ($story->category as $category)
                                                <a class="text-white " style="text-decoration: none;">{{$category->storyCategory->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="icon-view-artikel pt-3">
                                                <div class="gambar-view-artikel">

                                                    <a href="" style="margin-top: -5px"><img class="img-fluid"
                                                            src="{{ asset('images/main/icon_view.png') }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="bungkus-icon-tombol" style="margin-top: -7px">

                                                    <div class="isi_icon">
                                                        <p class="text-white">View artikel</p>
                                                        <h5 class="text-white">{{$story->view}}</h5>
                                                    </div>
                                                    <div class="tombol-cerita">
                                                        <a href="/story/{{$story->id}}">Lihat</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="link-edit-hapus">
                                                @if ($profilUser == true)
                                                <div class="edit me-3">
                                                    <a href="/edit-story/{{$story->id}}">Edit</a>
                                                </div>
                                                <div class="hapus">
                                                    <a href="/delete-story/{{$story->id}}">Hapus</a>
                                                </div>

                                                @endif
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
