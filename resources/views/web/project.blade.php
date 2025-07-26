@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Projects</h1>

        {{-- Filter Buttons (optional) --}}
        {{-- 
        <div class="flex justify-center gap-4 mb-10">
            <a href="{{ route('project') }}" class="bg-yellow-400 text-gray-800 px-4 py-2 rounded-lg font-medium">All</a>
            <a href="{{ route('project.byType', 'roads') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium">Roads</a>
            <a href="{{ route('project.byType', 'residential') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium">Residential</a>
            <a href="{{ route('project.byType', 'industrial') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium">Industrial</a>
        </div> 
        --}}

        @php
            $projectsWithImages = $projects->filter(fn($p) => $p->images->first());
            $projectsWithoutImages = $projects->filter(fn($p) => !$p->images->first());
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    {{-- Projects with images --}}
            @foreach($projectsWithImages as $project)
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-lg transition-all">
                    <img src="{{ asset('storage/' . $project->images->first()->image_path) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $project->title }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ Str::limit($project->description, 80) }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}"
                        class="text-yellow-600 hover:text-yellow-700 text-sm font-medium">View Details →</a>
                    </div>
                </div>
            @endforeach

    {{-- Projects without images (placeholder) --}}
            @foreach($projectsWithoutImages as $project)
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-lg transition-all">
                    <img src="{{ asset('images/placeholder.jpg') }}"
                        alt="Placeholder"
                        class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $project->title }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ Str::limit($project->description, 80) }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}"
                        class="text-yellow-600 hover:text-yellow-700 text-sm font-medium">View Details →</a>
                    </div>
                </div>
            @endforeach

            @if($projects->isEmpty())
                <p class="text-center col-span-3">No projects found.</p>
            @endif
</div>

    </div>
</section>
@endsection
