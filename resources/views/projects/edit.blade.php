@extends('layout.app')

@section('content')
    <h1 class="title">編集</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label">タイトル</label>

            <div class="control">
                <input type="text" name="title" placeholder="Title" class="input" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">説明</label>

            <div class="control">
                <textarea name="description" cols="30" rows="10" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">編集する</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">削除する</button>
            </div>
        </div>
    </form>
@endsection