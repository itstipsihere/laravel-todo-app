l<!-- resources/views/todos/show.blade.php -->

@extends('navbar')
@section('main-section')

<div class="container">
    <div class="card my-3">
    <div class="card-header">
        <h2>Todo List</h2>
    </div>

        <div class="card-body">
            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="{{$todo->title}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">description</label>
                <textarea class="form-control" disabled>{{$todo->task}}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" value="{{$todo->date}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">category</label>
                <input type="text" class="form-control" value="{{$todo->category}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">status</label>
                <input type="text" class="form-control" value="{{$todo->status}}" disabled>
            </div>

            <div class="mt-2 d-flex justify-content-between form-group">
                <a href="{{route('to.editpage',['id'=>$todo->id])}}" class="btn btn-primary">Edit</a>
                <a href="{{route('todo.index')}}" class="btn btn-primary">Back to Todos</a>
            </div>
        </div>
    </div>
</div>

@endsection