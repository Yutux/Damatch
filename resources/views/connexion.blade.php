@extends('layout')
@section('link')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="login">
    <!-- formulaire de connexion-->
    <h1 class="loginhere">Login<h1>
    <form action='/connexion' method='post'>

        {{ csrf_field() }}
    
        <p><input type="email" name="email"  placeholder="Email"></p>
        @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif
        
        <p><input type="password" name="password" placeholder="Password"></p>
        @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif
        
        <p><input type="submit" value="login"></p>
    </form>
</div>

@endsection