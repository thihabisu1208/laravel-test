@extends('layout.app')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">
        {{ $project->description }}

        <p>
            <a href="/projects/{{ $project->id }}/edit">編集する</a>
        </p>

    </div>

    @if ($project->tasks->count())
    <div class="box">
        <h2 class="subtitle">タスク一覧</h2>
        <hr>
        <ul>
            @foreach ($project->tasks as $task)
                <li>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf

                        <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : '' }}">
                            <input type="checkbox" name="completed" id="" onChange="this.form.submit()"
                            {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>

                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label for="description" class="label">タスク追加</label>

            <div class="control">
                <input type="text" name="description" id="" class="input" placeholder="New Task" 
                value="{{ old('description') }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">追加する</button>
            </div>
        </div>

        @include('projects.errors')
    </form>

@endsection