<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Admin</title>

    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="/css/cms/cms_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1">
                <div class="nav-left">
                    <div class="link-nav">
                        <a href="" class="mb-4"><img class="img-fluid logo"
                                src="{{ asset('images/main/logo-putih-kepala.png') }}" alt=""><span>MENTAL
                                HEALTH</span></a>
                        <a href="article-admin" class="active"><img class="img-fluid article"
                                src="{{ asset('images/main/icon-article.png') }}" alt=""><span>List
                                Artikel</span></a>
                        <a href="story-admin" ><img class="img-fluid article" src="{{ asset('images/main/story.png') }}"
                                alt=""><span>List
                                Cerita</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-11 col-sm-11">
                <div class="isi-right">
                    <div class="nav-right">
                        @if ($errors->any() || Session::get('success'))
                                    @include('layout/message')
                                @endif
                        <div class="link-right">
                            <p class="active-p">List Artikel</p>
                            <p>List Cerita</p>
                        </div>
                        <div class="section-right">

                        <table  style="width: 100%">
                            <thead>
                                <tr >
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">Profil</th>
                                    <th style="text-align: center">Nama User</th>
                                    <th style="text-align: center">Judul Artikel</th>
                                    <th style="text-align: center">Penonton</th>
                                    <th style="text-align: center">Menyukai</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($article as $item)
                                <tr >
                                    <td style="text-align: center">{{$item->id}}</td>
                                    <td style="">
                                        <h6 style="margin-top: 20px; ">
                                            <div class="gambar-cerita m-auto"
                                                style="background-image: url(
                                                    @if($item->users->image == null)
                                                    '/images/profile/null.png'
                                                    @else
                                                    '{{ asset($item->users->image) }}'
                                                    @endif
                                                    ); background-size: cover;background-position: center;background-repeat: no-repeat; max-width: 30px; height: 30px;">

                                            </div>
                                        </h6>
                                    </td>
                                    <td style="text-align: center;">{{$item->users->name}}</td>
                                    <td style="text-align: center;">{{ Illuminate\Support\Str::limit($item->title, 17) }}</td>
                                    <td style="text-align: center;">{{$item->view}}</td>
                                    <td style="text-align: center">{{$item->article_like_count}}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center isi isi-aksi">
                                            <a style="margin-right: 10px" href="/report-article-accept/{{$item->id}}">Hapus</a>
                                            <a style="margin-right: 10px" href="/article/{{$item->id}}" class="lihat">Lihat</a>
                                            <a href="/report-article-reject/{{$item->id}}" class="tolak">Tolak</a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
