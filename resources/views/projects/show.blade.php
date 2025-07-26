@extends('layouts.app')

@section('title', $project['title'])

@section('content')
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $project['title'] }}</h1>
        <p class="text-lg text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-2"></i>{{ $project['location'] }}</p>
        <p class="text-gray-500 mb-6"><i class="fas fa-calendar-alt mr-2"></i>{{ $project['year'] }} | <span class="font-medium">{{ $project['status'] }}</span></p>
        <p class="text-gray-700 leading-relaxed mb-10">{{ $project['desc'] }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($project['images'] as $image)
                <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                    {{-- <img src="{{ asset('storage/' . $image) }}" alt="" class="w-full h-64 object-cover"> --}}
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="" class="w-full h-64 object-cover">

                </div>
                {{-- http://127.0.0.1:8000/storage/logo/project/center_rail/1.jpg --}}
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ url()->previous() }}" class="text-yellow-600 hover:text-yellow-800 font-semibold">&larr; Back to Projects</a>
        </div>
    </div>
</section>
@endsection
