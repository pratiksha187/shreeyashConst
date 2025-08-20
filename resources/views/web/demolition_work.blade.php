@extends('layouts.app')

@section('title', 'Demolition Work & Building Demolition Services')

@push('meta')
  {{-- ≤155 chars (this is 152) --}}
  <meta name="description" content="Expert demolition work for buildings, interiors, and excavation. Safe, precise, efficient services for residential, commercial, and industrial projects.">
  <link rel="canonical" href="{{ url('/demolition_work') }}">

  <!-- JSON-LD: Demolition Service -->
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

  <!-- Hero -->
  <section class="hero-pattern text-white py-20">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Demolition Work</h1>
        <p class="text-lg md:text-xl mb-8 opacity-90">
          Shreeyash Construction provides <strong>safe, efficient, professionally managed demolition services</strong> for residential, commercial, and industrial projects across Maharashtra—building demolition, interior demolition, and demolition with excavation.
        </p>
        <div class="mt-12 bg-white bg-opacity-10 rounded-lg p-6 backdrop-filter backdrop-blur-sm">
          <p class="text-lg font-medium">Looking for “demolition work near me” or a reliable general contractor?</p>
          <p class="mt-2">We tailor methods to your site and timeline with strict safety adherence and minimal disturbance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Expertise -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Our Expertise in Demolition Work</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">
          We execute the full spectrum—from small structures to large industrial facilities—using controlled methods for <strong>safety, efficiency, and environmental responsibility</strong>.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gray-50 rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-2">Methodical Planning</h3>
          <p class="text-gray-600 text-sm">Risk assessments, utility checks, and sequencing for safe, predictable results.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-2">Qualified Crews</h3>
          <p class="text-gray-600 text-sm">Certified operators for excavators, breakers, cranes, and cutting tools.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-2">Environmental Controls</h3>
          <p class="text-gray-600 text-sm">Dust suppression, noise control, vibration monitoring, debris recycling.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Demolition -->
  <section class="py-16 bg-gray-50" id="services">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Types of Demolition Work We Offer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Building Demolition -->
        <div class="bg-white rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-3">Building Demolition</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Complete dismantling of residential, commercial, and industrial buildings.</li>
            <li>Includes small building demolition and high-rise structure removal.</li>
          </ul>
        </div>
        <!-- Interior Demolition -->
        <div class="bg-white rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-3">Interior Demolition</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Safe removal of partitions, ceilings, flooring, and fixtures for remodeling.</li>
            <li>Specialized office & ceiling demolition services.</li>
          </ul>
        </div>
        <!-- Wall Demolition -->
        <div class="bg-white rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-3">Wall Demolition</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Concrete & brick wall demolition with cost-effective methods.</li>
            <li>Estimations for brick/concrete block wall demolition costs.</li>
          </ul>
        </div>
        <!-- Structural & Specialized -->
        <div class="bg-white rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-3">Structural & Specialized</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Bridge demolition for heavy infrastructure removal.</li>
            <li>Concrete cutting & precision dismantling; selective/partial demolition.</li>
          </ul>
        </div>
        <!-- Demolition & Excavation -->
        <div class="bg-white rounded-lg p-6 shadow card">
          <h3 class="text-lg font-semibold mb-3">Demolition & Excavation</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Site clearance, grading, and excavation post-demolition.</li>
            <li>Trusted option among demolition & excavation companies near you.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Data -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Technical Data for Demolition Projects</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full">
          <thead>
            <tr class="bg-[color:var(--brand)] text-white">
              <th class="py-3 px-4 text-left">Parameter</th>
              <th class="py-3 px-4 text-left">Specification</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Demolition Methods</td>
              <td class="py-3 px-4">Manual, mechanical, and controlled implosion (subject to permits & local laws)</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Equipment Used</td>
              <td class="py-3 px-4">Excavators, breakers, cranes, diamond saws</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Safety Compliance</td>
              <td class="py-3 px-4">PPE, scaffolding, dust suppression, barricades, hot-work & work-at-height permits</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Waste Management</td>
              <td class="py-3 px-4">Debris segregation, recycling, authorized disposal with manifests</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Environmental Measures</td>
              <td class="py-3 px-4">Noise control, dust minimization, vibration monitoring, water-runoff control</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Project Duration</td>
              <td class="py-3 px-4">Based on structure size, complexity, proximity to neighbors & utilities</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Our Process for Demolition Work</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">1) Site Survey & Planning</h3>
          <p class="text-gray-600 text-sm">Best-fit method selection, risk assessment, environmental impact analysis.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">2) Approval & Contracting</h3>
          <p class="text-gray-600 text-sm">Clear demolition contract (scope, safety, timeline, responsibilities).</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">3) Execution</h3>
          <p class="text-gray-600 text-sm">Deployed crews & machinery, controlled dismantling, debris removal.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">4) Post-Demolition</h3>
          <p class="text-gray-600 text-sm">Site clearance, earthmoving & grading—ready for next construction phase.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries & Clients -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Industries & Clients We Serve</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="bg-gray-50 rounded-xl p-8 shadow-md">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
          <span class="chip text-[color:var(--brand)] font-medium text-center">Residential property owners</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Commercial developers</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Government bodies</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Industrial facility operators</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Renovation contractors</span>
        </div>
      </div>
    </div>
  </section>



  <script>
    // Guard for layouts with mobile menu
    (function(){
      const t=document.getElementById('menu-toggle'), m=document.getElementById('mobile-menu');
      if(t && m){ t.addEventListener('click', ()=> m.classList.toggle('hidden')); }
    })();
  </script>
@endsection
