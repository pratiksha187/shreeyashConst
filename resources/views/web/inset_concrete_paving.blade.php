@extends('layouts.app')

@section('title', 'Cement Concrete Road Construction | Shreeyash Construction')

@push('meta')
<meta name="description" content="Shreeyash Construction executes cement concrete (CC/RCC) road construction across Maharashtra — rigid pavements, townships, highways, and industrial estates adhering to MoRTH & IRC standards.">
@endpush

@section('content')
{{-- Page-scoped styles (layout already loads Tailwind + fonts) --}}
<style>
  body { font-family: 'Poppins', sans-serif; }
  .hero-pattern{
    background-color:#1f2937;
    background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .section-title { @apply text-3xl md:text-4xl font-bold text-gray-800; }
  .section-underline { @apply w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6; }
  .spec-row:nth-child(odd){ background:rgba(15,76,129,0.05); }
</style>


 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/Cement.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
          Cement Concrete Road Construction Contractor in Maharashtra
        </h1>
        
      </div>
    </div>
  </section>
{{-- OVERVIEW (moved content from old hero) --}}
<section id="overview" class="py-12 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto text-center">
      <p class="text-lg md:text-xl text-gray-700 mb-6">
        Shreeyash Construction is a trusted <strong>concrete road construction company in India</strong>, delivering high-performance
        <strong>RCC roads across Maharashtra</strong> for townships, industrial parks, and highways. We execute
        <strong>rigid pavement construction (inset/offset)</strong> strictly as per <strong>MoRTH &amp; IRC standards</strong>.
      </p>

      <div class="bg-blue-50 border border-blue-100 rounded-lg p-6 text-left inline-block">
        <p class="text-gray-800">
          Looking for “concrete road contractors near me” you can trust?
          As a Government-registered firm, every kilometre we pave follows state-level QA/QC benchmarks.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- ============ WHY CHOOSE CC ROADS ============ --}}
<section id="why-choose" class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="section-title">Why Choose Cement Concrete Roads (CC Roads)?</h2>
      <div class="section-underline"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-gray-50 rounded-lg p-6 shadow hover:shadow-lg transition">
        <div class="text-yellow-800 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">High Durability</h3>
        <p class="text-gray-600">Typical design life of 20–30 years, significantly outlasting bituminous roads.</p>
      </div>

      <div class="bg-gray-50 rounded-lg p-6 shadow hover:shadow-lg transition">
        <div class="text-yellow-800 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Low Lifecycle Cost</h3>
        <p class="text-gray-600">Fewer resurfacings vs. asphalt → lower long-term maintenance.</p>
      </div>

      <div class="bg-gray-50 rounded-lg p-6 shadow hover:shadow-lg transition">
        <div class="text-yellow-800 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Superior Load Capacity</h3>
        <p class="text-gray-600">Ideal for highways, townships, and industrial estates with heavy traffic.</p>
      </div>

      <div class="bg-gray-50 rounded-lg p-6 shadow hover:shadow-lg transition">
        <div class="text-yellow-800 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Monsoon-Friendly</h3>
        <p class="text-gray-600">Consistent performance in severe rains across Maharashtra.</p>
      </div>
    </div>
  </div>
</section>

{{-- ============ OUR SERVICES ============ --}}
<section id="services" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="section-title">Our Cement Concrete Road Construction Services</h2>
      <p class="text-gray-600 mt-2">(Popular with clients searching “concrete road contractors near me”)</p>
      <div class="section-underline"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      @php
        $services = [
          ['title' => 'RCC Pavement Construction', 'desc' => 'Reinforced cement concrete pavements for maximum durability & load.'],
          ['title' => 'Rigid Pavement Roads', 'desc' => 'Urban & rural rigid pavements designed for diverse terrain.'],
          ['title' => 'Industrial Concrete Roadways', 'desc' => 'Heavy-duty RCC roads for industrial zones with special loads.'],
          ['title' => 'Municipal CC Road Packages', 'desc' => 'End-to-end urban CC road packages with drainage/kerbs.'],
          ['title' => 'Highway CC Projects', 'desc' => 'National & State highway CC projects for longevity & safety.'],
          ['title' => 'Township & Society Roads', 'desc' => 'Internal roads for residential complexes & SEZs.'],
          ['title' => 'Asphalt-to-CC Upgrades', 'desc' => 'Widening & conversion from asphalt to CC.'],
          ['title' => 'Paver Block & Drainage', 'desc' => 'Kerbs, pavers & drainage integration for full infra.'],
        ];
      @endphp

      @foreach($services as $s)
        <div class="service-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
          <div class="h-3 bg-yellow-500"></div>
          <div class="p-6">
            <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
              <i class="fa-solid fa-road text-yellow-800"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">{{ $s['title'] }}</h3>
            <p class="text-gray-600">{{ $s['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ SERVICE FOOTPRINT ============ --}}
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="section-title">Service Footprint Across Maharashtra</h2>
      <div class="section-underline"></div>
      <p class="text-gray-600 max-w-3xl mx-auto">
        We mobilise quickly to any district. When you search “concrete road contractors near me” across Maharashtra — we’re just a call away.
      </p>
    </div>

    @php
      $cities = ['Mumbai','Pune','Nagpur','Nashik','Aurangabad','Solapur','Kolhapur','Sangli','Jalgaon','Ahmednagar','Satara','Latur','Amravati','Nanded','All Districts'];
    @endphp
    <div class="bg-blue-50 rounded-xl p-8 shadow">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        @foreach($cities as $c)
          <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition">
            <span class="font-medium text-yellow-800">{{ $c }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- ============ TECHNICAL SPECIFICATIONS ============ --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="section-title">Technical Specifications & Standards</h2>
      <div class="section-underline"></div>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
      <table class="min-w-full">
        <thead>
          <tr class="bg-yellow-600 text-white">
            <th class="py-3 px-4 text-left">Parameter</th>
            <th class="py-3 px-4 text-left">Specification</th>
          </tr>
        </thead>
        <tbody>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Design Code</td><td class="py-3 px-4">IRC:58, IRC:15, IRC:SP-62, MoRTH</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Compressive Strength</td><td class="py-3 px-4">30–40 MPa (IS 456:2000)</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Slab Thickness</td><td class="py-3 px-4">150–300 mm (traffic-class dependent)</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Concrete Mix</td><td class="py-3 px-4">M30–M40 (IS 10262, fly-ash optional)</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Reinforcement</td><td class="py-3 px-4">Fe500 / Fe550 mesh or rebars (as required)</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Surface Finish</td><td class="py-3 px-4">Broom / Trowel / Texture Roller</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Curing</td><td class="py-3 px-4">Membrane or Pond, 14–28 days</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Expansion Joints</td><td class="py-3 px-4">4.5–5 m spacing with pre-moulded filler boards</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Dowel Bars</td><td class="py-3 px-4">25–32 mm Ø @ 300 mm c/c (transverse joints)</td></tr>
          <tr class="spec-row"><td class="py-3 px-4 font-medium">Sub-base & Base</td><td class="py-3 px-4">GSB + DLC</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

{{-- ============ RECENT PROJECTS (compact cards like your upper page) ============ --}}
<section id="projects" class="py-12 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Recent Signature Projects</h2>
      <div class="w-16 h-1 bg-yellow-800 mx-auto mt-3 mb-4"></div>
      <p class="text-gray-600 max-w-2xl mx-auto text-sm">
        These case studies often show up for “concrete road contractors near me” thanks to strong local SEO.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
        $cards = [
          ['title'=>'Industrial CC Road – Nashik MIDC','badge'=>'Completed','desc'=>'Heavy-duty RCC road construction for industrial traffic.'],
          ['title'=>'Smart City Urban CC Road – Kolhapur','badge'=>'Completed','desc'=>'Urban CC road with integrated drainage systems.'],
          ['title'=>'Ahmednagar SH Widening to CC','badge'=>'Completed','desc'=>'State Highway conversion from asphalt to concrete.'],
          ['title'=>'PMGSY Rural Road – Latur District','badge'=>'Completed','desc'=>'Durable rural CC roads under PMGSY.'],
        ];
      @endphp

      @foreach($cards as $c)
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg transition-transform transform hover:-translate-y-1">
          <div class="h-40 bg-[#1c2c3e] flex items-center justify-center">
            <i class="fa-solid fa-road text-white opacity-30 text-4xl"></i>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-center mb-2">
              <h3 class="text-base font-semibold text-gray-800">{{ $c['title'] }}</h3>
              <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded">{{ $c['badge'] }}</span>
            </div>
            <p class="text-gray-600 text-sm mb-3">{{ $c['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ PLANT, MACHINERY & QA ============ --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="section-title">Plant, Machinery & QA Capabilities</h2>
      <div class="section-underline"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
        $cap = [
          ['Slip-Form & Fixed-Form Pavers','Advanced paving equipment for precise concrete roads.','fa-ruler-combined'],
          ['30–60 m³/hr Batching Plants','On-site production ensures consistent quality & supply.','fa-industry'],
          ['Transit Mixers & Boom Placers','6–8 m³ capacity mixers for efficient placement.','fa-truck'],
          ['Vibratory Rollers & Compactors','Proper sub-grade/base preparation for durability.','fa-compass-drafting'],
          ['VDF Machines & Joint Saws','Precision finishing and joint cutting.','fa-grip-lines'],
          ['ISO-certified QA/QC Labs','On-site cube testing & strict QA protocols.','fa-check-double'],
        ];
      @endphp

      @foreach($cap as $i)
        <div class="flex items-start p-5 bg-white rounded-lg shadow">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fa-solid {{ $i[2] }} text-yellow-800"></i>
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">{{ $i[0] }}</h3>
            <p class="text-gray-600">{{ $i[1] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
