<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class TweetController extends Controller

{

    function show() {
        if(Auth::check()) {
            $result = \App\Tweet::all();
            return view ('layouts.profile', ['tweets' => $result]);
        } else {
            return view('layouts.profile');
        }
    }

    function postTweet(Request $request)  {
        if(Auth::check()) {
        $tweet = new \App\Tweet;
        $tweet->author = $request->author;
        $tweet->content = $request->content;
        $tweet->save();

        $result = \App\Tweet::all();
        return view ('layouts.profile', ['tweets' => $result]);
    } else {
        return view('layouts.profile');
    }

    }

    function deleteTweet($id) {

        $tweet = \App\Tweet::find($id);
        $tweet->delete();

    }

    function updateTweet(Request $request, $id) {
        $tweet = \App\Tweet::find($id);
        $tweet->author = $request->author;
        $tweet->content = $request->content;
        $tweet->save();

    }

}
