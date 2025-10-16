@extends('layouts.app')

@section('title', 'Water & Drainage Systems – Shreeyash Construction')

@section('meta')
  <meta name="description" content="Reliable water and drainage system construction in Maharashtra with expert planning and execution by Shreeyash Construction.">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta property="og:title" content="Water & Drainage Systems – Shreeyash Construction">
  <meta property="og:description" content="Reliable water and drainage system construction in Maharashtra...">
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
  style="background-image: url('{{ asset('storage/logo/main/water-drainage-bg.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Water & Drainage Systems</h1>
    <p class="text-xl mb-2">Reliable Utility Infrastructure Across Maharashtra</p>
    <p class="text-lg opacity-90 mb-8">
      Expert construction of water pipelines, storm drains, and sewage systems with lasting durability.
    </p>
    <a href="#services" class="btn-primary inline-flex items-center px-8 py-4 rounded-lg text-lg font-semibold">
      💧 Explore Our Services
    </a>
  </div>
</header>

<!-- ================= INTRO SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Shreeyash Construction?</h2>
    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
      Shreeyash Construction offers reliable and technically sound solutions for **water and drainage system construction**
      across Maharashtra. From **municipal stormwater management** to **underground water supply networks**, we deliver
      projects with accuracy, durability, and compliance to engineering standards.
    </p>
    <p class="text-gray-600">
      Our team specializes in executing end-to-end infrastructure projects for **industrial parks, residential layouts,**
      and **urban infrastructure developments**.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Water & Drainage Services
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
        $services = [
          [
            'title' => 'Storm Water Drainage',
            'desc' => 'Shreeyash Construction specializes in storm water drainage systems, including open drains, box culverts, and slope management to prevent waterlogging during monsoons. We offer both RCC and precast solutions across Maharashtra.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M5 12l7-7 7 7"/></svg>',
            'image' => asset('storage/logo/header/Storm.png'),
            'link' => route('storm_water_drainage'),
          ],
          [
            'title' => 'Underground Water Supply Pipeline',
            'desc' => 'We provide complete underground water pipeline installation services for housing societies, commercial zones, and industrial layouts. Our team ensures accurate trenching, pipe laying, and chamber construction for long-lasting performance.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/logo/header/Underground.png'),
            'link' => route('underground_water_supply'),
          ],
          [
            'title' => 'Drainage Line & Sewer Work',
            'desc' => 'We install RCC, PVC, and HDPE pipelines with proper slope, sealing, and manhole construction to ensure effective and long-lasting sewage systems in urban and industrial projects.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94"/><path d="M9.69 8h11.48"/></svg>',
            'image' => asset('storage/logo/header/sewer-work.jpg'),
            'link' => route('drainage_line_sewer_work'),
          ],
          [
            'title' => 'RCC & Precast Chamber Installation',
            'desc' => 'Shreeyash Construction installs strong, reliable RCC and precast chambers for inspection and maintenance access, ensuring system longevity and ease of service.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/logo/header/rcc-chamber.jpg'),
            'link' => route('rcc_chamber_installation'),
          ],
          [
            'title' => 'Precast U Drain Installation',
            'desc' => 'We offer professional precast U drain installation for industrial areas, roadsides, and storm water discharge systems — with proper slope, bedding, and joint sealing.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M3 6h18v6H3z"/></svg>',
            'image' => asset('storage/logo/header/u-drain.jpg'),
            'link' => route('precast_u_drain'),
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
        💧 Why Choose Us?
      </h3>
      <ul class="text-base text-gray-700 space-y-2 text-left max-w-md mx-auto">
        <li>✅ Experienced Water & Drainage Experts</li>
        <li>✅ Use of RCC, PVC, and HDPE Materials</li>
        <li>✅ Compliance with IS & MJP Standards</li>
        <li>✅ Advanced Machinery for Excavation & Laying</li>
        <li>✅ Quality Testing and Long-lasting Performance</li>
        <li>✅ Serving Maharashtra</li>
      </ul>
    </div>
  </div>
</section>

@endsection
