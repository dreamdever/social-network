<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Message;

class PageController extends Controller
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
    public function index()
    {
        if( Auth::user()->is_active == 0 ) {
            $user = Auth::user();
            $user->is_active = 1;
            $user->save();
        }

        // Získanie IDčiek priatelov a používateľa
        $friendsID = [Auth::user()->id];
        $friendships = DB::table('friendship')->where('user1_id', Auth::user()->id)->orWhere('user2_id', Auth::user()->id)->get();


        foreach ( $friendships as $friend ) {
            $id = $friend->user1_id == Auth::user()->id ? $friend->user2_id : $friend->user1_id;
            array_push($friendsID, $id);
        }


        $posts = Post::whereIn('user_id', $friendsID)->orderBy('created_at', 'desc')->get();

        foreach( $posts as $key => $post ) {
            $posts[$key]['user'] = User::find($post->user_id);
        }

        $friends = User::whereIn('id',$friendsID)->where([['id','!=',Auth::user()->id],['is_active',1]])->orderBy('name','asc')->get();

        return view('home',[
            'posts' => $posts,
            'friends' => $friends
        ]);
    }

    public function welcome() {
        return view('welcome');
    }

    public function messages() {

        $messages = Message::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('time', 'desc')->get();
        $users= [];

        foreach( $messages as $key => $message ) {
            $id = $message->from_id == Auth::user()->id ? $message->to_id : $message->from_id;
            $messages[$key]['user'] = User::find($id);
            array_push($users, User::find($id));
        }

        $users = array_unique($users);

        return view('user.messages',[
            'users' => $users,
        ]);
    }

    public function friends() {

        // Získanie IDčiek priatelov a používateľa
        $friendsID = [];
        $friends = DB::table('friendship')->where('user1_id', Auth::user()->id)->orWhere('user2_id', Auth::user()->id)->get();


        foreach ( $friends as $friend ) {
            $id = $friend->user1_id == Auth::user()->id ? $friend->user2_id : $friend->user1_id;
            array_push($friendsID, $id);
        }

        $friends = User::whereIn('id', $friendsID)->get();

        return view('user.friends',[
            'friends' => $friends,
        ]);
    }

    public function searchPeople(Request $request) {

        $timeStart = time();
        $users = User::where([['name','like','%'.$request->name.'%'],['id', '!=', Auth::user()->id]])->get();
        $timeEnd = time();
        $time = $timeEnd - $timeStart;
        return view('user.search',[
            'users' => $users,
            'search' => $request->name,
            'time' => $time
        ]);

    }

    public function profile($id) {

        if ( $id == Auth::user()->id ) {
            return redirect('profile');
        }

        $user = User::find($id);

        if ( !$user->count() ) {
            abort(404);
        }

        $posts = Post::where('user_id',$id)->get();

        return view('user.userProfile',[
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
