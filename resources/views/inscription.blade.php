@extends('layout')

@section('link')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class='ok'>
    <div class="register">
        <h1 class="registerhere">Signup</h1>
        
        <!-- formulaire d'inscription -->
        <form action='/inscription' method='post'>
            
            {{ csrf_field() }}
            <div class="space">
                <p>Name</p>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="enter your name">
                @if($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
                @endif

                <p>Surname</p>
                <input type="text" name="surname" value="{{ old('surname') }}" placeholder="enter your Surname">
                </div>
                @if($errors->has('surname'))
                    <p>{{ $errors->first('surname') }}</p>
                @endif

                <p>email</p>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="enter your email">
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif

                <p>Password</p>
                <input type="password" name="password_confirmation" placeholder="enter your password">
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif

                <p>Password confirmation</p>
                <input type="password" name="password" placeholder="confirm">
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif

                

                <input type="submit" value="SignUp">
            </div>
        </form>
    </div>
</body>
@endsection
