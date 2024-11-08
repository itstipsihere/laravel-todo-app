@extends('navbar')
@section('main-section')
<div class="container">
    <div class="container-fluid">
        <div class="my-3 d-flex justify-content-between headpart">
            <h2>All todos</h2>
            <a href="{{route("todo.create")}}" class="btn btn-primary "> Add </a>
        </div>
        </div>
        <table class="my-4 table table-stripped table-dark">
            <thead>
                <tr >
                    <th scope="id">Id</th>
                    <th scope="title">Title</th>
                    <th scope="action">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr valign="middle">
                    <td>
                   
                     <a class="text-white text-decoratiion-none" href="{{route('todo.view',['id'=>$todo->id])}}">{{ $todo->id }}</a>
                    </td>
                    <td>
                        {{$todo->title}}
                    </td>
                    <td>
                        <a href="{{route('todo.delete', ['id'=>$todo->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
@endsection('main-section')