@extends('main')
@section('title')
    Главная/Все заявки
@endsection

@section('style')
    <style>
        .card-body{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
@endsection

@section('content')
    <h1>Главная/Все заявки</h1>
    <div class="d-flex gap-3 flex-wrap">
        @foreach($appeals as $appeal)
        <div  class="card" style="width: 250px;">
            <img src="{{$appeal->img_url}}" alt="" class="card-img-top">
            <div class="card-body">
                <p  class="card-text">{{$appeal->description}}</p>
                <div>
                    <p  class="card-text">{{$appeal->user_name}}</p>
                    <p  class="card-text">{{$appeal->status}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$appeals->withQueryString()->links()}}
@endsection
