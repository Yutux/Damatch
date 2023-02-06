@extends('layout')

@section('link')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')

<body class="ok">

    <h2 class="cv"><i>Damatch</i></h2>
    <div class="block-2">News</div>
    <div class="block-3"><i>Promos</i></div>



    <div class="block-4">
        <h1>Damatch</h1>

        <ul>
            @foreach($users as $users)
            <li><a href="/{{ $users->email }}">{{$users->email}} </a></li>
            @endforeach
        </ul>
        @if(auth()->check() AND auth()->user()->id === $users->id)

        <div>
            <form action="/messages" method="post">
                {{ csrf_field() }}
                <div>
                    <textaera class="comment" name="comment" placeholder="comment">
                </div>
                @if($errors->has('message'))
                <p>{{ $errors->first('message') }}</p>
                @endif
                <div>
                    <button class="button" type="submit">publish</button>
                </div>

                @endif
            </form>
        </div>
    </div>


</body>
@endsection
