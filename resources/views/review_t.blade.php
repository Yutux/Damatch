@extends('layout')
@section('link')
<link href="{{ asset('Css/review_t.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="ok">
    <!-- afficher un article dans une page précise-->
    <div class="block">
        <img src="{{asset ('img')}}/{{$prod->picture}}" alt="regiser" height="100%" width="100%"> 
    </div>
    
    <div class="block2">
        <h1><i>{{ $prod->title }}</i></h1>
    </div>
    <div class="block3">
        <h1><i>{{ $prod->contenu }}</i></h1>
    </div>
</body>
@endsection
