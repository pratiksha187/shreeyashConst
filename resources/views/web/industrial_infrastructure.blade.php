@extends('layouts.app')

@section('title', 'Industrial Infrastructure Experts – Shreeyash Construction')

@section('meta')
  <meta name="title" content="Industrial Infrastructure Experts – Shreeyash Construction">
  <meta name="description" content="Leading industrial infrastructure projects in Maharashtra with modern designs, durability, and timely execution by Shreeyash Construction.">
@endsection

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<style>
  :root {
    --primary: #b8994c; /* Gold */
    --dark: #333333;    /* Charcoal Gray */
    --light: #f5f5f5;   /* Light Background */
  }

  body { 
    box-sizing: border-box; 
    color: var(--dark); 
    background-color: var(--light); 
  }

  .btn-primary {
    background-color: var(--primary);
    color: white;
    transition: background 0.3s ease;
  }
  .btn-primary:hover { background-color: #a1843f; }

  .service-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
  }

  footer {
    background-color: var(--dark);
    color: white;
  }
</style>

<!-- ================= HERO SECTION ================= -->
<header class="relative text-white py-24 bg-center bg-cover" 
  style="background-image: url('{{ asset('storage/industrial-infrastructure.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Industrial Infrastructure</h1>
    <p class="text-xl mb-2">Experts in Durable Industrial Projects Across Maharashtra</p>
    <p class="text-lg opacity-90 mb-8">High-strength construction. Timely execution. Trusted quality.</p>
    <a href="#services" class="btn-primary inline-flex items-center px-8 py-4 rounded-lg text-lg font-semibold">
      🏗️ Explore Our Services
    </a>
  </div>
</header>



<!-- ================= INTRO SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Shreeyash Construction?</h2>
    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
      Shreeyash Construction offers end-to-end industrial infrastructure solutions across Maharashtra.
      From PEB sheds to full-scale factory buildings, we handle everything from design to final finishing
      with the highest quality standards and structural integrity.
    </p>
    <p class="text-gray-600">
      Our experienced engineers and project managers ensure precision, durability, and timely delivery —
      making us a trusted name in industrial development.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Industrial Infrastructure Services
    </h2>

    <div class="grid md:grid-cols-2 gap-8">
      @php
        $services = [
          [
            'title' => 'Industrial Shed Work',
            'desc' => 'We design and build durable pre-engineered industrial sheds for factories, warehouses, and logistics hubs—offering fast installation and scalable solutions across Maharashtra.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l2-2 6 6 6-6 2 2"/><path d="M3 6h18v6H3z"/></svg>',
            'image' => asset('/storage/logo/header/Industrial.png'),
            'link' => route('industrial_shed_work'),
          ],
          [
            'title' => 'Factory Building Civil Work',
            'desc' => 'We carry out complete factory building civil works including columns, footings, machine foundations, and RCC flooring. As a trusted contractor in Khopoli, we ensure structural precision and reliable execution for heavy industrial projects.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><path d="M3 9h18"/></svg>',
            'image' => asset('/storage/logo/header/Factory.png'),
            'link' => route('factory_building_civil_work'),
          ]
        ];
      @endphp

      @foreach($services as $service)
        <a href="{{ $service['link'] }}" 
          class="group block bg-white border border-gray-200 p-6 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-[1.02] hover:border-[var(--primary)] hover:bg-orange-50 cursor-pointer">
          
          <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" 
               class="w-full h-48 object-cover rounded-lg mb-4">
          
          <div class="flex items-center mb-4">
            {!! str_replace('class="', 'class="transition-transform duration-300 group-hover:rotate-6 ', $service['icon']) !!}
            <h3 class="ml-3 text-xl font-semibold text-gray-800 group-hover:text-[var(--primary)] transition-colors duration-300">
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

<!-- ================= WHY CHOOSE US ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <div class="bg-white p-8 rounded-xl shadow-md border border-[var(--primary)]">
      <h3 class="text-2xl font-bold text-[var(--primary)] mb-4 flex items-center justify-center gap-2">
        🏅 Why Choose Us?
      </h3>
      <ul class="text-base text-gray-700 space-y-2 text-left max-w-md mx-auto">
        <li>✅ MORTH / IRC Compliant</li>
        <li>✅ Experienced Engineering Team</li>
        <li>✅ Modern Equipment</li>
        <li>✅ Quality Control</li>
        <li>✅ Timely Delivery</li>
        <li>✅ Serving Maharashtra</li>
      </ul>
    </div>
  </div>
</section>

@endsection
