@extends('layouts.app')

@section('title', 'Retrofitting & Demolition Experts – Shreeyash Construction')

@section('meta')
  <meta name="description" content="Professional retrofitting and demolition services in Maharashtra, ensuring safety, speed, and quality by Shreeyash Construction.">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta property="og:title" content="Retrofitting & Demolition Experts – Shreeyash Construction">
  <meta property="og:description" content="Professional retrofitting and demolition services in Maharashtra, ensuring safety, speed, and quality by Shreeyash Construction.">
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
  style="background-image: url('{{ asset('storage/retrofiting.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Top-rated Retrofitting & Demolition Systems in Maharashtra</h1>
    <p class="text-xl mb-2">Professional Industrial Modification & Safe Demolition Services</p>
    <p class="text-lg opacity-90 mb-8">
      Serving major MIDC zones across Maharashtra — Patalganga, Taloja, Roha, and beyond.
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
      Shreeyash Construction provides <b>specialized retrofitting and demolition services</b> for industrial and civil
      structures across Maharashtra. From <b>factory modification</b> to <b>structural rehabilitation</b> and <b>controlled demolition</b>, 
      we ensure <b>safety, precision, and full regulatory compliance</b> at every step.
    </p>
    <p class="text-gray-600">
      Our projects in <b>Patalganga, Roha, and Taloja MIDCs</b> have made us one of the most trusted industrial
      contractors for renovation and dismantling work in the state.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Retrofitting & Demolition Services
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
        $services = [
          [
            'title' => 'Structural Modification (Retrofitting)',
            'desc' => 'We perform structural retrofitting and layout modification for factories, warehouses, and industrial buildings. Our solutions include jacketing, carbon fiber wrapping, and RCC strengthening — ensuring compliance and longevity.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l9-9 9 9"/><path d="M9 21V9h6v12"/></svg>',
            'image' => asset('storage/Structuralretrofiting.jpg'),
            'link' => route('structural_modification'),
          ],
          [
            'title' => 'Repair, Strengthening & Reinforcement',
            'desc' => 'We offer professional repair and strengthening for aging or damaged RCC structures. Our services include epoxy injection, grouting, and steel anchoring for industrial buildings in Mahad, Dhatav, and Chakan.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/reinforced.jpg'),
            'link' => route('repair_strengthening_reinforcement'),
          ],
          [
            'title' => 'Demolition Work',
            'desc' => 'We handle safe and controlled demolition for RCC structures, tanks, and factory sheds using mechanical and manual techniques. Debris removal and site cleanup are managed end-to-end under safety guidelines.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M3 6h18v6H3z"/></svg>',
            'image' => asset('storage/demolution.jpg'),
            'link' => route('demolition_work'),
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
        ⚙️ Why Choose Us?
      </h3>
      <ul class="text-base text-gray-700 space-y-2 text-left max-w-md mx-auto">
        <li>✅ Certified & Experienced Civil Engineers</li>
        <li>✅ Advanced Machinery & Safety Gear</li>
        <li>✅ RCC Strengthening & Retrofitting Experts</li>
        <li>✅ Safe & Controlled Demolition Practices</li>
        <li>✅ Timely Completion & Site Clean-up</li>
        <li>✅ Serving Maharashtra MIDCs</li>
      </ul>
    </div>
  </div>
</section>

@endsection
