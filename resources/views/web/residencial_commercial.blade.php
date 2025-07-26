@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated  Residential & Commercial Civil Work Systems in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Home and commercial construction services across Khopoli, Karjat, Patalganga, and Raigad
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
     Shreeyash Construction is a reputed name for residential and commercial civil works in Khopoli, Karjat, Patalganga MIDC, and surrounding Raigad regions. We provide high-quality, cost-effective construction solutions tailored to urban, industrial, and rural demands. From bungalow construction to retail units and renovations, our civil team is committed to timely delivery and robust workmanship.
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
            'title' => 'Bungalow Construction',
            'desc' => 'We build custom bungalows in Khopoli and Karjat, following Vastu rules and strong RCC structure. From planning to final work, we help you build your dream farmhouse or villa.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('bungalow_construction'),
        ],
        [
            'title' => 'Commercial Unit Civil Work',
            'desc' => 'We handle civil work for commercial spaces like showrooms, offices, and shops in Patalganga MIDC, Khalapur, and Raigad. Our focus is on safety, smart use of space, and lasting quality.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('commercial_unit_civil_work'),
        ]
    
    
        ];

      @endphp

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
