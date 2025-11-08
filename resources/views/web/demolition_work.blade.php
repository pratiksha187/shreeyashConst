@extends('layouts.app')

@section('title', 'Demolition Work & Building Demolition Services')

@push('meta')
<meta name="description" content="Expert demolition work for buildings, interiors, and excavation. Safe, precise, efficient services for residential, commercial, and industrial projects.">
<link rel="canonical" href="{{ url('/demolition_work') }}">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Demolition Work",
  "provider": { "@type": "Organization", "name": "Shreeyash Construction" },
  "areaServed": "Maharashtra, India",
  "serviceType": "Building demolition, interior demolition, concrete cutting, demolition & excavation",
  "url": "{{ url('/demolition_work') }}",
  "description": "Safe, precise, and efficient demolition services for residential, commercial, and industrial projects."
}
</script>
@endpush

@section('content')
@once
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
  body { font-family:'Poppins',sans-serif; background:#f8f9fa; }
  :root{ --brand:#1c2c3e; --accent:#f25c05; }
  .card { transition:.3s; }
  .card:hover { transform:translateY(-6px); box-shadow:0 18px 30px -10px rgba(0,0,0,.15); }
  .chip { padding:.5rem .9rem; border-radius:1rem; background:#f3f4f6; display:block; text-align:center; }
</style>
@endonce


<!-- ✅ HERO -->
<section class="relative bg-cover bg-center bg-no-repeat"
         style="background-image:url('{{ asset('storage/logo/header/Demolition.png') }}');">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 min-h-[320px] md:min-h-[520px] flex items-center justify-center relative">
    <h1 class="text-white text-4xl md:text-5xl font-bold drop-shadow-lg text-center">Demolition Work</h1>
  </div>
</section>


<!-- ✅ INTRO -->
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-xl md:text-2xl text-gray-800 font-semibold mb-6">
      Safe, efficient, and professionally managed demolition services across Maharashtra
    </h2>

    <div class="bg-white shadow-lg rounded-lg p-8 text-gray-700 leading-relaxed text-left">
      <p class="mb-4">
        Shreeyash Construction provides <strong>building demolition</strong>, <strong>interior strip-outs</strong>, and <strong>demolition with excavation</strong>
        for residential, commercial, and industrial projects. Our team ensures controlled execution with safety, precision, and minimal disturbance.
      </p>

      <div class="mt-6 p-5 rounded-lg bg-gray-50 border border-gray-200">
        <p class="font-medium text-gray-900">
          Looking for “demolition work near me” or a reliable contractor?
        </p>
        <p class="mt-2">We tailor methodology and safety controls based on your structure, location, timeline, and requirements.</p>
      </div>
    </div>
  </div>
</section>


<!-- ✅ EXPERTISE -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Expertise in Demolition Work</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-50 p-6 rounded-lg shadow card text-center">
        <h3 class="text-lg font-semibold mb-2">Methodical Planning</h3>
        <p class="text-gray-600 text-sm">Risk assessments, sequencing, and safety protocols.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow card text-center">
        <h3 class="text-lg font-semibold mb-2">Qualified Crews</h3>
        <p class="text-gray-600 text-sm">Certified operators & controlled dismantling teams.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow card text-center">
        <h3 class="text-lg font-semibold mb-2">Environmental Controls</h3>
        <p class="text-gray-600 text-sm">Dust suppression, noise control & debris recycling.</p>
      </div>
    </div>
  </div>
</section>


<!-- ✅ TYPES OF DEMOLITION -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Types of Demolition Work We Offer</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
      $types = [
        ['Building Demolition', [
          'Complete dismantling of residential, commercial, and industrial buildings.',
          'High-rise & small structure removal.'
        ]],
        ['Interior Demolition', [
          'Safe removal of partitions, ceilings, flooring.',
          'Office remodeling and strip-out specialists.'
        ]],
        ['Wall Demolition', [
          'Concrete & brick wall demolition.',
          'Cost-efficient, dust-controlled methods.'
        ]],
        ['Structural & Specialized', [
          'Bridge / heavy infrastructure removal.',
          'Precision cutting and selective dismantling.'
        ]],
        ['Demolition & Excavation', [
          'Post-demolition site clearance & grading.',
          'Trusted for industrial clearing operations.'
        ]]
      ];
      @endphp

      @foreach($types as [$title, $items])
      <div class="bg-white p-6 rounded-lg shadow card">
        <h3 class="text-lg font-semibold mb-3">{{ $title }}</h3>
        <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
          @foreach($items as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ✅ TECHNICAL DATA -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Technical Data for Demolition Projects</h2>

    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
      <table class="min-w-full text-left">
        <thead>
          <tr class="bg-[color:var(--brand)] text-white">
            <th class="py-3 px-4">Parameter</th>
            <th class="py-3 px-4">Specification</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm">
          <tr><td class="py-3 px-4 font-medium">Methods</td><td class="py-3 px-4">Manual / Mechanical / Controlled</td></tr>
          <tr><td class="py-3 px-4 font-medium">Equipment</td><td class="py-3 px-4">Excavators, cranes, breakers, saws</td></tr>
          <tr><td class="py-3 px-4 font-medium">Safety</td><td class="py-3 px-4">PPE, scaffolding, barricades</td></tr>
          <tr><td class="py-3 px-4 font-medium">Waste</td><td class="py-3 px-4">Sorting, recycling, authorized disposal</td></tr>
          <tr><td class="py-3 px-4 font-medium">Noise & Dust</td><td class="py-3 px-4">Dust suppression, monitoring controls</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ✅ PROCESS -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Process for Demolition Work</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      @foreach([
        'Site Survey & Planning',
        'Approval & Contracting',
        'Execution',
        'Post-Demolition'
      ] as $step)
      <div class="bg-white p-6 rounded-lg shadow card text-center">
        <h3 class="font-semibold mb-2">{{ $loop->iteration }}) {{ $step }}</h3>
        <p class="text-gray-600 text-sm">Professional workflow for predictable, safe outcomes.</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ✅ INDUSTRIES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Industries & Clients We Serve</h2>

    <div class="bg-gray-50 rounded-xl p-8 shadow-md">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        @foreach(['Residential Owners','Commercial Developers','Government Bodies','Industrial Operators','Renovation Contractors'] as $i)
        <span class="chip text-[color:var(--brand)] font-medium">{{ $i }}</span>
        @endforeach
      </div>
    </div>
  </div>
</section>

@endsection
