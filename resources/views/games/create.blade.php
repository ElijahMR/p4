@extends('layouts.master')

@section('title')
    Add A Game - GameNight
@endsection

@section('content')
    <h1 class='pt-5 display-1'>Add A Game</h1>
    <p class='pt-3'>Are we missing a game you play? Add a game to the site library here. Store links should preferably point to the <a href='https://store.steampowered.com/' target='_blank'>Steam Store</a> and images should preferably be the Steam page banner.</p>
    <form method='POST' action='/games/create'>
        {{ csrf_field() }}
        <div class='form-group'>
            <label for='name'>Game Name:</label>
            <input id='name' class='form-control' type='text' name='name' value='{{ old('email') }}' placeholder='Counter-Strike: Global Offensive' required autofocus>
            @include('modules.error-field', ['field' => 'name'])
        </div>
        <div class='form-group'>
            <label for='img_url'>Image Url:</label>
            <input id='img_url' class='form-control' type='text' name='img_url' value='{{ old('img_url') }}' placeholder='https://steamcdn-a.akamaihd.net/steam/apps/730/header.jpg'  required>
            @include('modules.error-field', ['field' => 'img_url'])
        </div>
        <div class='form-group'>
            <label for='purchase_url'>Store Link:</label>
            <input id='purchase_url' class='form-control' type='text' name='purchase_url' value='{{ old('purchase_url') }}' placeholder='https://store.steampowered.com/app/730'  required>
            @include('modules.error-field', ['field' => 'purchase_url'])
        </div>
        <div class='form-group'>
            <label for='max_players'>Max Players(<64):</label>
            <input id='max_players' class='form-control' type='number' name='max_players' value='{{ old('max_players') }}' placeholder='10'  required>
            @include('modules.error-field', ['field' => 'max_players'])
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
@endsection
