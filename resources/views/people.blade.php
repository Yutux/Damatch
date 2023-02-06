@extends('layout')

@section('link')
<link href="{{ asset('css/people.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="ok">
    <div class="user">
        <h1>{{$users->name}}</h1>
        
        @auth
        <form method="post" action="/{{ $users->name}}/follow">
            {{ csrf_field() }}
            @if(auth()->user()->follow($users))
                {{method_field('delete')}}
            @else
                {{method_field('post')}}
            @endif

            
            <div class="publish">
                <button style="color: black" class="button" type="submit">
                    @if(auth()->user()->follow($users))
                        unfollow
                    @else
                        follow
                    @endif
                </button>
            </div>
        </form>
        @endauth
    

    <div class="all">
        @if (Auth()->check() AND Auth()->user()->id === $users->id)
            
            <form action=/messages method="post">

                {{ csrf_field() }}
                <div class="commentbox">
                    <textarea class="comment" name="message" placeholder="comment"></textarea>
                 
                @if($errors->has('message'))
                    <p>{{ $errors->first('message') }}</p>
                @endif
                </div> 

                <div class="publish">
                    <button style="color: black" class="button" type="submit">publish</button>
                </div>
            </form>
        @endif
    </div>
    
    <div class="message">
        <h1><i>Publication</i></h1>
        @foreach($users->messages as $message)
            
            <p style=" color: white">
                <i>{{ $message->created_at }}</i><br>
                {{ $message->content }}
            </p>
        @endforeach
    </div>
</body>
@endsection