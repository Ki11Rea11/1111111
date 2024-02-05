@php use App\Enums\StatusAppealEnum; @endphp
@extends('main')
@section('title')
    Админ панель/Все заявки пользователей
@endsection

@section('style')
    <style>
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
@endsection

@section('content')
    <h1>Все заявки пользователей</h1>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <td>user_id</td>
            <td>user_name</td>
            <td>description</td>
            <td>photo</td>
            <td>status</td>
            <td>date_create</td>
            <td>date_update</td>
        </tr>
        </thead>
        <tbody>
        @foreach($appeals as $appeal)
            <tr>
                <td>{{$appeal->user_id}}</td>
                <td>{{$appeal->user_name}}</td>
                <td style="width: 500px">{{$appeal->description}}</td>
                <td>photo</td>
                <td class="">
                    <form action="{{route('appeal.update',$appeal->id)}}" method="post">
                        @csrf
                        @method('put')
                        <select name="status" id="">
                            <option selected hidden="hidden">{{$appeal->status}}</option>
                            @foreach(StatusAppealEnum::translate() as $status)
                                <option>{{$status->value}}</option>
                            @endforeach
                        </select>
                        <button type="submit">изменить</button>
                    </form>
                </td>
                <td>{{$appeal->created_at}}</td>
                <td>{{$appeal->updated_at}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
