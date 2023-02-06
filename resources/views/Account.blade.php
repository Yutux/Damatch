@extends('layout')
@section('link')
<link href="{{ asset('css/account.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="ok">
    <div class="block">
    
        <h1 class="block-Account"><i>My Account</i> </h1>
        <h3><i>Name:</i> {{ Auth::user()->name }}</h3>
        <h3><i>Surname:</i> {{ Auth::user()->surname }}</h3>
        <h3><i>Email:</i> {{ Auth::user()->email }}</h3>
        <h3 style=" text-align: center"><a href="/Reviews" style=" color: white">Add a Review</a></h3>
     
        <!-- update l'utilisateur -->

        <h3 style=" text-align: center"><a href="/updateprofil" style=" color: white">updateprofil</a></h3>
        
    </div>
<body>
@endsection