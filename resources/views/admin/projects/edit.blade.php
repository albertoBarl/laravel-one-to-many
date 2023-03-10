@extends('layouts.admin')

@section('content')
    <div id="edit-project">
        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST"
            class="d-flex flex-column justify-content-center p-5">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $project) }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea rows="5" class="form-control" name="content">{{ old('content', $project) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Types</label>
                <select name="type_id" id="type_id">
                    <option value="">Seleziona categoria</option>
                    @foreach ($types as $item)
                        <option value="{{ $item->id }}"
                            {{ $item->id == old('type_id', $project->type_id) ? 'selected' : '' }}> {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save project</button>
            </div>
        </form>

    </div>
@endsection
