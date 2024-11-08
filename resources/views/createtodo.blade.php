@extends('navbar')
@section('main-section')


<div class="container">
<div class="my-3 card">
    <div class="card-body">
    <form action="{{ route('todo.maketodo') }}" method="post">
        @csrf]
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input class="form-control" name="title" type="text" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="task" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="date">Date</label>
            <input class="form-control" type="date" name="date" required>
        </div>                    
        <div class="form-group">
            <label class="form-label" for="category">Category</label>
            <select class="form-control" name="category" id="category" required>
                <option value="work">Work</option>
                <option value="personal">Personal</option>
                <option value="activity">Activity</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="priority">Priority</label>
            <input type="checkbox" id="priority" name="priority" value="0">
        </div>
        <div class="d-flex justify-content-center form-group mt-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="d-flex justify-content-center form-group mt-2">
            <a href="{{route("todo.index")}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
</div>
@endsection

               




