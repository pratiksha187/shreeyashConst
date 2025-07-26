@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated  Compound Wall Construction Systems in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Durable boundary walls and fencing solutions for industrial, commercial, and residential sites
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
     Shreeyash Construction offers customized compound wall construction services in Maharashtra, delivering safety, privacy, and clear site demarcation for residential, commercial, and industrial plots. Our walls are built using high-quality materials, with precise alignment and long-lasting finishes. Whether it's masonry, precast, or fencing — we ensure timely execution with structural integrity.
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
            'title' => 'UCR Masonry Compound Walls',
            'desc' => 'We build strong, weather-resistant compound walls using uncoursed rubble (UCR) stone and cement mortar, ideal for farms, industries, and property boundaries.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('ucr_masonry_compound_walls'),
        ],
        [
            'title' => 'Precast Compound Walls',
            'desc' => 'Our precast walls use concrete panels and columns for quick, modular installation. A fast, cost-effective solution for strong boundary fencing.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('precast_compound_walls'),
        ],
        [
            'title' => 'Fencing Work',
            'desc' => 'We provide barbed wire, chain-link, and MS angle fencing for land marking and site protection. Durable and easy to install for all types of properties.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('fencing_work'),
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
