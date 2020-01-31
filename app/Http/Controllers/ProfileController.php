<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ProfileController extends Controller
{

//     public function show() {
//         if(Auth::check()) {
//             $result = \App\Tweet::all();
//             return view ('layouts.profile', ['tweets' => $result]);
//         } else {
//             return view('layouts.profile');
//         }
//     }

//    public function validateNewTweet (Request $request) {
//         $validatedData = $request->validate([
//             'author' => 'required|min:8|max:50',
//             'content' => 'required',

//         ]);

//     }

//     public function createTweet(Request $request)
//     {
//         if(Auth::check()) {
//         $tweet = new \App\Tweet;
//         $tweet->author = $request->author;
//         $tweet->content = $request->content;
//         $tweet->save();

//         $result = \App\Tweet::all();
//         return view ('layouts.profile', ['tweets' => $result]);
//     } else {
//         return view('layouts.profile');
//     }
//     }



//     public function updateTweet(Request $request, $id) {

//         $tweet = \App\Tweet::find($id);
//         $tweet->author = $request->author;
//         $tweet->content = $request->content;

//         $tweet->save();

//     }

//     public function deleteTweet($id) {

//         $tweet = \App\Tweet::find($id);
//         $tweet->delete();

//     }


}

