@extends('layouts.master')

@section('title')
    Game Night - GameNight
@endsection

@section('content')
    <h1 class='pt-5 display-1'>The Games You Can Play Are</h1>
    <div class='row justify-content-center pt-2'>
        @if(count($commonGames) > 0)
            @foreach($commonGames as $game)
                <div class='col-md-4 col-sm-1'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{{ $game->name }}</h5>
                        </div>
                        <img class='card-img-bottom' src='{{ $game->img_url }}' alt='Card Image Bottom'>
                    </div>
                </div>
            @endforeach
        @else
            <h2 class='pt-5'>No games in common.</h2>
        @endif
    </div>
    @if($randomGame !== 0)
    <h2 class='pt-5'>Chosen Random Game:</h2>
    <div class='row justify-content-center pt-2'>
        <div class='col-md-4 col-sm-1'>
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>{{ $randomGame->name }}</h5>
                </div>
                <img class='card-img-bottom' src='{{ $randomGame->img_url }}' alt='Card Image Bottom'>
            </div>
        </div>
    </div>
    @endif
@endsection
