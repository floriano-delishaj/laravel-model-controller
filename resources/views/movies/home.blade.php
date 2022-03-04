@extends('layout.default')

@section('pageTitle', 'Movies')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center text-white py-5">Movies</h1>
            <div class="row justify-content-center">
                @foreach($movies as $item)
                <div class="col-lg-5 my-3">
                    <div class="card text-center">
                        <div class="card body">
                            <h3 class="card-title py-3">{{$item['title']}}</h3>
                            <p class="card-text">{{$item['original_title']}}</p>
                            <p class="card-text">{{$item['nationality']}}</p>
                            <p class="card-text">{{$item['date']}}</p>
                            <b class="card-text pb-3">{{$item['vote']}}</b>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
