@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated  Water & Drainage Systems in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Expert utility infrastructure for stormwater, sewage, and water pipelines
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
      Shreeyash Construction offers reliable and technically sound solutions for drainage and water supply projects in Maharashtra. From municipal storm drains to underground water pipelines, we ensure long-lasting performance, accurate alignment, and compliance with engineering norms. Our works span across residential layouts, industrial parks, and infrastructure projects.


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
            'title' => 'Storm Water Drainage',
            'desc' => 'Shreeyash Construction specializes in storm water drainage systems, including open drains, box culverts, and slope management to prevent waterlogging during monsoons. We offer both RCC and precast solutions across Maharashtra.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('storm_water_drainage'),
        ],
        [
            'title' => 'Underground Water Supply Pipeline',
            'desc' => 'We provide complete underground water pipeline installation services for housing societies, commercial zones, and industrial layouts. Our team ensures accurate trenching, pipe laying, and chamber construction for long-lasting performance.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('underground_water_supply'),
        ],
        [
                'title' => 'Drainage Line & Sewer Work',
                'desc' => 'As expert sewer and drainage pipeline contractors, we install RCC, PVC, and HDPE pipelines with proper slope, joint sealing, and manhole construction to ensure effective and durable sewage management.',
                'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
                'link' => route('drainage_line_sewer_work'),
        ],
        [
                'title' => 'RCC & Precast Chamber Installation',
                'desc' => 'Shreeyash Construction installs strong and accessible RCC and precast chambers across Maharashtra. Our chambers support inspection and utility access, ensuring reliability and long-term service in drainage systems.',
                'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
                'link' => route('rcc_chamber_installation'),
        ],
        [
                'title' => 'Precast U Drain Installation',
                'desc' => 'We offer professional precast U drain installation services for industrial zones, roadside drainage, and storm water discharge. Our U drains are installed with proper slope, bedding, and sealing, suitable for both open and covered use.',
                'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
                'link' => route('precast_u_drain'),
        ],
    
    
        ];

      @endphp

        @foreach($services as $service)
            <a href="{{ $service['link'] }}" class="block bg-gray-50 p-6 rounded-lg shadow hover:shadow-md transition-shadow duration-300 hover:bg-yellow-50">
                <div class="flex items-center mb-3">
                {!! $service['icon'] !!}
                <h3 class="ml-3 text-xl font-semibold text-gray-800">{{ $service['title'] }}</h3>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </a>
        @endforeach

    </div>
  </div>
</section>

@endsection
