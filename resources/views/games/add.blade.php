@extends('layouts.master')

@section('title')
    Games - GameNight
@endsection

@section('content')
    @include('modules.alert-field')
    <h1 class='pt-5 display-1'>Games</h1>
    <p class='pt-3'>This page shows all the games you have added to your game library. You can add and remove games on this page. Below your personal library you will find a list of games in the site library. You can also add games to the site library if you see them missing.</p>
    <h2 class='pt-5'>Your Library:</h2>
    <div class='row justify-content-center pt-2'>
        @foreach($user->games as $game)
            <div class='col-md-4 col-sm-1'>
                <div class='card border-dark mb-3'>
                    <img class='card-img-top' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                    <div class='card-body'>
                        <h5 class='card-title'>{{ $game->name }}</h5>
                        <p class='card-text'>Max-players: {{ $game->max_players }}</p>
                        <a href='/games/{{ $game->id }}/remove' class='btn btn-danger'>Remove Game</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h2 class='pt-5'>Add A Game To Your Library:</h2>
    <p class='pt-3'>Not seeing a game you play? Add it to the site library <a href='/games/create'>here</a>.</p>
    <div class='row justify-content-center pt-2'>
        @foreach($allGames as $game)
            <div class='col-md-4 col-sm-1'>
                <div class='card border-dark mb-3'>
                    <img class='card-img-top' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                    <div class='card-body'>
                        <h5 class='card-title'>{{ $game->name }}</h5>
                        <p class='card-text'>Max-players: {{ $game->max_players }}</p>
                        <a href='{{ $game->purchase_url }}' target='_blank' class='btn btn-primary'>Buy</a>
                        <a href='/games/{{ $game->id }}/add' class='btn btn-success'>Add Game</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
