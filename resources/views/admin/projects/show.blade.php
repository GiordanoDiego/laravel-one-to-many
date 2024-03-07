@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">
                    {{ $project->title }}
                </h1>

                <h2>
                    Slug: {{ $project->slug }}
                </h2>

                <p>
                    {{ $project->content }}
                </p>

                <div class="text-center">
                    <a href="{{ route('admin.project.index') }}">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
