@extends('layouts.master')

@section('title')
    Home - GameNight
@endsection

@section('content')
    <h1 class='display-4'>Hello {{ $user->name }}!</h1>
    <div class='row justify-content-center pt-2'>
        <div class='col-md-4 col-sm-1'>
            <div class='card text-white bg-dark mb-3'>
                <div class='card-body'>
                    <h2 class='card-title'>{{ $user->friend_code }}</h2>
                    <h6 class='card-subtitle mb-2 text-muted'>Give this to your friends. See the Friends section for more info.</h6>
                </div>
            </div>
        </div>
    </div>
    <h5 class='pt-5'>Your Last Added 3 Games:</h5>
    <div class='row justify-content-center pt-2'>
        @foreach($newGames as $game)
            <div class='col-md-4 col-sm-1'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>{{ $game->name }}</h5>
                    </div>
                    <img class='card-img-bottom' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                </div>
            </div>
        @endforeach
    </div>
    <h5 class='pt-5'>Your Friends:</h5>
    <div class='row justify-content-center pt-2'>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Friend Code:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->friends as $friend)
                    <tr>
                        <td>{{ $friend->name }}</td>
                        <td>{{ $friend->friend_code }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
