@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated Industrial Infrastructure in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Delivering quality & durability across public and private sectors
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
      Shreeyash Construction offers end-to-end industrial infrastructure solutions across Maharashtra. From PEB sheds to full-scale factory buildings, we handle everything from design to final finishing with high-quality standards and structural integrity.
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
            'title' => 'Industrial Shed Work',
            'desc' => 'We design and build durable pre-engineered industrial sheds for factories, warehouses, and logistics hubs—offering fast installation and scalable solutions across Maharashtra',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('industrial_shed_work'),
        ],
        [
            'title' => 'Factory Building Civil Work',
            'desc' => 'We carry out complete factory building civil works including columns, footings, machine foundations, and RCC flooring. As a trusted contractor in Khopoli, we ensure structural precision and reliable execution for heavy industrial projects across Maharashtra',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('factory_building_civil_work'),
        ]
        ];

      @endphp
        @foreach($services as $service)
            <a href="{{ $service['link'] }}"
              class="group block bg-white border border-gray-200 p-6 rounded-xl shadow-md transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-[1.02] hover:border-orange-500 hover:bg-orange-50 cursor-pointer">
              
                <div class="flex items-center mb-4">
                    {{-- Optional icon animation --}}
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
