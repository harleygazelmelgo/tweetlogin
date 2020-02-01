@extends('layouts.app')

@php

    function checkFollowing($userToCheck, $follows) {
        foreach($follows as $follow) {
            if($follow->followed == $userToCheck) {
                return true;
            }
        }
        return false;
    }

@endphp

@section('content')
    <h1> List of Users!</h1>
        <br><br>
        @foreach ($users as $user)
            <p> {{$user->name}} </p>
        @if (checkFollowing($user->name, $follows))
            <p> Already following! </p>

        @else
            <form action="/followUser" method="post">
                @csrf
                <input type="submit" value="Follow">
            </form>

        @endif

        @endforeach

@endsection


