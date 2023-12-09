
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg bg-trasnparant">
        <div class="container wrap_navbar pt-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/main/logo2.png') }}" alt="">Mental Health
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
                    <a class="nav-link" href="/home">Beranda</a>
                    <a class="nav-link" href="/sistem-pakar">Sistem pakar</a>
                    <a class="nav-link" href="/list-article">Artikel</a>
                    <a style="color: #0A6EF6" class="nav-link" href="/list-story">Cerita</a>
                    @if (Auth::user())
                        @if(Auth::user()->profiles->image == null)
                            <a class="nav-link" href="/profile-aboutuser/{{Auth::user()->id}}"><img style="width: 35px; height: 35px; margin-top:-10px" src="{{asset('images/profile/profile-null.png')}}" alt=""></a>
                        @else
                            <a  class="nav-link" href="/profile-aboutuser/{{Auth::user()->id}}"><img style="width: 40px; height: 40px; border-radius:50%;" src="{{Auth::user()->profiles->image}}" alt=""></a>
                        @endif
                    @else
                    <button><a style="" href="{{route('auth')}}">Login</a></button>
                    @endif
                </div>
            </div>
        </div>
    </nav>
