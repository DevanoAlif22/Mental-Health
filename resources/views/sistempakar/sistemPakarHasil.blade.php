<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/sistemPakar/sistemPakarHasil_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-trasnparant">
        <div class="container wrap_navbar pt-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/main/logo_mentahan.png') }}" alt="">Mental Health
            </a>
            <button style="border: none; color: rgba(0, 12, 12, 0)" class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="navigation">
                <span class="">
                    <p style="color: #0A6EF6"><i class="fa-solid fa-bars"></i></p>
                </span>
            </button>
            <div class="collapse navbar-collapse" style="justify-content: end" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="aboutme">
                    <a class="nav-link aktive" href="#aboutme">Home</a>
                    <a class="nav-link " href="#aboutme">Home</a>
                    <a class="nav-link" href="#biodata">Sistem pakar</a>
                    <button><a style="" href="">Login</a></button>


                </div>
            </div>
        </div>
    </nav>

    {{-- isi sistem pakar --}}
    <div class="container pb-5">

        <div class="wrap-section-sistempakar mt-5">
            <div class="nav-sistempakar">
                <h4>Sistem Pakar</h4>
                <div class="link-pertanyaan-hasil">
                    <a href="">Pertanyaan</a>
                    <a href="" class="active">Hasil</a>
                </div>
            </div>
            <div class="wrap-pertanyaan">

                <div class="row">
                    <div class="col-12">
                        <div class="judul-pertanyaan">

                            <h4>Hasil Diagnosa</h4>
                        </div>
                        @if ($hasil == true)
                        <div class="hasil-diagnosa mt-3">
                            <h6>Anda mengalami {{$diagnosa->name}}</h6>
                            <ul class="mt-3">
                                Saran : {{$diagnosa->suggest}}
                            </ul>
                            <h6>INSTRUMEN YANG DIPILIH</h6>
                            <ol class="mt-3">
                                @foreach ($gejala as $item)

                                <li>{{$item->name}}</li>
                                @endforeach
                            </ol>
                        </div>

                        @else
                        <p>Anda tidak terdiagnosa penyakit kesehatan mental atau inputan anda belum akurat</p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="kirim text-end  pb-3container">
                <a href="/sistem-pakar">Selesai</a>
            </div>
        </div>
    </div>
    {{-- isi sistem pakar --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
