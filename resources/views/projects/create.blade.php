@extends('layout.app')

@section('content')
    <h1 class="title">新規プロジェクト作成</h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <input type="text" name="title" placeholder="Project Title"
                class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea name="description" id="" placeholder="Project Description"
                class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">登録する</button>
            </div>
        </div>

        @include('projects.errors')
    </form>
@endsection