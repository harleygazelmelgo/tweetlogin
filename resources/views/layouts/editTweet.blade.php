@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>Welcome {{ Auth::user()->name }}</h1>

        <p>Edit Post!</p>
        <br><br>

        <div class="form-group">
        <form action="/profile/EditTweet" method="get">
            @csrf
            <label for="author">Author</label>
            <label type="text" name="author" value="{{ Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>

            <textarea name="content" class="form-group" value="Content">
            </textarea>
        </div>

            <button type="submit" class="btn btn-primary">"Update Tweet"</b>
        </form>


    @endguest
@endsection
