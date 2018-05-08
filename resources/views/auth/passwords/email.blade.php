@extends('layouts.master')

@section('title')
    Reset Password - GameNight
@endsection

@section('content')
    <h1 class='pb-5'>Reset Password</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class='form-group'>
            <label for='email'>E-Mail Address:</label>
            <input id='email' class='form-control' type='email' name='email' value='{{ old('email') }}' required autofocus>
            @include('modules.error-field', ['field' => 'email'])
        </div>
        <button type='submit' class='btn btn-primary'>Send Password Reset Link</button>
    </form>
@endsection
