@extends('layouts.app')

@section('title', "List of Tasks")

@section('content')
    @forelse ( $tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['task'=> $task->id]) }}">{{ $task->title }}</a>
        </div>
        @empty
        <div>Task list is empty</div>
    @endforelse

    @section('footer')
        <a href="tasks/create">Create Task</a>
    @endsection
@endsection
