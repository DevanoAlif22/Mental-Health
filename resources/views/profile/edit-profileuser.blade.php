<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Profil</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="/css/edituser/style.css">
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
                        <h5><a href="profile-about" style="font-weight: 700">EDIT PROFIL</a></h5>
                        <h5><a href="/profile-aboutuser/{{Auth::user()->id}}"><i class="fa-solid fa-xmark"></i></a></h5>

                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">
                    @if ($errors->any() || Session::get('success'))
                         @include('layout/message')
                    @endif
                    <form action="/edit-profileuser" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-lg-3">
                                <div class="gambar-user" style="
                                    background-image: url(
                                        @if(Auth::user()->profiles->image == null)
                                            '/images/profile/profile-null.png'
                                        @else
                                            {{Auth::user()->profiles->image}}
                                        @endif
                                        );
                                    background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    width: 100%;
                                    height: 200px;
                                    border-radius: 10px; <!-- Tambahkan border-radius untuk sudut yang lebih halus -->
                                    border: 2px solid #ddd; <!-- Tambahkan border untuk tampilan yang lebih bersih -->
                                    overflow: hidden; <!-- Hilangkan bagian gambar yang melebihi border -->
                                "></div>
                                <div class="ubah-profileuser" style="margin-top: 10px;">
                                    <div class="d-flex justify-content-center" style="width: 100%">

                                        <input type="file" name="image" id="profile_image" >

                                    </div>
                                    <label for="profile_image" class="btn btn-primary mt-3" style="align-items:center; text-align:center; display:flex; justify-content: center;">
                                        UBAH GAMBAR
                                    </label>
                                 </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="edit-judul mt-4">
                                    <h6>Nama</h6>
                                    <div class="edit-isi">
                                        <input required name="name" type="text" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="edit-judul mt-4">
                                    <h6>Jenis Kelamin</h6>
                                    <div class="edit-isi d-flex">
                                        <input style="margin-right: 10px" @if (Auth::user()->profiles->gender == 'Laki - laki')
                                        checked
                                        @endif id="checkbox-laki"  type="checkbox" name="gender" value="Laki - laki">
                                        <label for="checkbox-laki" style="margin-right: 15px; color:white;cursor: pointer; display:flex">
                                            Laki-laki
                                        </label>
                                        <input style="margin-right: 10px" id="checkbox-perempuan" @if (Auth::user()->profiles->gender == 'Perempuan')
                                        checked
                                        @endif type="checkbox" name="gender" value="Perempuan">
                                        <label for="checkbox-perempuan" style="color:white;cursor: pointer; display:flex">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="edit-judul mt-4">
                                    <h6>Umur</h6>
                                    <div class="edit-isi">
                                        <input required min="1" name="age" type="number" value="{{Auth::user()->profiles->age}}">
                                    </div>
                                </div>
                                <div class="kirim-edit">
                                    <button type="submit">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
