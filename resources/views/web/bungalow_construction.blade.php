@extends('layouts.app')

@section('title', 'Bungalow Construction & Expert Bungalow Builders')

@push('meta')
  <meta name="description" content="Bungalow Construction by expert bungalow builders. From new construction bungalows to pre construction bungalows, we deliver quality, cost-efficient homes.">
  <link rel="canonical" href="{{ url('/bungalow_construction') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bungalow Construction Services",
    "provider": { "@type": "Organization", "name": "Shreeyash Construction" },
    "areaServed": "Raigad, Maharashtra, India",
    "serviceType": "Bungalow construction, pre-construction bungalows, luxury villas, compact homes",
    "url": "{{ url('/bungalow_construction') }}",
    "description": "Expert bungalow builders delivering premium, durable homes from concept to completion."
  }
  </script>
@endpush

@section('content')
  @once
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body{font-family:'Poppins',sans-serif;background-color:#f8f9fa}
      :root{ --brand:#1c2c3e; --accent:#f25c05; }
      .hero-pattern{
        background-color:#1f2937;
        background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
      .card{transition:transform .2s ease, box-shadow .2s ease}
      .card:hover{transform:translateY(-5px);box-shadow:0 10px 20px rgba(0,0,0,0.1)}
      .spec-row:nth-child(odd){background-color:rgba(28,44,62,0.04)}
      .chip{display:inline-block;padding:.5rem .75rem;border-radius:.75rem;background:#f3f4f6}
    </style>
  @endonce

 {{-- Page Header Section --}}

<section class="hero-pattern text-white shadow-lg bg-cover bg-center"
         style="background-image: url('/storage/logo/header/Bungalow.png');height: 430px;width: 1500px;">
  <div class="container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
        Bungalow Construction Services
      </h1>
    </div>
  </div>
</section>


{{-- Content Section --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-8xl mx-auto text-center">
      <p class="text-xl text-yellow-500 font-semibold mb-6">
        Premium, durable, and aesthetically designed homes by a trusted Maharashtra contractor
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left">
        <p class="mb-4">
          Shreeyash Construction is one of Maharashtra’s most trusted names in
          <strong>bungalow construction</strong>, delivering premium, long-lasting, and
          architecturally refined homes. Our architects, engineers, and craftsmen specialize in
          <strong>new construction bungalows</strong>, <strong>pre-construction planning</strong>, and
          complete <strong>bungalow house construction</strong> tailored to your vision and lifestyle.
        </p>

        <div class="mt-6 p-5 rounded-lg bg-gray-50 border border-gray-200">
          <p class="text-base md:text-lg font-medium text-gray-900">
            Building in Raigad, hill plots, or private estates?
          </p>
          <p class="mt-2 text-gray-700">
            We manage every detail — from concept to completion — with transparent pricing,
            code-compliant engineering, and meticulous site execution.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Why Choose -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Shreeyash Construction as Your Bungalow Builders?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Experienced Builders</h3>
          <p class="text-gray-600 text-sm">On-time, on-budget delivery; consistent quality and finishes.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Custom Design</h3>
          <p class="text-gray-600 text-sm">Unique floor plans tailored to lifestyle & site conditions.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Advanced Engineering</h3>
          <p class="text-gray-600 text-sm">IS code compliance, earthquake-resistant structural design.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Transparent Pricing</h3>
          <p class="text-gray-600 text-sm">Detailed estimates—no hidden surprises.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">End-to-End Service</h3>
          <p class="text-gray-600 text-sm">Design → approvals → build → finishing → handover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types -->
  <section class="py-16 bg-gray-50" id="services">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Types of Bungalow Construction We Offer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">
          From budget-friendly homes to ultra-luxury villas, choose the track that fits your goals and timeline.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">1) Custom New Build</h3>
          <p class="text-gray-700 text-sm">Start from your vision—bespoke plan, façades, and interior concepts.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">2) Pre-Construction</h3>
          <p class="text-gray-700 text-sm">Pre-designed plans with minor customizations for faster approvals.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">3) Luxury & Designer</h3>
          <p class="text-gray-700 text-sm">Premium finishes, imported materials, pools, landscaping, smart homes.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">4) Economical & Compact</h3>
          <p class="text-gray-700 text-sm">Optimized plans—great for 2BHK/3BHK cost targets without compromise.</p>
        </div>
      </div>
    </div>
  </section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- SECTION HEADING -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Technical Data & Cost Guide for Bungalow Construction</h2>
            <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        </div>

        <!-- 2 COLUMN LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT COLUMN : TECHNICAL DATA TABLE -->
            <div>
                <h3 class="text-xl text-yellow-500 font-semibold mb-4">Technical Specifications</h3>

                <div class="overflow-x-auto bg-gray-50 rounded-lg shadow">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-[color:var(--brand)] text-white">
                                <th class="py-3 px-4 text-left">Parameter</th>
                                <th class="py-3 px-4 text-left">Specification</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation</td><td class="py-3 px-4">RCC (M20) + 150mm PCC + Anti-termite</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Wall Structure</td><td class="py-3 px-4">AAC / Clay Bricks – 150–200mm</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Roof Slab</td><td class="py-3 px-4">RCC (M20) + Waterproofing</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Flooring</td><td class="py-3 px-4">Vitrified / Italian Marble / Wooden</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Doors & Windows</td><td class="py-3 px-4">Teakwood / uPVC / Aluminum</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Electrical</td><td class="py-3 px-4">ISI Wiring, Modular Switches</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Plumbing</td><td class="py-3 px-4">CPVC / UPVC – Branded</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Painting</td><td class="py-3 px-4">Weather Coat + Premium Interior</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Load Bearing</td><td class="py-3 px-4">IS-Code Seismic Design</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Project Duration</td><td class="py-3 px-4">6–12 Months</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT COLUMN : COST GUIDE -->
            <div>
                <h3 class="text-xl text-yellow-500 font-semibold mb-4">Construction Cost Guide</h3>

                <!-- COST RANGE CARDS -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

                    <div class="bg-white p-6 rounded-lg shadow card">
                        <h4 class="text-lg font-semibold mb-2">Economy Range</h4>
                        <p class="text-gray-700">₹1,500 – ₹1,800 / sq.ft.</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow card">
                        <h4 class="text-lg font-semibold mb-2">Standard Range</h4>
                        <p class="text-gray-700">₹1,900 – ₹2,500 / sq.ft.</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow card">
                        <h4 class="text-lg font-semibold mb-2">Luxury Range</h4>
                        <p class="text-gray-700">₹2,600 – ₹4,000+ / sq.ft.</p>
                    </div>

                </div>

                <!-- EXAMPLE COST TABLE -->
                <div class="overflow-x-auto bg-white rounded-lg shadow">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-[color:var(--brand)] text-white">
                                <th class="py-3 px-4 text-left">Example</th>
                                <th class="py-3 px-4 text-left">Indicative Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="spec-row"><td class="py-3 px-4">2 BHK Bungalow</td><td class="py-3 px-4">₹25–35 Lakhs</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4">3 BHK Bungalow</td><td class="py-3 px-4">₹40–60 Lakhs</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</section>


  <!-- Process -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Our Construction Process – From Design to Handover</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">1) Consultation & Site Visit</h3>
          <p class="text-gray-600 text-sm">Needs, budget, plot dimensions; feasibility & site inspection.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">2) Architectural Design</h3>
          <p class="text-gray-600 text-sm">Floor plans, 3D elevations, structural drawings; Vastu optional.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">3) Approvals & Documentation</h3>
          <p class="text-gray-600 text-sm">Municipal approvals, RERA compliance, legal formalities.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">4) Foundation & Structure</h3>
          <p class="text-gray-600 text-sm">Excavation, footing, RCC framework construction.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">5) Walls, Roofing & Utilities</h3>
          <p class="text-gray-600 text-sm">Masonry, slab casting, electrical & plumbing installations.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">6) Finishing & Interiors</h3>
          <p class="text-gray-600 text-sm">Flooring, painting, carpentry, kitchen & bath fittings.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card lg:col-span-2">
          <h3 class="font-semibold mb-2">7) Final Handover</h3>
          <p class="text-gray-600 text-sm">Site cleanup, QA inspection, documentation & keys.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Energy Efficiency & Modern Features -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Energy Efficiency & Modern Features</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="bg-white rounded-xl p-8 shadow-md">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
          <span class="chip text-[color:var(--brand)] font-medium text-center">Solar power systems</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Rainwater harvesting</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Double-glazed windows</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">LED lighting & efficient appliances</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Smart home automation</span>
        </div>
      </div>
      <p class="text-gray-600 text-center mt-6 max-w-3xl mx-auto">
        These features reduce long-term operational costs and increase property value.
      </p>
    </div>
  </section>

  <!-- Benefits of a Bungalow -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Why Investing in a Bungalow is a Smart Choice</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Privacy & Space</h3>
          <p class="text-gray-600 text-sm">Greater openness and customization vs apartments.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">High Resale Value</h3>
          <p class="text-gray-600 text-sm">Quality construction ensures long-term value retention.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Peaceful Lifestyle</h3>
          <p class="text-gray-600 text-sm">Tailored to family, retirement, or vacation needs.</p>
        </div>
      </div>
    </div>
  </section>

 

  <script>
    (function(){
      const t=document.getElementById('menu-toggle'), m=document.getElementById('mobile-menu');
      if(t && m){ t.addEventListener('click', ()=> m.classList.toggle('hidden')); }
    })();
  </script>
@endsection
