@extends('layouts.app')

@section('title', 'Residential & Commercial Civil Works – Shreeyash Construction')

@section('meta')
  <meta name="description" content="High-quality civil work for residential & commercial projects across Maharashtra, delivered with precision by Shreeyash Construction.">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta property="og:title" content="Residential & Commercial Civil Works – Shreeyash Construction">
  <meta property="og:description" content="High-quality civil work for residential & commercial projects across Maharashtra, delivered with precision by Shreeyash Construction.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
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

  .btn-primary:hover {
    background-color: #a1843f;
  }

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
  style="background-image: url('{{ asset('storage/residencial.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">
      Top-rated Residential & Commercial Civil Work Systems in Maharashtra
    </h1>
    <p class="text-xl mb-2">Top-rated Civil Construction Experts in Maharashtra</p>
    <p class="text-lg opacity-90 mb-8">
      Home, commercial, and industrial civil work services across Khopoli, Karjat, Patalganga, and Raigad.
    </p>
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
      Shreeyash Construction is a trusted name for **residential and commercial civil works** in Khopoli, Karjat,
      Patalganga MIDC, and nearby regions. We deliver **high-quality, cost-effective construction** with a focus on
      durability, space optimization, and modern design.
    </p>
    <p class="text-gray-600">
      From **bungalow construction** to **commercial buildings and renovations**, our experienced team ensures
      **precision, quality, and timely execution** for every project.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Civil Work Services
    </h2>

    <div class="grid md:grid-cols-2 gap-8">
      @php
        $services = [
          [
            'title' => 'Bungalow Construction',
            'desc' => 'We build custom-designed bungalows and villas in Khopoli and Karjat, following Vastu principles with a strong RCC structure and premium finishes. From design to completion — your dream home, delivered.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l9-9 9 9"/><path d="M9 21V9h6v12"/></svg>',
            'image' => asset('storage/bungalow.jpeg'),
            'link' => route('bungalow_construction'),
          ],
          [
            'title' => 'Commercial Unit Civil Work',
            'desc' => 'We execute civil construction for showrooms, offices, retail units, and shops across Patalganga MIDC, Khalapur, and Raigad. Our designs ensure safety, usability, and modern aesthetics.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/industrial.jpg'),
            'link' => route('commercial_unit_civil_work'),
          ],
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
        🏗️ Why Choose Us?
      </h3>
      <ul class="text-base text-gray-700 space-y-2 text-left max-w-md mx-auto">
        <li>✅ Experienced Civil Engineering Team</li>
        <li>✅ RCC Structure & Vastu-compliant Designs</li>
        <li>✅ End-to-End Project Handling</li>
        <li>✅ Transparent Costing & Quality Assurance</li>
        <li>✅ Timely Project Completion</li>
        <li>✅ Serving Maharashtra</li>
      </ul>
    </div>
  </div>
</section>

@endsection
