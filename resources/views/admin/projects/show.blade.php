@extends('layouts.admin')

@section('content')
    <div class="p-5">
        Titolo:
        <h3 class="bg-dark text-white p-3 rounded">{{ $project->title }}</h3>
        Contenuto:
        <p class="bg-dark text-white p-3 rounded">{{ $project->content }}</p>
    </div>
@endsection
