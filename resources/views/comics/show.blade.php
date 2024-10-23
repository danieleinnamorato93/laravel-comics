@extends("layouts.app")



@section("main-content")

<h1>Single Comic Show:</h1>

<div class="container">
<div class="comic-details">
    <h3>{{$comic['title']}}</h3>
    <img src="{{$comic['thumb']}}" alt="">
    <h3>{{$comic['description']}}</h3>
    <h3>{{$comic['series']}}</h3>
    <h3>{{$comic['type']}}</h3>
    <h3>{{$comic['price']}}</h3>
</div>
</div>

@endsection
