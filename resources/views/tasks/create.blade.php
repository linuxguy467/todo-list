@extends('layout')

@section('content')
    <form class="mt-10" action="{{ route('tasks.store') }}" method="post">
        @csrf
        <h1>Create Task</h1>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" required />
            </div>
            <div class="form-group col-md-4">
                <label for="priorities">Priorities</label>
                <select name="task_priorities[]" id="priorities" class="form-control" multiple>
                    @foreach ($priorities as $priority)
                        <option value="{{ $priority->id }}">{{ $priority->type }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="8" cols="100"
                      placeholder="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Create</button>
    </form>
@endsection
