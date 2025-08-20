@extends('layouts.app')

@section('title', 'Home')
<meta name="title" content="Retrofitting & Demolition Experts – Shreeyash Construction">
    <meta name="description" content="Professional retrofitting and demolition services in Maharashtra, ensuring safety, speed, and quality by Shreeyash Construction.">
@section('content')

<!-- Hero Section -->
<section class="bg-yellow-100 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Top-rated  Retrofitting & Demolition Systems in Maharashtra
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
      Heavy-duty industrial retrofitting and safe demolition works across Maharashtra MIDCs
    </p>
  </div>
</section>

<section class="bg-gray-50 py-14">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Shreeyash Construction?</h2>
    
    <!-- NEW PARAGRAPH -->
    <p class="text-gray-700 mb-4">
        Shreeyash Construction provides specialized industrial retrofitting and demolition services across Patalganga, Taloja, Roha, and other major MIDC zones of Maharashtra. From factory modification to RCC demolition, our services are executed with structural precision, complete safety protocols, and compliance with local guidelines.
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
            'title' => 'Structural Modification (Retrofitting)',
            'desc' => 'We offer structural retrofitting services for industrial sheds and buildings needing layout changes, load-bearing upgrades, or utility conversions. Our team uses jacketing, carbon fiber wrapping, and RCC civil modifications — making us a trusted retrofitting contractor in Patalganga MIDC, Roha MIDC, and Taloja MIDC',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('structural_modification'),
        ],
        [
            'title' => 'Repair, Strengthening & Reinforcement',
            'desc' => 'We carry out structural repair and strengthening services for aging or damaged factory structures. Our team serves industries in Mahad, Chakan, and Dhatav MIDCs, providing epoxy grouting, steel anchoring, and RCC reinforcement as per audit or consultant guidelines.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('repair_strengthening_reinforcement'),
        ],
        [
            'title' => 'Demolition Work',
            'desc' => 'Shreeyash Construction performs safe and systematic demolition of industrial sheds, tanks, RCC blocks, and civil structures. We’re a reliable demolition contractor for industrial clients in Turbhe, Taloja, and Roha, ensuring complete debris removal and compliance with safety codes.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" ...>...</svg>',
            'link' => route('demolition_work'),
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
