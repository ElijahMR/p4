@extends('layouts.master')

@section('title')
    Game Night - GameNight
@endsection

@section('content')
    <h1 class='pt-5 display-1'>The Games You Can Play Are</h1>
    <div class='row justify-content-center pt-2'>
        @foreach($user->games as $game)
            @foreach($commonGames as $common)
                @if($game->id == $common)
                    <div class='col-md-4 col-sm-1'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title'>{{ $game->name }}</h5>
                            </div>
                            <img class='card-img-bottom' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
    @foreach($user->games as $game)
        @if($game->id == $randomGame)
            <h2 class='pt-5'>Chosen Random Game:</h2>
            <div class='row justify-content-center pt-2'>
                <div class='col-md-4 col-sm-1'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{{ $game->name }}</h5>
                        </div>
                        <img class='card-img-bottom' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
