
@extends('layout')
@section('link')
<link href="{{ asset('css/review_page.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="ok">
    <div class="container">
        <!-- afficher chaques articles ajoutés-->
        @foreach($Review as $review)
            <div class="pol">
                <div class="ney">
                    <img src="img/{{$review->picture}}" alt="" height="250px" width="180px">
                    <div class="oki">
                        <div style="color: black;">
                            <p>Title: {{ $review->title }}</p>
                            <p>Type: {{ $review->type }}</p> 
                        </div>
                        <a href="/review_t/{{$review->title}}"><input type="submit" name="" value="See More"></a></br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
@endsection