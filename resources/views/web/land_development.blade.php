@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated Land Development in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Transforming raw land into construction-ready sites across Maharashtra
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
      Shreeyash Construction provides comprehensive land development services in Maharashtra, helping landowners and developers turn raw plots into ready-to-build assets. We specialize in earthwork, grading, plot access, and compaction, using advanced machinery and experienced teams to deliver efficient and compliant land preparation solutions.
    </p>

  </div>
</section>

<!-- Services Section -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">Our Core Services</h2>
    
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Service Card -->
      @php
       
        $services = [
        [
            'title' => 'Plot Leveling, Grading, and Road Access',
            'desc' => 'We offer precise plot leveling and grading services to shape land for residential layouts, industrial projects, or commercial use. Our services also include the creation of temporary or permanent road access to sites, ensuring logistics and movement readiness. Whether for a private NA plot or a large industrial estate, we’re a reliable partner for land development in Maharashtra.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('industrial_shed_work'),
        ],
        [
            'title' => 'Earth Cutting, Filling & Compaction',
            'desc' => 'With a strong fleet of JCBs, tippers, and compactors, we handle bulk earth cutting and filling work with accuracy and speed. Our team ensures proper backfilling, soil compaction, and layer-by-layer leveling to meet building standards. Choose us for earthwork and soil filling services across Raigad, Khopoli, and surrounding areas.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('earth_cutting_filling_compaction'),
        ]
        ];

      @endphp

        {{-- @foreach($services as $service)
            <a href="{{ $service['link'] }}" class="block bg-gray-50 p-6 rounded-lg shadow hover:shadow-md transition-shadow duration-300 hover:bg-yellow-50">
                <div class="flex items-center mb-3">
                {!! $service['icon'] !!}
                <h3 class="ml-3 text-xl font-semibold text-gray-800">{{ $service['title'] }}</h3>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </a>
        @endforeach --}}
@foreach($services as $service)
    <a href="{{ $service['link'] }}"
       class="group block bg-gray-50 border border-gray-200 p-6 rounded-lg shadow-md transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-orange-500 hover:bg-orange-50 cursor-pointer">
       
        <div class="flex items-center mb-3">
            {{-- Add hover animation to icon --}}
            {!! str_replace('class="', 'class="transition-transform duration-300 group-hover:rotate-6 ', $service['icon']) !!}

            <h3 class="ml-3 text-xl font-semibold text-gray-800 group-hover:text-yellow-600 transition-colors duration-300">
                {{ $service['title'] }}
            </h3>
        </div>

        <p class="text-gray-700 text-sm leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
            {{ $service['desc'] }}
        </p>
    </a>
@endforeach

    </div>
  </div>
</section>

@endsection
