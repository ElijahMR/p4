@extends('layouts.master')

@section('title')
    Welcome - GameNight
@endsection

@section('content')
    <h1 class='display-1'>Welcome to GameNight!</h1>
    <h4 class='pt-5'>An easy way to find multiplayer games to play for any number of people.</h4>
    <h4>Simply register, add the games you own, add some friends, and start playing.</h4>
    <h5 class='pt-5'>Last 5 Games Added:</h5>
    <div class='row justify-content-center pt-2'>
        <div id='carouselIndicators' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>
                <li data-target='#carouselIndicators' data-slide-to='0' class='active'></li>
                <li data-target='#carouselIndicators' data-slide-to='1'></li>
                <li data-target='#carouselIndicators' data-slide-to='2'></li>
                <li data-target='#carouselIndicators' data-slide-to='3'></li>
                <li data-target='#carouselIndicators' data-slide-to='4'></li>
            </ol>
            <div class='carousel-inner'>
                @foreach($newGames as $game)
                    <div class='carousel-item {{ ($game->id == $latestGame->id) ? 'active' : '' }}'>
                        <img class='d-block w-100' src='{{ $game->img_url }}' alt='game image'>
                    </div>
                @endforeach
            </div>
            <a class='carousel-control-prev' href='#carouselIndicators' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next' href='#carouselIndicators' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>
    </div>


@endsection