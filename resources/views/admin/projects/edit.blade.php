@extends('layouts.admin')


@section('content')

    <form method="POST" action="{{ route('admin.projects.update' , ['project' => $project->slug]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title', $project->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image url</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror " id="image" name="image" value="{{old('image', $project->image)}}">
            @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{old('content', $project->content)}}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link_project" class="form-label">Link project</label>
            <input type="text" class="form-control @error('link_project') is-invalid @enderror " id="link_project" name="link_project" value="{{old('link_project', $project->link_project)}}">
            @error('link_project')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>

@endsection
