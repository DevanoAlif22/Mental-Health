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
                <div class="wrap">
                    <div>
                        <div class="img-profile"
                            style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; width: 100%; height: auto;">

                        </div>
                        <h3><b>Devano Alif</b></h3>
                    </div>
                </div>
                <div class="wrap">
                    <p style="color: #a6a6a6; text-align: center">Bergabung pada 2023-02-13</p>
                </div>
                <div class="wrap category">
                    <div style="width: 100%; display:flex; justify-content:center;">
                        <div style="width: 100%;">
                            <div style="width: 100%; display:flex; justify-content:center;">
                                <div style="margin-right: 20px; display:flex; ">
                                    <img style="background-color: #0a6ef6;"
                                        src="{{ asset('images/profile/follower.png') }}" alt="">
                                    <div style="margin-left: 10px; padding-top:5px">
                                        <h6 style="line-height: 0.3cm">Pengikut</h6>
                                        <h6>3.452</h6>
                                    </div>
                                </div>
                                <div style="margin-right: 20px; display:flex">
                                    <button style="background-color: white; border: none; ">
                                        <img style="background-color:  #0a6ef6;"
                                            src="{{ asset('images/profile/view.png') }}" alt="">
                                    </button>
                                    <div style="margin-left: 10px; padding-top:5px">
                                        <h6 style="line-height: 0.3cm">Dilihat</h6>
                                        <h6>4.052</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap">
                                <a href="edit-profileuser"> <button class="btn-follow margin-auto"><b
                                            style="font-size: 20px">Edit
                                            Profile</b></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap">
                    <div style="width: 85% ;">
                        <div class="gender d-flex justify-content-between mb-2" style="width: 100%;">
                            <h6 style="padding-top: 10px; color:#8F8F8F">Laki-laki</h6>
                            <img style="width: 40px; height:40px" src="{{ asset('images/profile/gender.png') }}"
                                alt="">
                        </div>
                        <div class="line" style="width:100%; height:3px; background-color: #D9D9D9;"></div>
                        <div class="gender d-flex justify-content-between mb-2 mt-3" style="width: 100%;">
                            <h6 style="padding-top: 10px; color:#8F8F8F">20 Tahun</h6>
                            <img style="width: 40px; height:40px" src="{{ asset('images/profile/age.png') }}"
                                alt="">
                        </div>
                        <div class="line mb-3" style="width:100%; height:3px; background-color: #D9D9D9;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 animate__animated animate__slideInRight wrap-profile-2 description">
                <div class="container-fluid wrap-list" style="border-bottom: 3px solid #D9D9D9;">
                    <div class="list" style="display: flex; justify-content:space-between">
                        <h5><a href="profile-about" style="font-weight: 700">EDIT PROFILE</a></h5>
                        <h5><a href="profile-aboutuser"><i class="fa-solid fa-xmark"></i></a></h5>

                    </div>
                </div>
                <div class="container list-article" style="padding-top: 25px">


                    <div class="row mt-5">
                        <div class="col-lg-3">
                            <div class="gambar-user"
                                style="background-image: url('{{ asset('images/main/tesres.jpg') }}'); background-size: cover;background-position: center;background-repeat: no-repeat; width: 100%; height: auto;">

                            </div>
                            <div class="ubah-profileuser">
                                <a href="">UBAH PROFILE</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="edit-judul mt-4">
                                <h6>Nama</h6>
                                <div class="edit-isi">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="edit-judul mt-4">
                                <h6>Jenis Kelamin</h6>
                                <div class="edit-isi">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="edit-judul mt-4">
                                <h6>Umur</h6>
                                <div class="edit-isi">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="kirim-edit">
                                <a href="">Simpan Prubahan</a>
                            </div>
                        </div>
                    </div>




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
