@extends('layouts.app')

@section('title', 'Base Layer & Subgrade Preparation | Road Construction – Shreeyash Construction')

@push('meta')
  <meta name="description" content="Shreeyash Construction offers professional base layer and subgrade preparation for roads, highways & industrial pavements. Expert GSB & WMM laying with technical precision.">
  <link rel="canonical" href="{{ url('/base_layer_subgrade') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Service",
    "name":"Base Layer & Subgrade Preparation",
    "provider":{"@type":"Organization","name":"Shreeyash Construction"},
    "areaServed":"Maharashtra, India",
    "serviceType":"Base layer preparation, subgrade compaction, GSB, WMM laying, pavement foundation",
    "url":"{{ url('/base_layer_subgrade') }}",
    "description":"Expert subgrade and base layer preparation services for durable roads and pavements, following IRC and MORTH specifications with advanced equipment."
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

 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/BaseLayer.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
          Base Layer & Subgrade Preparation
        </h1>
        
      </div>
    </div>
  </section>
{{-- Content Section --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-xl text-gray-800 font-semibold mb-6">
        Strong Foundations for Durable Roads and Pavements
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
        <p class="mb-4">
          Shreeyash Construction provides expert services in <strong>base layer</strong> and
          <strong>subgrade preparation</strong>—critical steps in road building, industrial flooring,
          and pavement construction. Properly prepared subgrade and base layers ensure uniform load distribution,
          long-term durability, and resistance to settlement or cracking.
        </p>
        <p>
          Our team uses advanced equipment and adheres to <strong>MoRTH</strong> guidelines for precise grading,
          compaction, and stabilization.
        </p>
      </div>
    </div>
  </div>
</section>


  <!-- What is Subgrade -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">What is Subgrade Preparation?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <ul class="list-disc list-inside text-gray-700 space-y-3 max-w-3xl mx-auto">
        <li>Clearing & Grubbing – Removal of vegetation, roots, and debris</li>
        <li>Soil Excavation & Filling – Achieving required levels and uniformity</li>
        <li>Moisture Conditioning – Adjusting soil to optimum moisture content</li>
        <li>Compaction – Ensuring proper density and CBR for durability</li>
      </ul>
    </div>
  </section>

  <!-- Base Layer Preparation -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Base Layer Preparation</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <p class="text-center max-w-3xl mx-auto text-gray-700 mb-6">
        On top of the subgrade, a base layer is laid to provide added strength and support for asphalt or concrete surfacing. This typically includes GSB or WMM layers placed with precision.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        <div class="card p-6">
          <h3 class="text-lg font-semibold mb-3">Granular Sub-Base (GSB)</h3>
          <p class="text-gray-700">Crushed stone, gravel, or quarry dust providing a stable base.</p>
        </div>
        <div class="card p-6">
          <h3 class="text-lg font-semibold mb-3">Wet Mix Macadam (WMM)</h3>
          <p class="text-gray-700">Graded aggregates mixed with water and compacted for uniform support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Specs -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Technical Specifications – Subgrade & Base Layer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4"></div>
      </div>
      <div class="overflow-x-auto bg-gray-50 rounded-lg shadow-md">
        <table class="min-w-full">
          <thead>
            <tr class="bg-[color:var(--brand)] text-white">
              <th class="py-3 px-4 text-left">Layer</th>
              <th class="py-3 px-4 text-left">Material</th>
              <th class="py-3 px-4 text-left">Thickness</th>
              <th class="py-3 px-4 text-left">Compaction Standard</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spec-row"><td class="py-3 px-4">Subgrade</td><td class="py-3 px-4">Natural soil / compacted fill</td><td class="py-3 px-4">As per design level</td><td class="py-3 px-4">97% of MDD (Modified Proctor)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4">GSB</td><td class="py-3 px-4">Crushed aggregates (63mm to fines)</td><td class="py-3 px-4">150mm – 200mm per layer</td><td class="py-3 px-4">98% of MDD</td></tr>
            <tr class="spec-row"><td class="py-3 px-4">WMM</td><td class="py-3 px-4">Graded aggregates (20mm down to fines)</td><td class="py-3 px-4">100mm – 250mm per layer</td><td class="py-3 px-4">98% density with vibratory compaction</td></tr>
            <tr class="spec-row"><td class="py-3 px-4">Tolerances</td><td class="py-3 px-4">Level ±10mm</td><td class="py-3 px-4">Thickness ±8mm</td><td class="py-3 px-4">Surface evenness ≤12mm</td></tr>
          </tbody>
        </table>
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
      <div class="bg-white rounded-xl p-8 shadow grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
        <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">National & State Highways</span>
        <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Industrial & Factory Roads</span>
        <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Township & Residential Layouts</span>
        <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Airport Runways & Aprons</span>
        <span class="inline-block px-3 py-2 rounded-lg bg-gray-100 text-[color:var(--brand)] text-center">Concrete & Asphalt Pavements</span>
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
        <li>Expertise in GSB & WMM laying with strict quality control</li>
        <li>Modern equipment: graders, paver finishers, vibratory rollers</li>
        <li>Compliance with IRC & MORTH specifications</li>
        <li>Proven track record in road and infrastructure projects</li>
        <li>Timely project execution with durable results</li>
      </ul>
    </div>
  </section>
@endsection
