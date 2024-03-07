@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
<div class="container">
    <h1 class="text-center">
        Project Edit
    </h1>
</div>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('admin.project.index') }}" class="btn btn-primary">
                    Torna all'index dei projects
                </a>
            </div>


            <form action="{{ route('admin.project.update', ['project' => $project->id]) }}" method="POST">
                
                @csrf
                @method('PUT')
                
                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input  type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo del progetto..." maxlength="1024" value="{{ old('title', $project->title) }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                
                {{-- content --}}
                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3" maxlength="4096" placeholder="Inserisci la descrizione...">{{ old('content', $project->content) }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div>
                    <button type="submit" class="btn btn-success w-100">
                        modifica
                    </button>
                </div>
    
            </form>
        </div>
    </div>
</div>
@endsection
