<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/sistemPakar/sistemPakar_style.css') }}">
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
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        <div class="border-pertanyaan mb-3">
                            <p>Sering Menderita Sakit Kepala</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Tidak Memiliki Nafsu Makan</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Sulit Tidur</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mudah Takut </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Tegang, Cemas, Atau Kuatir</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Tangan Mudah Gemetar</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Pencernaan Terganggu/Buruk</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Sulit Berpikir Jernih </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Tidak Bahagia</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Sering Menangis</p>
                            <input type="checkbox">
                        </div>

                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Sulit Untuk Menikmati Kegiatan Sehari-Hari</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Sulit Mengambil Keputusan</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Pekerjaan Sehari-Hari Terganggu</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Tidak Mampu Melakukan Hal-Hal Yang Bermanfaat Dalam Hidup 0</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Kehilangan Minat Pada Berbagai Hal </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Tidak Berharga</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mempunyai Keinginan Untuk Mengakhiri Hidup </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Lelah Sepanjang Waktu</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mengalami Rasa Tidak Enak Diperut</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mudah Lelah</p>
                            <input type="checkbox">
                        </div>

                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="border-pertanyaan mb-3">
                            <p>Lebih Sering Menggunakan Alkohol/Zat Terlarang Dari Biasanya</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Seseorang Bermaksud Mencelakai Diri Anda</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Ada Sesuatu Yang Mengganggu Pikiran Anda</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mendengar Suara-Suara Yang Tidak Didengar Orang Lain</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Mengalami Mimpi Bencana Atau Seakan Bencana Itu Muncul Kembali</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Menghindari Berbagai Kegiatan, Tempat, Orang, Atau Pikiran Yang Mengingatkan Akan
                                Bencana Tersebut
                            </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Kurang Tertarik Terhadap Teman-Teman Atau Kegiatan Sehari-Hari </p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Merasa Sangat Sedih Apabila Berada Dalam Situasi Yang Mengingatjan Akan Bencana
                                Tersebut?</p>
                            <input type="checkbox">
                        </div>
                        <div class="border-pertanyaan mb-3">
                            <p>Sulit Menghayati Dan Mengeluarkan Perasaan</p>
                            <input type="checkbox">
                        </div>


                    </div>
                </div>
            </div>
            <div class="kirim text-end  pb-3container">
                <a href="">Kirim</a>
            </div>
        </div>
    </div>
    {{-- isi sistem pakar --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
