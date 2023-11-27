<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Story</title>
    <link rel="stylesheet" href="{{asset('/css/content/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>

    <div class="container-fluid mb-5">
        <div class="container pt-3 mb-3">
            <i class="fa-solid fa-arrow-left fa-3x"></i>
        </div>
        <div class="container">
            <img class="img-article" style="width: 100%" src="{{asset('/images/content/story1.jpg')}}" alt="">
        </div>
        <div class="container mb-5">
            <audio controls style="width: 100%">
                <source src="{{asset('mp3/story1.mpeg')}}" type="audio/mp3">
                Your browser does not support the audio element.
              </audio>
        </div>
        <div class="container" style="margin-bottom: 30px;">
            <div class="row">

                <div class="col-md-6 d-flex">
                    <img class="img-profile" src="{{asset('images/content/user1.png')}}" alt="">
                    <div style="margin-left: 20px">
                        <h3>Pelangi Setelah Hujan</h3>
                        <h6>Ruben Saragih</h6>
                    </div>

                </div>

                <div class="col-md-6">
                <div class="d-flex category">
                    <div style="margin-right: 20px; display:flex">
                        <img style="background-color: #0a6ef6;" src="{{asset('images/content/view.png')}}" alt="">
                        <div style="margin-left: 10px; padding-top:5px">
                            <h6 style="line-height: 0.3cm">Dilihat</h6>
                            <h6>3.452</h6>
                        </div>
                    </div>
                    <div style="margin-right: 20px; display:flex">
                        <button style="background-color: white; border: none; ">
                            <img style="background-color: #a6a6a6;" src="{{asset('images/content/like.png')}}" alt="">
                        </button>
                        <div style="margin-left: 10px; padding-top:5px">
                            <h6 style="line-height: 0.3cm">Disukai</h6>
                            <h6>4.052</h6>
                        </div>
                    </div>
                    <div style="margin-right: 20px; display:flex; ">
                        <img style="background-color: #0a6ef6;" src="{{asset('images/content/comment.png')}}" alt="">
                        <div style="margin-left: 10px; padding-top:5px">
                            <h6 style="line-height: 0.3cm">Komentar</h6>
                            <h6>24</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container mb-5" style="margin-bottom: 30px;">
            <div class="d-flex">
                <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">June 18, 2023 10:15</p>
            </div>
            <div class="content">
                Pelangi sehabis hujan adalah topik cerita hepi kali ini. Krisis dalam bahasa Mandarin disebut dengan Wei Ji. Wei artinya bahaya dan Ji artinya peluang. Jadi dalam setiap krisis selalu membawa 2 hal tersebut: bahaya dan peluang. Ketika kita bicara tentang tragedi tsunami Aceh, maka otomatis kita akan mengingat ribuan korban jiwa dari saudara-saudara kita di tanah Aceh tercinta, ribuan aset yang rusak dan tidak tergantikan hingga kini. Namun sedikit diantara kita yang sadar, bahwa justru paska tsunami Aceh inilah, konflik yang sudah berjalan puluhan tahun bisa berakhir dengan damai. Januari 1918, terjadi satu tragedi besar di dunia persis seperti yang kita alami hari ini, yang disebut dengan epidemik virus flu sepanyol. Tidak tanggung-tanggung, 500 juta penduduk dunia saat itu terinfeksi virus ini, dan 50 juta diantaranya meninggal dunia. Namun adakah kita yang tahu, bahwa justru karena virus flu spanyol inilah, PD 1 bisa berakhir. Saat itu, ada ribuan prajurit di medan peran terinfeksi virus ini sehingga memaksa negara-negara yang berkonflik untuk mengakhiri perang dunia ke 1. <br> <br>

Lalu mengapa hari-hari ini masih banyak diantara kita yang merasa marah, sedih dan kuatir terhadap situasi yang terjadi. Mungkin karena kita baru melihat hujannya, kita belum melihat pelanginya.  Jangan lupa sahabatku, bahwa krisis selalu membawa 2 hal: bahaya dan peluang. Daripada waktu dan enerji kita habis untuk hal negatif, mari kita mulai fokus pada hal-hal yang positif. Selamat mencari dan menemukan peluang lewat krisis ini.
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row  d-flex justify-content-between">
                <div class="col-1 mb-3">
                    <div class="comment d-flex">
                        <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-10">
                    <input class="text-comment" placeholder="Tambahkan Komentar" type="text" name="" id="">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-comment">Kirim</button>
                </div>
            </div>
        </div>

        <div class="container mt-5 list-comment">
            <div class="row mb-4 d-flex">
                <div class="col-1">
                    <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                </div>
                <div class="col-11">
                    <h5>Fery rahman</h5>
                    <div class="date-comment d-flex">
                        <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">June 18, 2023 10:15</p>
                    </div>
                    <p>Sudah menjadi fakta lama bahwa pembaca akan terganggu oleh konten halaman yang dapat dibaca ketika melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah distribusi hurufnya kurang lebih normal, berbeda dengan penggunaan 'Konten di sini, konten di sini', sehingga terlihat seperti bahasa Inggris yang mudah dibaca. Banyak paket penerbitan desktop dan</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-1">
                    <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                </div>
                <div class="col-11">
                    <h5>Fery rahman</h5>
                    <div class="date-comment d-flex">
                        <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">June 18, 2023 10:15</p>
                    </div>
                    <p>Sudah menjadi fakta lama bahwa pembaca akan terganggu oleh konten halaman yang dapat dibaca ketika melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah distribusi hurufnya kurang lebih normal, berbeda dengan penggunaan 'Konten di sini, konten di sini', sehingga terlihat seperti bahasa Inggris yang mudah dibaca. Banyak paket penerbitan desktop dan</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-1">
                    <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                </div>
                <div class="col-11">
                    <h5>Fery rahman</h5>
                    <div class="date-comment d-flex">
                        <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">June 18, 2023 10:15</p>
                    </div>
                    <p>Sudah menjadi fakta lama bahwa pembaca akan terganggu oleh konten halaman yang dapat dibaca ketika melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah distribusi hurufnya kurang lebih normal, berbeda dengan penggunaan 'Konten di sini, konten di sini', sehingga terlihat seperti bahasa Inggris yang mudah dibaca. Banyak paket penerbitan desktop dan</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-1">
                    <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                </div>
                <div class="col-11">
                    <h5>Fery rahman</h5>
                    <div class="date-comment d-flex">
                        <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">June 18, 2023 10:15</p>
                    </div>
                    <p>Sudah menjadi fakta lama bahwa pembaca akan terganggu oleh konten halaman yang dapat dibaca ketika melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah distribusi hurufnya kurang lebih normal, berbeda dengan penggunaan 'Konten di sini, konten di sini', sehingga terlihat seperti bahasa Inggris yang mudah dibaca. Banyak paket penerbitan desktop dan</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
