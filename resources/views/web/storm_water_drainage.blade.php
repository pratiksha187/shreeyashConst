@extends('layouts.app')

@section('title', 'Storm Water Drainage Construction – Shreeyash Construction')

@push('head')
  <meta charset="UTF-8">
  <meta name="description" content="Shreeyash Construction designs and constructs efficient storm water drainage systems for roads, townships, and industrial layouts with complete hydrological planning.">
  {{-- Tailwind CDN if not already included --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background: #f8f9fa; }
  </style>
@endpush

@section('content')

{{-- HERO --}}
<!-- <section class="relative h-[430px] overflow-hidden">
  <img src="/storage/logo/header/Storm.png"
       alt="Storm Water Drainage"
       class="absolute inset-0 w-full h-full object-cover object-center"> -->
       <section class="relative h-[250px] md:h-[400px] lg:h-[500px] overflow-hidden">
  <img src="/storage/logo/header/Storm.png"
       alt="Storm Water Drainage"
       class="absolute inset-0 w-full h-full object-cover object-center">
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="max-w-5xl text-center bg-black/50 p-6 rounded-lg">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
        Storm Water Drainage Solutions
      </h1>
    </div>
  </div>
</section>

{{-- INTRO --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-xl text-gray-800 font-semibold mb-6">
        Efficient and Sustainable Drainage Systems for Urban and Industrial Projects
      </p>
      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left">
        <p class="mb-4">
          Shreeyash Construction is a leading <strong>civil engineering company</strong> in Maharashtra,
          specializing in the <strong>design and construction of storm water drainage systems</strong>.
          We deliver reliable infrastructure solutions for <strong>roads, industrial parks, residential layouts, and commercial campuses</strong>,
          ensuring proper rainwater management, reduced waterlogging, and enhanced structural safety of the surrounding developments.
        </p>
        <p>
          Our drainage systems are meticulously designed in compliance with
          <strong>MoRTH</strong>, <strong>IRC</strong>, and <strong>local municipal regulations</strong>,
          with a strong emphasis on sustainability, hydraulic efficiency, and long-term durability for modern urban and industrial needs.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- SERVICES --}}
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-800">Our Storm Water Drainage Services Include</h2>
      <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-lg transition">
        <div class="h-1.5 bg-yellow-500"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold mb-3">Hydrological Survey & Drainage Design</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Runoff calculation based on rainfall intensity and catchment area</li>
            <li>Designing cross-sections and slope gradients</li>
            <li>Preparing flow diagrams and layout plans</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-lg transition">
        <div class="h-1.5 bg-yellow-500"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold mb-3">Construction of Drainage Structures</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Open drains (rectangular/trapezoidal)</li>
            <li>Covered RCC drains with cast-in-situ or precast slabs</li>
            <li>RCC Box Drains, U-drains, and Pipe Culverts</li>
            <li>Gully pits and catch basins for road shoulders</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-lg transition">
        <div class="h-1.5 bg-yellow-500"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold mb-3">Inlet & Outlet Management</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Discharge into water bodies or municipal lines</li>
            <li>Integration with rainwater harvesting or retention ponds</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-lg transition">
        <div class="h-1.5 bg-yellow-500"></div>
        <div class="p-6">
          <h3 class="text-lg font-semibold mb-3">Drain Covering & Finishing</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>Slotted covers for pedestrian or vehicular areas</li>
            <li>Maintenance-friendly access points and chambers</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- TECHNICAL SPECS --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-800">Technical Specifications of Storm Water Drainage Systems</h2>
      <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
      <table class="min-w-full">
        <thead>
          <tr class="bg-yellow-600 text-white">
            <th class="py-3 px-4 text-left">Component</th>
            <th class="py-3 px-4 text-left">Specification</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Drain Type</td>
            <td class="py-3 px-4">Open / Covered / RCC Box / HDPE Pipe</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Standard Slope</td>
            <td class="py-3 px-4">1:100 to 1:200 (depends on site conditions)</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Depth & Width</td>
            <td class="py-3 px-4">Typically 300mm to 1200mm depth (as per hydraulic design)</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Materials</td>
            <td class="py-3 px-4">RCC M20/M25, Brick Masonry, Precast Slabs, CI Covers</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Manhole Spacing</td>
            <td class="py-3 px-4">Every 30–50 meters or at junctions</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Load Bearing Covers</td>
            <td class="py-3 px-4">Light, medium, or heavy load covers</td>
          </tr>
          <tr class="odd:bg-slate-50">
            <td class="py-3 px-4 font-medium">Testing</td>
            <td class="py-3 px-4">Flow testing, structural integrity checks, gradient verification</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

{{-- APPLICATIONS --}}
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-800">Applications</h2>
      <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
    </div>
    <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
      <li>City and Municipal Roads</li>
      <li>Industrial Zones and MIDC Layouts</li>
      <li>Township Roads and Commercial Complexes</li>
      <li>Highways and Rural Connectivity Projects</li>
      <li>Parking Lots, Warehouses, and SEZs</li>
    </ul>
  </div>
</section>

{{-- WHY CHOOSE --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-800">Why Choose Shreeyash Construction?</h2>
      <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
    </div>
    <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
      <li>Experienced in drainage projects for NHAI, PMGSY, MIDC & Municipal bodies</li>
      <li>In-house engineers, equipment, and quality control team</li>
      <li>Customized solutions based on terrain and hydrology</li>
      <li>Integration with roadworks, plot development, and site leveling</li>
      <li>Timely execution with focus on safety, slope control, and zero waterlogging</li>
    </ul>
  </div>
</section>

@endsection
