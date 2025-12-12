@extends('layouts.app')

@section('title', "List of Tasks")

@section('content')
    @forelse ( $tasks as $task)
        <div>
            <a href="tasks/{{ $task->id }}">{{ $task->title }}</a>
        </div>
        @empty
        <div>Task list is empty</div>
    @endforelse
@endsection
