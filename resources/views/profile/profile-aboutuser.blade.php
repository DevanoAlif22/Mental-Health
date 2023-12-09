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
            <div class="col-lg-3  wrap-profile">
                @include('layout/profile')
            </div>
            <div class="col-lg-8 animate__animated animate__slideInRight  wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        @if ($profilUser == true)
                        <h5><a style="color: #0a6ef6" href="/profile-aboutuser/{{Auth::user()->id}}">Tentang</a></h5>
                        <h5><a  href="/profile-articleuser/{{Auth::user()->id}}">Artikel</a></h5>
                        <h5><a href="/profile-storyuser/{{Auth::user()->id}}">Cerita</a></h5>

                        @else
                        <h5><a style="color: #0a6ef6" href="/profile-aboutuser/{{$profil->id}}">Tentang</a></h5>
                        <h5><a  href="/profile-articleuser/{{$profil->id}}">Artikel</a></h5>
                        <h5><a href="/profile-storyuser/{{$profil->id}}">Cerita</a></h5>

                        @endif
                    </div>
                </div>
                @if ($profilUser == true)
                <div class="row">
                    <div class="col-12">
                        <div class="link-edit">
                            <a href="/edit-aboutuser">Edit</a>
                        </div>
                    </div>
                </div>
                @endif
                <div class="container isi-tentang" style="padding-top: 25px">
                    @if ($profil->profiles->biodata == null)
                    <p>
                        @if ($profilUser == false)
                        Tentang profil belum diperbarui
                        @else
                        Perbarui tentang profil
                        @endif
                    </p>

                    @else
                    <p>
                        {{$profil->profiles->biodata}}
                    </p>
                    @endif
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
