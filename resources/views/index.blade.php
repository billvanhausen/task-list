<h1>
Task List
</h1>

<div>
    @forelse ( $tasks as $task)
        <div>
            <a href="{{ $task->id }}">{{ $task->title }}</a>
        </div>
        @empty
        <div>Task list is empty</div>
    @endforelse
</div>
