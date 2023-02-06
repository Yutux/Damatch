@extends('layout')

@section('link')
<link href="{{ asset('css/reviews.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="ok">
    <div class="Add">
        <h1 class="Addhere">Add</h1>
        <!-- formulaire pour les articles-->
        <form method="post" action="/add_Review" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="space">
                <p>Title</p>
                <input type="text" name="title" placeholder="enter the Title">
                <p>Type</p>
                <input type="text" name="type" placeholder="type">
            </div >
            <p>Contenu</p>
            <textarea style="color: black" type="text" name="contenu" placeholder="content" rows="15" cols="50"></textarea>
            <p>the picture</p>
            <input  type="file" name="picture" required>
            <button   type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection