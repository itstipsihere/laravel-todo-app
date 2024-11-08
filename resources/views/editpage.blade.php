@extends('navbar')
@section('main-section')


<div class="container">
<div class="my-3 card">
    <div class="card-body">
    <form action="{{route('update.todo',['id'=>$todo->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input class="form-control" name="title" type="text" required value="{{$todo->title}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="task" rows="10" required>{{$todo->task}}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="date">Date</label>
            <input class="form-control" type="date" value="{{$todo->date}}" name="date" required>
        </div>                    
        <div class="form-group">
            <label class="form-label" for="category">Category</label>
            <select class="form-control" name="category" id="category" required>
                <option value="work" {{ old('category', $todo->category) == 'work' ? 'selected' : '' }}>Work</option>
                <option value="personal" {{ old('category', $todo->category) == 'personal' ? 'selected' : '' }}>Personal</option>
                <option value="activity" {{ old('category', $todo->category) == 'activity' ? 'selected' : '' }}>Activity</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="priority">Priority</label>
            <input type="checkbox" id="priority" name="priority" value="1" {{ old('priority', $todo->priority) ? 'checked' : '' }}>

        </div>
        <div class="d-flex justify-content-between form-group mt-2">
            <button class="btn btn-primary">Update</button>
            <a href="{{route("todo.index")}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
</div>
@endsection
