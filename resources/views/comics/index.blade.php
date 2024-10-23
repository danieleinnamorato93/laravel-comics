@extends("layouts.app")



@section("main-content")
<div class="container-fluid bg-black">

{{--@dump($comics);--}}



<div class="row justify-content-center">
    @foreach ($comics as $comic )

    <div class="card col-2  m-3">
        <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
        <div class="card-body">
          <h5 class="card-title">{{$comic["series"]}}</h5>
          <h5 class="card-title">{{$comic["type"]}}</h5>
          <h5 class="card-title">{{$comic["price"]}}</h5>
        </div>
      </div>

@endforeach
    </div>
</div>









</div>

@endsection

