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
            <div class="col-lg-8 animate__animated animate__slideInRight col-md-12 wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        <h5><a href="profile-about" style="font-weight: 700">POSTING CERITA</a></h5>
                        <h5><a href="/profile-storyuser/{{Auth::user()->id}}"><i class="fa-solid fa-xmark"></i></a></h5>
                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">
                    @if ($errors->any() || Session::get('success'))
                         @include('layout/message')
                    @endif

                    @if ($story == null)
                    <form action="/upload-storyuser" method="POST" enctype="multipart/form-data">
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
                                                <h6>Klik Disini Untuk Memilih gambar</h6>
                                            </label>
                                            <input type="file" class="masukgambar" name="image" id="imageUpload"
                                               >
                                        </div>
                                </div>
                            </div>
                            <!-- ... (remaining code) ... -->

                            <div class="col-lg-7">
                                <div class="judul-form mt-4">
                                    <h6>Judul Cerita</h6>
                                </div>
                                <div class="form-upload">
                                    <input type="text" name="title">
                                </div>
                                <div class="judul-form mt-4">
                                    <h6>Kategori Cerita</h6>
                                </div>
                                <div class="form-upload checkbox-container">
                                    @foreach ($category as $items)
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="{{$items->name}}" value="{{$items->name}}">
                                        {{$items->name}}
                                    </label>
                                    @endforeach
                                </div>

                                <div class="judul-form mt-4">
                                    <h6>Deskipsi Cerita</h6>
                                </div>

                                <textarea name="description" maxlength="250" id="" style="width: 100%" rows="5"></textarea>
                                <div class="judul-form mt-4">
                                    <h6>Upload Audio (MP3 atau MPEG)</h6>
                                </div>
                                <div class="input-group">
                                        <input type="file" name="audio" class="form-control">
                                </div>
                                <div class="tombol-kirim" style="text-align: right">
                                    <button type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    @else
                    <form action="/edit-story/{{$story->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="judul-form mt-4">
                                    <h6>Gambar Cerita</h6>
                                </div>

                                <div class="tempat-upload-gambar mt-4">
                                        <div class="gambar-upload">
                                            <label  for="imageUpload" class="custom-file-upload">
                                                <img src="{{ asset('images/profile/upload.png') }}" class="img-fluid"
                                                    alt="">
                                                <h6>Klik Disini Untuk Mengubah gambar (opsional)</h6>
                                            </label>
                                            <input type="file" class="masukgambar" name="image" id="imageUpload"
                                               >
                                        </div>
                                </div>
                                <p style="padding-top: 10px">Gambar sebelumnya</p>
                                <img style="width: 200px" src="{{$story->image}}" alt="">
                            </div>
                            <!-- ... (remaining code) ... -->

                            <div class="col-lg-7">
                                <div class="judul-form mt-4">
                                    <h6>Judul Cerita</h6>
                                </div>
                                <div class="form-upload">
                                    <input value="{{$story->title}}" type="text" name="title">
                                </div>
                                <div class="judul-form mt-4">
                                    <h6>Kategori Cerita</h6>
                                    <p style="color:rgb(255, 86, 86)">Kategori tidak bisa di ubah</p>
                                </div>
                                <div class="form-upload checkbox-container">
                                    @foreach ($category as $items)
                                    <label class="checkbox-label">
                                        <input disabled type="checkbox" name="{{$items->name}}" value="{{$items->name}}">
                                        {{$items->name}}
                                    </label>
                                    @endforeach
                                </div>

                                <div class="judul-form mt-4">
                                    <h6>Deskipsi Cerita</h6>
                                </div>

                                <textarea name="description" maxlength="250" id="" style="width: 100%" rows="5">{{$story->description}}</textarea>
                                <div class="judul-form mt-4">
                                    <h6>Ubah Audio MP3 atau MPEG (opsional)</h6>
                                </div>
                                <div class="input-group">
                                        <input type="file" name="audio" class="form-control">
                                    </div>
                                    <p style="padding-top: 15px">Audio Sebelumnya</p>
                                    <audio controls style="width: 100%">
                                        <source src="{{$story->audio}}" type="audio/mp3">
                                        Your browser does not support the audio element.
                                      </audio>
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
