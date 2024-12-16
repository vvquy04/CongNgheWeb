@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Tiêu đề công việc -->
    <h2 class="mb-4">{{ $task->title }}</h2>

    <!-- Nút Quay lại -->
    <a href="{{ route('tasks.index') }}" class="text-decoration-none text-dark fw-bold mb-3 d-inline-block">
        ← Go back to the task list!
    </a>

    <!-- Nội dung mô tả -->
    <div class="mb-4">
        <p>{{ $task->description }}</p>
    </div>

    <div class="mb-4">
        <p>{{ $task->long_description }}</p>
    </div>

    <!-- Ngày tạo và cập nhật -->
    <div class="text-muted mb-3">
        <small>Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}</small>
    </div>

    <!-- Trạng thái công việc -->
    <div class="mb-4">
        <h6 class="{{ $task->completed ? 'text-success' : 'text-danger' }}">
            {{ $task->completed ? 'Completed' : 'Incomplete' }}
        </h6>
    </div>

    <!-- Nút chức năng -->
    <div class="d-flex gap-2">
        <!-- Edit Button -->
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-outline-secondary">Update</a>

        <!-- Mark as not completed -->
         <!-- Mark as completed -->
    @if(!$task->completed)
        <form action="{{ route('tasks.toggleStatus', $task->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-success">Mark as Completed</button>
        </form>
    @else
        <form action="{{ route('tasks.toggleStatus', $task->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Mark as not completed</button>
        </form>
    @endif
        <!-- Delete Button -->
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-secondary">Delete</button>
        </form>
    </div>
</div>
@endsection
