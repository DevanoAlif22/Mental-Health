<div class="img-profile m-auto mt-3 mb-3"
style="background-image: url(
    @if ($profil->profiles->image != null)
    {{ asset($profil->profiles->image) }}
    @else
        '/images/profile/profile-null.png'
    @endif

    ); background-size: cover;background-position: center;background-repeat: no-repeat;">
</div>
<div class="wrap">
    <div>
        <h3><b>{{$profil->name}}</b></h3>
    </div>
</div>
<div class="wrap">
    <p style="color: #a6a6a6; text-align: center">Bergabung pada {{$profil->created_at}}</p>
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
                        <h6>{{$totalFollower}}</h6>
                    </div>
                </div>
                <div style="margin-right: 20px; display:flex">
                    <button style="background-color: white; border: none; ">
                        <img style="background-color:  #0a6ef6;"
                            src="{{ asset('images/profile/view.png') }}" alt="">
                    </button>
                    <div style="margin-left: 10px; padding-top:5px">
                        <h6 style="line-height: 0.3cm">Dilihat</h6>
                        <h6>{{$profil->profiles->view}}</h6>
                    </div>
                </div>
            </div>
            <div class="wrap">
                @if ($profilUser == true)
                <a href="/edit-profileuser"><button class="btn-follow margin-auto"> <b
                            style="font-size: 20px">Edit
                            Profil</b></button></a>
                @else
                        @if ($follow == true)

                        <a href="/follow/{{$profil->id}}"><button style="background-color: rgb(214, 214, 214); color:rgb(36, 36, 36)" class="btn-follow margin-auto"> <b
                                        style="font-size: 15px">Mengikuti</b></button></a>
                        @else
                        <a href="/follow/{{$profil->id}}"><button class="btn-follow margin-auto"> <b
                                        style="font-size: 20px">Ikuti</b></button></a>
                        @endif
                @endif
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <div style="width: 85% ;">
        <div class="gender d-flex justify-content-between mb-2" style="width: 100%;">

            @if ($profil->profiles->gender == null || $profil->profiles->gender == '')
            <h6 style="padding-top: 10px; color:#8F8F8F">
                @if ($profilUser == false)
                Belum diperbarui

                @else
                Perbarui

                @endif
            </h6>
            @else
            <h6 style="padding-top: 10px; color:#8F8F8F">{{$profil->profiles->gender}}</h6>
            @endif
            <img style="width: 40px; height:40px" src="{{ asset('images/profile/gender.png') }}"
                alt="">
        </div>
        <div class="line" style="width:100%; height:3px; background-color: #D9D9D9;"></div>
        <div class="gender d-flex justify-content-between mb-2 mt-3" style="width: 100%;">
            @if ($profil->profiles->age == null || $profil->profiles->age == '')
            <h6 style="padding-top: 10px; color:#8F8F8F">
                @if ($profilUser == false)
                Belum diperbarui

                @else
                Perbarui

                @endif
            </h6>
            @else
            <h6 style="padding-top: 10px; color:#8F8F8F">{{$profil->profiles->age}} tahun</h6>
            @endif
            <img style="width: 40px; height:40px" src="{{ asset('images/profile/age.png') }}"
                alt="">
        </div>
        <div class="line mb-3" style="width:100%; height:3px; background-color: #D9D9D9;"></div>
        @if ($profilUser == true)
        <div style="width: 100%; display:flex; justify-content:center;">
            <a href="/logout" class="logout" >Keluar</a>
        </div>
        @endif
    </div>
</div>
