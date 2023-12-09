<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Sistem Pakar</title>

    <link rel="stylesheet" href="css/navbar/style.css">
    <link rel="stylesheet" href="css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/sistemPakar/sistemPakar_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    {{-- nav --}}
    @include('layout.navbarSp')
    {{-- isi sistem pakar --}}
    <div class="container pb-5">
        @if($premium == false)
            <div style="margin-top: 20px">
                <p style="color: #f6450a">Anda tidak membeli Sistem Pakar Unlimited</p>
                <p>Percobaan ke {{Auth::user()->premium}}/10</p>
            </div>
            @else
            <div style="margin-top: 20px">
                <p style="color: rgb(37, 140, 0)">Anda sudah membeli Sistem Pakar Unlimited</p>
                <p>Percobaan unlimited</p>
            </div>
        @endif
        <div class="wrap-section-sistempakar mt-5">
            <div class="nav-sistempakar">
                <h4>Sistem Pakar</h4>
                <div class="link-pertanyaan-hasil">
                    <a href="" class="active">Pertanyaan</a>
                    <a href="">Hasil</a>
                </div>
            </div>
            <div class="wrap-pertanyaan">

                <div class="row">
                    <div class="col-12">
                        <div class="judul-pertanyaan">

                            <h4>Apa yang dirasakan 30 hari sebelumnya ?</h4>
                        </div>
                    </div>
                </div>
                <form action="/sistem-pakar" method="post">
                @csrf
                <div class="row">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($indikasi as $item)
                    <div class="col-lg-4 mt-3">
                        <div class="border-pertanyaan mb-3">
                            <p>{{$item->code}}</p>
                            <p>{{$item->name}}</p>
                            <input type="checkbox" name="indikasi[]" value="{{$item->code}}">
                        </div>

                    </div>
                    @php
                        $i +=1;
                    @endphp
                    @endforeach
                </div>
            </div>
            @if ($premium == false && Auth::user()->premium >= 10)
            <div class="kirim text-end  pb-3container">
                <button style="background-color: #86b9ff; color:black;" disabled type="submit">Kirim</button>
            </div>

            @else

            <div class="kirim text-end  pb-3container">
                <button type="submit">Kirim</button>
            </div>
            @endif
        </form>
        </div>
    </div>

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
