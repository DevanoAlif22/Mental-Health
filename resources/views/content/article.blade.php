<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Artikel</title>
    <link rel="stylesheet" href="{{asset('/css/content/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>

    <div class="container-fluid mb-5">
        <div class="container pt-3 mb-3">
            <a class="back" href="/home"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
        </div>
        <div class="container">
            <img class="img-article" style="width: 100%" src="{{asset($article->image)}}" alt="">
        </div>
        <div class="container" style="margin-bottom: 30px;">
            <div class="row">

                <div class="col-md-6 d-flex">
                    <img class="img-profile" src="{{asset('images/content/user1.png')}}" alt="">
                    <div style="margin-left: 20px">
                        <h3>{{$article->title}}</h3>
                        <h6>{{$article->users->name}}</h6>
                    </div>

                </div>

                <div class="col-md-6">
                <div class="d-flex category">
                    <div style="margin-right: 20px; display:flex">
                        <img style="background-color: #0a6ef6;" src="{{asset('images/content/view.png')}}" alt="">
                        <div style="margin-left: 10px; padding-top:5px">
                            <h6 style="line-height: 0.3cm">Dilihat</h6>
                            <h6>{{$article->view}}</h6>
                        </div>
                    </div>

                    @if (Auth::user() && $like == null)
                    <form action="/like-article/{{$article->id}}" method="GET">
                        <div style="margin-right: 20px; display:flex">
                            <button type="submit" style="background-color: white; border: none; ">
                                <img style="background-color: #a6a6a6;" src="{{asset('images/content/like.png')}}" alt="">
                            </button>
                            <div style="margin-left: 10px; padding-top:5px">
                                <h6 style="line-height: 0.3cm">Disukai</h6>
                                <h6>{{$totalLike}}</h6>
                            </div>
                        </div>

                    </form>
                    @elseif (Auth::user() && $like != null)
                    <form action="/like-article/{{$article->id}}" method="GET">
                        <div style="margin-right: 20px; display:flex">
                                <button style="background-color: white; border: none;">
                                    <img style="background-color: #0a6ef6;" src="{{asset('images/content/like.png')}}" alt="">
                                </button>
                                <div style="margin-left: 10px; padding-top:5px">
                                    <h6 style="line-height: 0.3cm">Disukai</h6>
                                    <h6>{{$totalLike}}</h6>
                                </div>
                            </div>
                    </form>
                    @else
                        <div style="margin-right: 20px; display:flex">
                            <button style="background-color: white; border: none; ">
                                <img style="background-color: #a6a6a6;" src="{{asset('images/content/like.png')}}" alt="">
                            </button>
                            <div style="margin-left: 10px; padding-top:5px">
                                <h6 style="line-height: 0.3cm">Disukai</h6>
                                <h6>{{$totalLike}}</h6>
                            </div>
                        </div>
                    @endif
                    <div style="margin-right: 20px; display:flex; ">
                        <img style="background-color: #0a6ef6;" src="{{asset('images/content/comment.png')}}" alt="">
                        <div style="margin-left: 10px; padding-top:5px">
                            <h6 style="line-height: 0.3cm">Komentar</h6>
                            <h6>{{$totalComment}}</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container mb-5" style="margin-bottom: 30px;">
            <div class="d-flex">
                <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">{{$article->created_at}}</p>
            </div>
            <div class="content">
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>

        <div class="container" style="height: 3px; background-color:rgba(148, 148, 148, 0.474)"></div>
        @if (Auth::user())

        <div class="container mt-5 mb-5">
            <div class="row  d-flex justify-content-between">
                <div class="col-1 mb-3">
                    <div class="comment d-flex">
                        @if (Auth::user()->image == NULL)
                            <img class="img-comment" src="{{asset('images/profile/profile-null.png')}}" alt="">
                        @else
                            <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                        @endif
                    </div>
                </div>
                <div class="col-10">
                        <form method="POST" action="/comment-article/{{$article->id}}">
                            @csrf
                        <input autocomplete="off" maxlength="200" class="text-comment" placeholder="Tambahkan Komentar" type="text" name="content" id="">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-comment" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <p style="padding-top: 15px" class="text-center"><a style=" text-decoration:none;" href="/login">Login</a> untuk komentar</p>
        @endif

        @if ($article->commentArticle->isNotEmpty())
        <div class="container mt-5 list-comment">
            @foreach ($article->commentArticle as $items)
            <div class="row mb-4 d-flex">
                <div class="col-1">
                    @if ($items->users->image == NULL)
                    <img class="img-comment" src="{{asset('images/profile/profile-null.png')}}" alt="">
                    @else
                    <img class="img-comment" src="{{asset('images/content/user1.png')}}" alt="">
                    @endif
                </div>
                <div class="col-11">
                    <h5>{{$items->users->name}}</h5>
                    <div class="date-comment d-flex">
                        <i class="fa-solid fa-calendar-days fa-1x" style="padding-top:5px; color: #a6a6a6;"></i>
                <p style="margin-left: 10px; ">{{$items->created_at}}</p>
                    </div>
                    <p>{{$items->content}}</p>
                </div>
            </div>

            @endforeach
        </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
