@extends('layouts.master')

@section('title')
    Login - GameNight
@endsection

@section('content')
    <h1 class='pb-5'>Login</h1>
    <form method='POST' action='{{ route('login') }}'>
        {{ csrf_field() }}
        <div class='form-group'>
            <label for='email'>E-Mail Address:</label>
            <input id='email' class='form-control' type='email' name='email' value='{{ old('email') }}' required autofocus>
            @include('modules.error-field', ['field' => 'email'])
        </div>
        <div class='form-group'>
            <label for='password'>Password:</label>
            <input id='password' class='form-control' type='password' name='password' required>
            @include('modules.error-field', ['field' => 'password'])
        </div>
        <div class='form-check'>
            <label>
                <input type='checkbox' class='form-check-input' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
        <button type='submit' class='btn btn-primary'>Login</button>
        <div class='form-group'>
            <a class='btn btn-link' href='{{ route('password.request') }}'>Forgot Your Password?</a>
        </div>
    </form>
@endsection