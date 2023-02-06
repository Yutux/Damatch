@extends('layout')
@section('link')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="ok">
    <h2 class="cv"><i>Damatch</i></h2>
    
    @auth
    <div class="block-2">
        <i>user followed</i>
        @if(auth()->user()->follows->isEmpty())
            <h5>no one is followed by you</h5>
        @else
            <ul>
                @foreach(auth()->user()->follows as $user)
                    <h5><a style=" color: white" href="/people/{{$user->name}}">{{$user->name}}</a></h5>
                @endforeach
            </ul>
        @endif
    </div>
    @endauth
    
    <div class="block-3">
        <!-- afficher chaque utilisateur inscrit-->
        <i>Users</i>
        <ul>
            @foreach($users as $user)
                <h5><a style=" color: white" href="/people/{{$user->name}}">{{$user->name}}</a></h5>
            @endforeach
        </ul>
    </div>

    <div class="block-4">
        <i>A tous les influenceurs et toutes les entreprises et personnes voulant se promouvoir ou promouvoir un produit,
            vous ètes au bonne endroit pour créer un réseau durable entre influenceurs et entrepreneurs 
            avec des offres de partenariat touchant tous les secteurs (Gaming, cosmetique, lecteur etc...),
            pour tous types influenceurs et contenus.
        </i>
        <h1></h1>
    </div>
    <div>
        
    </div>

</body>
@endsection