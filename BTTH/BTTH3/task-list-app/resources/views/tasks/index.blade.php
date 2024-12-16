@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>The List of Tasks</h1>
    {{-- Thông báo thành công --}}
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong class="text-success">Success!</strong> {{ session('success') }}
    <button type="button" class="btn-close text-success" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <a href="{{ route('tasks.create') }}" class="text-dark">Add Task</a>

    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="d-flex justify-content-between">
                <!-- Kiểm tra trạng thái completed và gạch ngang nếu hoàn thành -->
                <a href="{{ route('tasks.show', $task->id) }}" 
                   class="text-dark text-decoration-none {{ $task->completed ? 'text-decoration-line-through' : '' }}">
                    {{ $task->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="mt-3 ">
        {{ $tasks->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
