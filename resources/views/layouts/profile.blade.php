@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>Welcome {{ Auth::user()->name }}</h1>
        <br><br>
        @foreach ($tweets as $tweet)
            <p><strong> {{$tweet->author}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><strong> {{$tweet->created_at}}</strong></p>

            <form action="/profile/deleteTweet" method="get">
                @csrf
                <input type="hidden" name="author" value="{{ Auth::user()->name}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Delete Tweet">
            </form>
            <br><br>
            <form action="/profile/updateTweet" method="get">
                @csrf
                <input type="hidden" name="author" value="{{ Auth::user()->name}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Update Tweet">
            </form>
            <br>
            <br>
        @endforeach
        <form action="/profile/postTweet" method="get">
            @csrf
            <input type="hidden" name="author" value="{{ Auth::user()->name}}">
            <input type="text" name="content" value="Content">
            <input type="submit" value="Create Tweet">
        </form>



    @endguest
@endsection
