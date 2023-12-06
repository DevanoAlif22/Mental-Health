<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use App\Models\Article;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProfileController extends Controller
{
    //
    function getData() {
        $profil = User::with(['profiles','followers'])->where('id',Auth::user()->id)->first();
        $totalFollower = Follower::where('id_follow',Auth::user()->id)->count();
        return [$profil,$totalFollower];
    }

    function listUser() {
        $listUser = User::withCount('followers as follower_count')
        ->with('profiles')
        ->get();
        return view('content.listProfile',['follow' => false, 'view' => false,'listUser' => $listUser]);
    }

    function listUserFollow() {
        $listUser = User::withCount('followers as follower_count')
        ->with('profiles')
        ->orderBy('follower_count', 'desc')
        ->get();
        return view('content.listProfile',['follow' => true, 'view' => false,'listUser' => $listUser]);
    }

    function listUserView() {
        $listUser =  User::withCount('followers as follower_count')->leftJoin('profiles', 'users.id', '=', 'profiles.id_user')
        ->orderByDesc('profiles.view')
        ->get();
        return view('content.listProfile',['follow' => false, 'view' => true,'listUser' => $listUser]);
    }

    function searchListUser(Request $request) {
        $listUser = User::withCount('followers as follower_count')
        ->with('profiles')
        ->where('name', 'LIKE', "%{$request->name}%")
        ->get();
        return view('content.listProfile',['follow' => false, 'view' => false,'listUser' => $listUser]);
    }

    function detailUser($id) {
        $validasi = User::find($id);
        if($validasi){

            if(Auth::user()) {
                if(Auth::user()->id == $id) {
                    $data = $this->getData();
                    return view('profile.profile-aboutuser', ['follow' => false ,'profilUser' => true, 'profil' => $data[0], 'totalFollower' => $data[1]]);
                } else {
                    $profil = User::with(['profiles','followers'])->where('id',$id)->first();
                    $profil->profiles->view = $profil->profiles->view + 1;
                    $profil->profiles->update();
                    $totalFollower = Follower::where('id_follow',$id)->count();
                    $follow = Follower::where('id_user', Auth::user()->id)->where('id_follow',$id)->first();
                    if($follow){
                        return view('profile.profile-aboutuser', ['follow' => true, 'profilUser' => false,'profil' => $profil, 'totalFollower' => $totalFollower]);
                    } else {
                        return view('profile.profile-aboutuser', ['follow' => false, 'profilUser' => false,'profil' => $profil, 'totalFollower' => $totalFollower]);
                    }
                }
            }
        } else {
            return redirect('/home');
        }
    }

    function listArticle($id) {
        $validasi = User::find($id);
        if($validasi){
        if(Auth::user()) {
            if(Auth::user()->id == $id) {
                $dataArticle = Article::where('id_user', Auth::user()->id)->get();
                $data = $this->getData();
                return view('profile.profile-articleuser', ['follow' => false,'profilUser' => true, 'listArticle' => $dataArticle, 'profil' => $data[0], 'totalFollower' => $data[1]]);
            } else {
                $dataArticle = Article::where('id_user', $id)->get();
                $profil = User::with(['profiles','followers'])->where('id',$id)->first();
                $totalFollower = Follower::where('id_follow',$id)->count();
                $follow = Follower::where('id_user', Auth::user()->id)->where('id_follow',$id)->first();
                if($follow){
                    return view('profile.profile-articleuser', ['follow' => true, 'profilUser' => false, 'listArticle' => $dataArticle, 'profil' => $profil, 'totalFollower' => $totalFollower]);
                } else {
                    return view('profile.profile-articleuser', ['follow' => false, 'profilUser' => false, 'listArticle' => $dataArticle, 'profil' => $profil, 'totalFollower' => $totalFollower]);

                }
            }
        }

        } else {
            return redirect('/home');
        }
    }


    function listStory($id) {

        $validasi = User::find($id);
        if($validasi){
        if(Auth::user()->id == $id){
            $dataStory = Story::with('category')->where('id_user', Auth::user()->id)->orderBy('id','desc')->get();
            $data = $this->getData();
            return view('profile.profile-storyuser', ['follow' =>  false, 'profilUser' => true, 'listStory' => $dataStory, 'profil' => $data[0], 'totalFollower' => $data[1]]);
        } else {
            $dataStory = Story::with('category')->where('id_user', $id)->orderBy('id','desc')->get();
            $profil = User::with(['profiles','followers'])->where('id',$id)->first();
            $totalFollower = Follower::where('id_follow',$id)->count();
            $follow = Follower::where('id_user', Auth::user()->id)->where('id_follow',$id)->first();
            if($follow){
                return view('profile.profile-storyuser', ['follow' => true,'profilUser' => false, 'listStory' => $dataStory, 'profil' => $profil, 'totalFollower' => $totalFollower]);
            } else {
                return view('profile.profile-storyuser', ['follow' => false,'profilUser' => false, 'listStory' => $dataStory, 'profil' => $profil, 'totalFollower' => $totalFollower]);

            }
        }
        } else {
            return redirect('/home');
        }

    }

    function getEditAbout() {
        $data = $this->getData();
        return view('profile.upload-aboutuser', ['follow' => false, 'profilUser' => true,'profil' => $data[0], 'totalFollower' => $data[1]]);
    }

    function getEditProfil() {
        $data = $this->getData();
        return view('profile.edit-profileuser', ['follow' => false, 'profilUser' => true, 'profil' => $data[0], 'totalFollower' => $data[1]]);
    }

    function editAbout(Request $request) {
        // validasi
        $request->validate([
            'biodata' => 'required|min:5|max:250',
        ],[
            'biodata.required' => 'biodata wajib di isi',
            'biodata.min' => 'biodata minimal :min karakter',
            'biodata.max' => 'biodata maksimal :max karakter'
        ]);

        Auth::user()->profiles->biodata = $request->biodata;
        Auth::user()->profiles->update();
        return redirect('/edit-aboutuser')->with('success', 'Biodata berhasil di edit');
    }


    function editProfil(Request $request) {
        $request->validate( [
            'image' => 'image|mimes:jpeg,png,jpg|max:5048',
            'name' => 'required|string|max:15',
            'gender' => 'max:10',
            'age' => 'max:15',
        ], [
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'name.required' => 'Nama artikel harus diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh melebihi :max karakter.',
            'gender.max' => 'Jenis kelamin tidak boleh melebihi :max karakter.',
            'age.max' => 'Umur tidak boleh melebihi :max karakter.',
        ]);

        if($request->image != null) {
            if(Auth::user()->profiles->image_path != null || Auth::user()->profiles->image_path != '') {
                Cloudinary::destroy(Auth::user()->profiles->image_path);
            }
            $imageName = Auth::user()->id . '_' . now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePathFull = 'user/' . Auth::user()->id . '/images/profile/'.$imageName;
            $uploadedFile = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'user/' . Auth::user()->id . '/images/profile',
                'public_id' => $imageName,
            ]);
            $fileImage = $uploadedFile->getSecurePath();
            Auth::user()->profiles->image  =  $fileImage;
            Auth::user()->profiles->image_path = $imagePathFull;
        }
        Auth::user()->name  =  $request->name;
        Auth::user()->profiles->gender  =  $request->gender;
        Auth::user()->profiles->age  =  $request->age;
        Auth::user()->update();
        Auth::user()->profiles->update();
        return redirect('/edit-profileuser')->with('success', 'Profil berhasil di edit');
    }

    function follow($id) {
        if(Auth::user()) {
            // apakah user yang di follow ada
            $validasi = User::find($id);
            if($validasi) {
                // apakah dia sudah follow atau tidak
                $follow = Follower::where('id_user', Auth::user()->id)->where('id_follow', $id)->first();
                if($follow) {
                    $follow->delete();
                } else {
                    Follower::create([
                        'id_user' => Auth::user()->id,
                        'id_follow' => $id
                    ]);
                }
                return redirect('/profile-aboutuser/'.$id);
            }
            return redirect('/home');
        } else {
            return redirect('/home');
        }
    }
}
