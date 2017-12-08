<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Message;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user/profile',[
            'posts' => $posts
        ]);
    }

    public function profileUpdate(Request $request) {

        $user = Auth::user();
        $user->name = $request->name;
        $user->description = $request->description;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->mobile = $request->mobile;
        $user->save();

        return back();

    }

    public function friendRemove($id) {
        DB::table('friendship')->where([['user1_id',Auth::user()->id],['user2_id', $id]])
                               ->orWhere([['user2_id',Auth::user()->id],['user1_id', $id]])->delete();

        return redirect('user/profile/'.$id);
    }

    public function friendAdd($id) {

        $friend = DB::table('friendship')->where([['user1_id',Auth::user()->id],['user2_id', $id]])
                               ->orWhere([['user2_id',Auth::user()->id],['user1_id', $id]])->get();

        if ( !$friend->count() ) {
            DB::table('friendship')->insert([
                'user1_id' => Auth::user()->id,
                'user2_id' => $id
            ]);
        }

        return redirect('user/profile/'.$id);
    }

    public function avatarChange() {

        $errors = [];
        $id = Auth::user()->id;
        $target_dir = "uploads/users/".$id.'/';
        $imageFileType = pathinfo($_FILES["uploaded_img"]["name"],PATHINFO_EXTENSION);
        $_FILES["uploaded_img"]["name"] = uniqid().'.'.$imageFileType;
        $target_file = $target_dir . basename($_FILES["uploaded_img"]["name"]);
        $uploadOk = 1;

        $check = getimagesize($_FILES["uploaded_img"]["tmp_name"]);
        if($check != false) {
            $uploadOk = 1;
        } else {
            $errors[] = "Súbor nieje obrázok";
        }

        if ($_FILES["uploaded_img"]["size"] > 6000000) {
            $uploadOk = 0;
            $errors[] = 'Obrázok je príliž velký';
        }

        if ( !is_dir ( $target_dir ) ) {
            mkdir($target_dir);
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["uploaded_img"]["tmp_name"], $target_file)) {
                $user = Auth::user();
                $user->img = 'http://'.$_SERVER['HTTP_HOST'].'/uploads/users/'.$id.'/'.basename( $_FILES["uploaded_img"]["name"]);
                $user->save();
               die($user->img);
            } else {
                $errors[] = 'Nepodarilo sa nahrať obrázok.';
            }
        }



        die(json_encode($errors));
    }

    public function delete(Request $request) {

        if ( $request->id == Auth::user()->id ) {
            $user = Auth::user();
            Post::where('user_id', $user->id)->delete();
            Message::where('from_id', $user->id)->orWhere('to_id', $user->id)->delete();
            DB::table('friendship')->where('user1_id', $user->id)->orWhere('user2_id', $user->id)->delete();
            $user->delete();
        }

        return redirect('welcome');
    }

    public function logout() {

        $user = Auth::user();
        $user->is_active = 0;
        $user->save();
        Auth::logout();

        return redirect('/home');
    }
}
