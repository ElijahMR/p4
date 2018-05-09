@extends('layouts.master')

@section('title')
    Friends - GameNight
@endsection

@section('content')
    @include('modules.alert-field')
    <h1 class='pt-5 display-1'>Friends</h1>
    <p class='pt-3'>You can manage your friends on this page. Friends on this site are a one-way relationship which means if you add someone via their unique friend code you will have them in your friends list but they will have to add you back via your friend code to see you in their friends list. Exchange friend codes with your friends to make sure everyone has each other added.</p>
    <div class='row justify-content-center pt-5'>
        <div class='col-md-4 col-sm-1'>
            <div class='card text-white bg-dark mb-3'>
                <div class='card-body'>
                    <h2 class='card-title'>{{ $user->friend_code }}</h2>
                    <h6 class='card-subtitle mb-2 text-muted'>Your Friend Code.</h6>
                </div>
            </div>
        </div>
    </div>
    <h2 class='pt-5'>Add A Friend:</h2>
    <div class='row justify-content-center pt-2'>
        <form class='form-inline' method='POST' action='/friends'>
            {{ csrf_field() }}
            <div class='form-group'>
                <label class='pr-2' for='friend_code'>Friend Code:</label>
                <input id='friend_code' class='form-control' type='text' name='friend_code' value='{{ old('friend_code') }}' placeholder='ertjh5gp' maxlength='8' required autofocus>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
            @include('modules.error-field', ['field' => 'friend_code'])
        </form>
    </div>
    <h2 class='pt-5'>Your Friends:</h2>
    <div class='row justify-content-center pt-2'>
        <table class='table table-bordered'>
            <thead>
            <tr>
                <th>Name:</th>
                <th>Friend Code:</th>
                <th>Delete:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->friends as $friend)
                <tr>
                    <td>{{ $friend->name }}</td>
                    <td>{{ $friend->friend_code }}</td>
                    <td><a href='/friends/{{ $friend->id }}/delete'>Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
