@extends('layouts.app')

@section('title', 'Masonry Compound Wall Construction – Shreeyash Construction')

@push('meta')
  <meta name="description" content="Shreeyash Construction builds durable masonry compound walls using bricks or stone for residential, industrial, and commercial plots. Custom design & reinforced finish.">
  <link rel="canonical" href="{{ url('/masonry_compound_wall') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Service",
    "name":"Masonry Compound Wall Construction",
    "provider":{"@type":"Organization","name":"Shreeyash Construction"},
    "areaServed":"Maharashtra, India",
    "serviceType":"Compound wall construction, brick masonry walls, stone masonry, reinforced boundary walls",
    "url":"{{ url('/masonry_compound_wall') }}",
    "description":"Durable masonry compound walls for residential, commercial, and industrial properties with reinforced design and quality finishes."
  }
  </script>
@endpush

@section('content')
  @once
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body{font-family:'Poppins',sans-serif;background:#f8f9fa}
      :root{ --brand:#1c2c3e; --accent:#f25c05; }
      .hero-pattern{
        background-color:#1f2937;
        background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
      .card{background:#fff;border-radius:.75rem;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,.08);transition:transform .2s, box-shadow .2s}
      .card:hover{transform:translateY(-5px);box-shadow:0 10px 20px rgba(0,0,0,.1)}
      .spec-row:nth-child(odd){background:rgba(28,44,62,.05)}
    </style>
  @endonce

  <!-- Hero -->
  <section class="hero-pattern text-white py-20">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Masonry Compound Walls</h1>
        <p class="text-lg md:text-xl mb-8 opacity-90">Durable and Custom-Built Compound Walls for Industrial, Residential & Commercial Projects</p>
        <div class="bg-white/10 rounded-lg p-6 inline-block text-left">
          <p class="opacity-90">
            Shreeyash Construction is a trusted civil contractor in Maharashtra for constructing masonry compound walls that provide safety, boundary definition, and aesthetic appeal. Our compound walls are built using high-quality materials such as cement bricks, fly ash bricks, red bricks, or stone masonry as per client requirements and site conditions. We undertake end-to-end execution from foundation to plastering, ensuring long-lasting structural integrity with proper reinforcement and waterproofing treatments.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Types of Masonry Compound Walls We Construct</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="card">
          <div class="h-1.5 bg-[color:var(--accent)]"></div>
          <div class="p-6">
            <h3 class="text-lg font-semibold mb-3">Brick Masonry Walls</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
              <li>Made using red bricks, fly ash bricks, or cement blocks</li>
              <li>Economical and durable for residential or small-scale industrial needs</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div class="h-1.5 bg-[color:var(--accent)]"></div>
          <div class="p-6">
            <h3 class="text-lg font-semibold mb-3">Stone Masonry Compound Walls</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
              <li>Ideal for rural, industrial, or rugged terrain areas</li>
              <li>Offers excellent strength and natural aesthetics</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div class="h-1.5 bg-[color:var(--accent)]"></div>
          <div class="p-6">
            <h3 class="text-lg font-semibold mb-3">Plastered & Painted Masonry Walls</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
              <li>Provides a neat and finished look</li>
              <li>Can be painted or textured for visual appeal</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div class="h-1.5 bg-[color:var(--accent)]"></div>
          <div class="p-6">
            <h3 class="text-lg font-semibold mb-3">Reinforced Masonry Walls</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
              <li>Integrated with vertical and horizontal RCC bands</li>
              <li>Suitable for high walls or load-bearing boundary walls</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Specs -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Technical Specifications – Masonry Compound Wall</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full">
          <thead>
            <tr class="bg-[color:var(--brand)] text-white">
              <th class="py-3 px-4 text-left">Item</th>
              <th class="py-3 px-4 text-left">Specification</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Wall Height</td><td class="py-3 px-4">1.5 m to 3.0 m (customizable)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Depth</td><td class="py-3 px-4">600 mm to 1000 mm depending on soil and height</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Type</td><td class="py-3 px-4">Stone masonry / RCC strip foundation</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Wall Thickness</td><td class="py-3 px-4">115 mm to 230 mm (as per design)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Brick Type</td><td class="py-3 px-4">Cement bricks / Fly ash bricks / Red bricks</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Mortar Ratio</td><td class="py-3 px-4">1:4 or 1:6 Cement:Sand mix</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Plastering</td><td class="py-3 px-4">Internal & external, 12 mm to 15 mm thick</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Reinforcement</td><td class="py-3 px-4">8 mm / 10 mm bars in RCC pillars or coping beams</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Finish</td><td class="py-3 px-4">Smooth plaster, exterior-grade paint or texture coating</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Construction Process -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Construction Process</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
        <div class="card p-6"><h3 class="font-semibold mb-2">1) Site Measurement & Layout</h3><p class="text-gray-600 text-sm">Accurate demarcation & setting out.</p></div>
        <div class="card p-6"><h3 class="font-semibold mb-2">2) Trenching & Foundation</h3><p class="text-gray-600 text-sm">Excavation, base prep & footing.</p></div>
        <div class="card p-6"><h3 class="font-semibold mb-2">3) Masonry Work</h3><p class="text-gray-600 text-sm">Brick/stone courses per design.</p></div>
        <div class="card p-6"><h3 class="font-semibold mb-2">4) Pillars (If Required)</h3><p class="text-gray-600 text-sm">RCC pillars / coping for strength.</p></div>
        <div class="card p-6"><h3 class="font-semibold mb-2">5) Plaster & Finishing</h3><p class="text-gray-600 text-sm">Internal & external plastering.</p></div>
        <div class="card p-6"><h3 class="font-semibold mb-2">6) Paint / Gate Pillars</h3><p class="text-gray-600 text-sm">Exterior finish & accessories.</p></div>
      </div>
    </div>
  </section>

  <!-- Applications -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Applications</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <div class="bg-white rounded-xl p-8 shadow">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
          <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Industrial & factory plots</span>
          <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Residential housing & bungalows</span>
          <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Schools, hospitals & institutions</span>
          <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Farmhouses / open plots</span>
          <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Commercial perimeters</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Why Shreeyash Construction?</h2>
      <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
        <li>Quality-focused workmanship with skilled masons</li>
        <li>Timely project execution and cost-effective pricing</li>
        <li>High-strength materials and reinforced design</li>
        <li>Custom wall height, design, and finish options</li>
        <li>We follow IS 1905 and local municipal norms for compound walls</li>
      </ul>
    </div>
  </section>
  <script>
    // Optional: mobile menu toggle if your layout uses it
    (function(){
      const t=document.getElementById('menu-toggle'), m=document.getElementById('mobile-menu');
      if(t && m){ t.addEventListener('click', ()=> m.classList.toggle('hidden')); }
    })();
  </script>
@endsection
