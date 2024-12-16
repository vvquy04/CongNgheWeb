@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Add Task</h1>

    <!-- Form Thêm Task -->
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter task title" required>
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">DESCRIPTION</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter task description"></textarea>
        </div>

        <!-- Long Description Input -->
        <div class="mb-3">
            <label for="long_description" class="form-label">LONG DESCRIPTION</label>
            <textarea class="form-control" id="long_description" name="long_description" rows="5" placeholder="Enter long description"></textarea>
        </div>

        <!-- Submit và Cancel Button -->
        <div class="d-flex">
            <button type="submit" class="btn btn-outline-secondary me-2">Add Task</button>
            <a href="{{ route('tasks.index') }}" class="btn ">Cancel</a>
        </div>
    </form>
</div>
@endsection
