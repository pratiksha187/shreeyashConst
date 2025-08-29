@extends('layouts.app')

@section('title', 'Asphalt Compaction Services in Maharashtra – Shreeyash Construction')

@push('meta')
<meta name="description" content="Shreeyash Construction provides asphalt & bitumen road construction services across Maharashtra — end-to-end paving, compaction, and QC.">
@endpush

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
  body{font-family:'Poppins',sans-serif;scroll-behavior:smooth;background:#f8f9fa}
  .hero-pattern{
    background-color:#1a202c;
    background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232d3748' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .section-transition{position:relative;height:80px;overflow:hidden}
  .road-pattern{
    background-color:#2d3748;
    background-image:linear-gradient(90deg,#f7fafc 0%,#f7fafc 10%,transparent 10%,transparent 90%,#f7fafc 90%,#f7fafc 100%);
    height:8px;width:100%;margin:24px 0;
  }
  .card{background:#fff;border-radius:0.75rem;box-shadow:0 10px 20px rgba(0,0,0,.08);overflow:hidden}
  .card .stripe{height:8px;background:#f59e0b}
  .lift{transition:transform .25s ease, box-shadow .25s ease}
  .lift:hover{transform:translateY(-4px)}
  .section-title{font-size:1.875rem;font-weight:700;color:#1f2937}
  .section-underline{width:5rem;height:4px;background:#f59e0b;margin:.75rem auto 1.25rem;border-radius:9999px}
  .spec-row:nth-child(odd){background:rgba(15,76,129,.05)}
</style>

 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/Compaction.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         Asphalt Compaction Services
        </h1>
        
      </div>
    </div>
  </section>
<!-- <div class="road-pattern"></div> -->

<!-- OVERVIEW STYLE CARD (content unchanged) -->
<section class="py-14 bg-white">
  <div class="container mx-auto px-4">
    <div class="card max-w-4xl mx-auto lift">
      <div class="stripe"></div>
      <div class="p-8 md:p-10 text-gray-700 leading-relaxed text-center">
        <p>
          Shreeyash Construction is a trusted name in road construction and infrastructure development
          across Maharashtra. We specialize in asphalt compaction, ensuring long-lasting, high-performance
          roads that meet national and international quality standards.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="road-pattern"></div>

<!-- WHAT IS ASPHALT COMPACTION (same content, styled like design) -->
<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="section-title text-center">What is Asphalt Compaction?</h2>
    <div class="section-underline"></div>

    <div class="card max-w-4xl mx-auto lift">
      <div class="stripe"></div>
      <div class="p-8 md:p-10 text-gray-700 leading-relaxed">
        <p class="text-center">
          Asphalt compaction is the process of densifying the asphalt mix after it has been laid using rollers. Proper compaction ensures:
        </p>
        <ul class="list-disc list-inside mt-4 max-w-2xl mx-auto">
          <li>Increased load-bearing capacity</li>
          <li>Improved water resistance</li>
          <li>Reduced air voids</li>
          <li>Longer pavement life</li>
        </ul>
        <p class="mt-4 text-center">
          This crucial phase determines the durability and performance of the asphalt pavement.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="road-pattern"></div>

<!-- PROCESS (turned into three design cards; text unchanged) -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="section-title text-center">Our Asphalt Compaction Process</h2>
    <div class="section-underline"></div>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
      <!-- Initial Breakdown Rolling -->
      <div class="card lift">
        <div class="stripe"></div>
        <div class="p-6 text-gray-700">
          <h3 class="text-xl font-semibold mb-3">Initial Breakdown Rolling</h3>
          <ul class="list-disc list-inside space-y-1">
            <li>Performed immediately after laying the mix.</li>
            <li>Uses vibratory steel-drum rollers.</li>
            <li>Ensures initial compaction when the material is hottest.</li>
          </ul>
        </div>
      </div>

      <!-- Intermediate Compaction -->
      <div class="card lift">
        <div class="stripe"></div>
        <div class="p-6 text-gray-700">
          <h3 class="text-xl font-semibold mb-3">Intermediate Compaction</h3>
          <ul class="list-disc list-inside space-y-1">
            <li>Achieved using pneumatic-tired rollers.</li>
            <li>Helps to seal voids and improve density.</li>
          </ul>
        </div>
      </div>

      <!-- Finish Rolling -->
      <div class="card lift">
        <div class="stripe"></div>
        <div class="p-6 text-gray-700">
          <h3 class="text-xl font-semibold mb-3">Finish Rolling</h3>
          <ul class="list-disc list-inside space-y-1">
            <li>Performed with smooth steel-wheel rollers.</li>
            <li>Provides a uniform, smooth surface texture.</li>
            <li>Eliminates roller marks.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="road-pattern"></div>

<!-- TECHNICAL SPECS (same table, wrapped in design card) -->
<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="section-title text-center">Technical Specifications of Asphalt Compaction</h2>
    <div class="section-underline"></div>

    <div class="card max-w-5xl mx-auto overflow-x-auto">
      <div class="stripe"></div>
      <div class="p-0">
        <table class="min-w-full">
          <thead>
            <tr class="bg-yellow-600 text-white">
              <th class="py-3 px-4 text-left">Parameter</th>
              <th class="py-3 px-4 text-left">Specification</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Target</td><td class="py-3 px-4">92%–97% of Maximum Theoretical Density (MTD)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Layer Thickness</td><td class="py-3 px-4">40mm to 100mm (depending on design)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Rolling Temperature Range</td><td class="py-3 px-4">120°C to 140°C</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Number of Roller Passes</td><td class="py-3 px-4">6 to 10 (varies by mix design and layer thickness)</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Type of Rollers Used</td><td class="py-3 px-4">Tandem Vibratory, Pneumatic-Tired, Static Rollers</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Moisture Content</td><td class="py-3 px-4">&lt; 0.5%</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Air Voids in Compacted Mix</td><td class="py-3 px-4">3% to 6%</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<div class="road-pattern"></div>

<!-- WHY CHOOSE US (same bullets, styled) -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="section-title text-center">Why Choose Shreeyash Construction?</h2>
    <div class="section-underline"></div>

    <div class="card max-w-3xl mx-auto lift">
      <div class="stripe"></div>
      <div class="p-8 md:p-10">
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start"><span class="inline-block w-2.5 h-2.5 bg-yellow-500 rounded-full mt-2 mr-3"></span>Experienced Engineers & Operators</li>
          <li class="flex items-start"><span class="inline-block w-2.5 h-2.5 bg-yellow-500 rounded-full mt-2 mr-3"></span>High-Efficiency Rollers & Paving Equipment</li>
          <li class="flex items-start"><span class="inline-block w-2.5 h-2.5 bg-yellow-500 rounded-full mt-2 mr-3"></span>Strict Quality Control & On-Site Testing</li>
          <li class="flex items-start"><span class="inline-block w-2.5 h-2.5 bg-yellow-500 rounded-full mt-2 mr-3"></span>Compliance with MoRTH, IRC, and NHAI standards</li>
          <li class="flex items-start"><span class="inline-block w-2.5 h-2.5 bg-yellow-500 rounded-full mt-2 mr-3"></span>On-time Project Execution</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
