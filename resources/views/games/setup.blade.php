@extends('layouts.master')

@section('title')
    Game Night - GameNight
@endsection

@section('content')
    @include('modules.alert-field')
    <h1 class='pt-5 display-1'>Start A Game Night</h1>
    <p class='pt-3'>Select any of your friends who are playing. This page will return a list of all games you have in common with the friends you select so you can choose which game to play tonight. There is also the option of having the site choose a random game from the list.</p>
    <h2 class='pt-3'>Select Friends:</h2>
    <form method='POST' action='/games/night'>
        {{ csrf_field() }}
        @foreach($user->friends as $friend)
            <div class='form-check'>
                <label>
                    <input type='checkbox' class='form-check-input' value='{{ $friend->id }}' name='friends[]' {{ old('remember') ? 'checked' : '' }}> {{ $friend->name }}
                </label>
            </div>
        @endforeach
        <div class='form-check'>
            <label>
                <input type='checkbox' class='form-check-input' value='random' name='random' {{ old('remember') ? 'checked' : '' }}> Also choose a random game?
            </label>
        </div>
        <button type='submit' class='btn btn-primary'>Start</button>
    </form>
@endsection
