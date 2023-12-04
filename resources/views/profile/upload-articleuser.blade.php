<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Profil</title>
    <link rel="stylesheet" href="{{ asset('/css/edituser/style.css') }}">
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
            <div class="col-lg-8 animate__animated animate__slideInRight  col-md-12 wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        <h5><a href="/profile-about" style="font-weight: 700">POSTING ARTIKEL</a></h5>
                        <h5><a href="/profile-articleuser/{{Auth::user()->id}}"><i class="fa-solid fa-xmark"></i></a></h5>

                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">
                    @if ($errors->any() || Session::get('success'))
                         @include('layout/message')
                    @endif
                    @if ($article == null)
                    <form action="/upload-articleuser" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="judul-form mt-4">
                                    <h6>Gambar Cerita</h6>
                                </div>

                                <div class="tempat-upload-gambar mt-4">
                                    <form action="/upload-image" method="post" enctype="multipart/form-data">
                                        <div class="gambar-upload">
                                            <label for="imageUpload" class="custom-file-upload">
                                                <img src="{{ asset('images/profile/upload.png') }}" class="img-fluid"
                                                    alt="">
                                                <h6>Klik Disini Untuk Memilih gambar</h6>
                                            </label>
                                            <input type="file" class="masukgambar" name="image" id="imageUpload"
                                                accept="image/*">
                                        </div>
                                        <!-- Add a submit button if needed -->
                                        <!-- <button type="submit">Upload</button> -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="judul-form mt-4">
                                    <h6>Judul Artikel</h6>
                                </div>
                                <div class="form-upload">
                                    <input type="text" name="title">
                                </div>
                                <div class="judul-form mt-4">
                                    <h6>Isi Artikel</h6>
                                </div>

                                <textarea name="content" id="" style="width: 100%" rows="14"></textarea>
                                <div class="tombol-kirim" style="text-align: right">
                                    <button type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    @else
                    <form action="/edit-article/{{$article->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="judul-form mt-4">
                                    <h6>Gambar Cerita</h6>
                                </div>

                                <div class="tempat-upload-gambar mt-4">
                                        <div class="gambar-upload">
                                            <label for="imageUpload" class="custom-file-upload">
                                                <img src="{{ asset('images/profile/upload.png') }}" class="img-fluid"
                                                    alt="">
                                                <h6>Klik Disini Untuk Mengubah gambar (Opsional)</h6>
                                            </label>
                                            <input type="file" class="masukgambar" name="image" id="imageUpload"
                                                accept="image/*">
                                        </div>
                                </div>
                                <p style="padding-top: 10px">Gambar sebelumnya</p>
                                <img style="width: 200px" src="{{$article->image}}" alt="">
                            </div>
                            <div class="col-lg-7">
                                <div class="judul-form mt-4">
                                    <h6>Judul Artikel</h6>
                                </div>
                                <div class="form-upload">
                                    <input value="{{$article->title}}" type="text" name="title">
                                </div>
                                <div class="judul-form mt-4">
                                    <h6>Isi Artikel</h6>
                                </div>

                                <textarea name="content" id="" style="width: 100%" rows="14">{{$article->content}}</textarea>
                                <div class="tombol-kirim" style="text-align: right">
                                    <button type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endif


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
