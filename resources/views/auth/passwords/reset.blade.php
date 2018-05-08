@extends('layouts.master')

@section('title')
    Reset Password - GameNight
@endsection

@section('content')
    <h1 class='pb-5'>Reset Password</h1>
    <form method='POST' action='{{ route('password.request') }}'>
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class='form-group'>
            <label for='email'>E-Mail Address:</label>
            <input id='email' class='form-control' type='email' name='email' value='{{ old('email') }}' required autofocus>
            @include('modules.error-field', ['field' => 'email'])
        </div>
        <div class='form-group'>
            <label for='password'>Password (min: 6)</label>
            <input id='password' class='form-control' type='password' name='password' required>
            @include('modules.error-field', ['field' => 'password'])
        </div>
        <div class='form-group'>
            <label for='password-confirm'>Confirm Password</label>
            <input id='password-confirm' class='form-control' type='password' name='password_confirmation' required>
        </div>
        <button type='submit' class='btn btn-primary'>Reset Password</button>
    </form>
@endsection
