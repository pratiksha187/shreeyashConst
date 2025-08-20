@extends('layouts.app')

@section('title', 'Home')
@section('meta')
    <meta name="title" content="Top Road Contractors in Maharashtra – Shreeyash Construction">
    <meta name="description" content="Expert road construction services across Maharashtra. Shreeyash Construction delivers quality roads with durability and precision.">
@endsection
@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated Road Contractors in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Delivering quality & durability across public and private sectors
    </p>
  </div>
</section>

<!-- About Section -->
{{-- <section class="bg-gray-50 py-14"> --}}
  {{-- <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    <p class="text-gray-700 mb-4">
      Shreeyash Construction is among the most trusted road contractors in Maharashtra, offering end-to-end road infrastructure solutions for both public and private sectors. We specialize in:
    </p>
    <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
      <li>Asphalt Roads</li>
      <li>Concrete Roads</li>
      <li>GSB & WMM Layers</li>
      <li>Subgrade Preparation</li>
    </ul>
    <p class="text-gray-700">
      We deliver projects across Maharashtra including <strong>Pune</strong>, <strong>Raigad</strong>, and <strong>Khopoli</strong> — ensuring high performance, smooth finish, and full compliance with MORTH/IRC standards.
    </p>
  </div> --}}
  
{{-- </section> --}}
<!-- About Section -->
<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
      <strong>Top-rated Road Contractors in Maharashtra</strong> delivering quality & durability. Shreeyash Construction is among the most trusted road contractors in Maharashtra, offering end-to-end road infrastructure solutions for both public and private sectors. We specialize in the construction of asphalt roads, concrete roads, GSB & WMM layers, and subgrade preparation — ensuring durability, smoothness, and adherence to MORTH/IRC standards. Whether it's internal township roads, highways, or industrial zones, we deliver high-performance roadwork across Maharashtra, including Pune, Raigad, and Khopoli.
    </p>
    
    <p class="text-gray-700 mb-4">
      Shreeyash Construction is among the most trusted road contractors in Maharashtra, offering end-to-end road infrastructure solutions for both public and private sectors. We specialize in:
    </p>
    <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
      <li>Asphalt Roads</li>
      <li>Concrete Roads</li>
      <li>GSB & WMM Layers</li>
      <li>Subgrade Preparation</li>
    </ul>
    <p class="text-gray-700">
      We deliver projects across Maharashtra including <strong>Pune</strong>, <strong>Raigad</strong>, and <strong>Khopoli</strong> — ensuring high performance, smooth finish, and full compliance with MORTH/IRC standards.
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
            'title' => 'Asphalt / Bitumen Road Construction',
            'desc' => 'We use hot mix bitumen and advanced paver finishers to build flexible pavements for highways, internal roads, and industrial areas.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('asphalt_paving'),
        ],
        [
            'title' => 'Concrete Road Construction (Inset & Offset)',
            'desc' => 'Specialized in rigid pavement construction using RCC and cutting-edge inset/offset paving methods — ideal for heavy-duty roads.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('inset_concrete_paving'),
        ],
        [
            'title' => 'Asphalt Compaction',
            'desc' => 'High-tonnage tandem rollers and expert operators ensure perfect density and finish for both new roads and patchwork.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('asphalt_compaction'),
        ],
        [
            'title' => 'GSB & WMM Laying',
            'desc' => 'We offer high-quality base preparation with accurate grading and compaction, complying with all MORTH specs.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('gsb_wmm_laying'),
        ],
        [
            'title' => 'Base Layer & Subgrade Preparation',
            'desc' => 'We carry out subgrade work with precision: earthwork, soil stabilization, drainage, and compaction.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('base_layer_subgrade_preparation'),
        ]
        ];

      @endphp
        @foreach($services as $service)
            <a href="{{ $service['link'] }}"
              class="group block bg-white border border-gray-200 p-6 rounded-xl shadow-md transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 hover:border-orange-500 hover:bg-orange-50 cursor-pointer">
                
                <div class="flex items-center mb-4">
                    {!! $service['icon'] !!}
                    <h3 class="ml-3 text-xl font-semibold text-gray-800 group-hover:text-yellow-600 transition-colors duration-300">
                        {{ $service['title'] }}
                    </h3>
                </div>

                <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-800 transition-colors duration-300">
                    {{ $service['desc'] }}
                </p>
            </a>
        @endforeach



    </div>
  </div>
</section>

@endsection
