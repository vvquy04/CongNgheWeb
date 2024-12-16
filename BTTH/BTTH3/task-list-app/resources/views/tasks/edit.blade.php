@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Task</h1>

    <!-- Form Chỉnh Sửa Task -->
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
        </div>

        <!-- Long Description -->
        <div class="mb-3">
            <label for="long_description" class="form-label">Long Description</label>
            <textarea class="form-control" id="long_description" name="long_description" rows="5">{{ $task->long_description }}</textarea>
        </div>

        <!-- Submit và Cancel -->
        <button type="submit" class="btn btn-outline-secondary">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn  text-decoration-underline ">Cancel</a>
    </form>
</div>
@endsection
