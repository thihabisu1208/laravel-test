@extends('layout.app')

@section('content')
    <h1 class="title">プロジェクト一覧</h1>
    @foreach ($projects as $project)
        <div>
            <a href="/projects/{{ $project->id }}">
                <h2>{{ $project->title }}</h2>
            </a>
            <hr>
        </div>
    @endforeach
@endsection