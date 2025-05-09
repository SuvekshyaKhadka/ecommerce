@extends('master')
@section('content')
  <div class="custom-product">
        <div id="myCarousel">
            <!-- Indicators -->

        <div class="trending-wrapper">
            <h4> Result for Products </h4>
            <div class="">
                @foreach ($products as $item)
                    <div class="searched-items">
                        <a href="detail/{{$item['id']}} ">
                            <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="">
                                    <h2>{{$item['name']}}</h2>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
