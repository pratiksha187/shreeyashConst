@extends('layouts.app')

@section('title', 'Structural Repair & House Foundation Repair')

@push('meta')
  <meta name="description" content="Expert structural repair, house foundation repair, and concrete wall repair. Trusted contractors for residential, commercial, and industrial projects.">
  <link rel="canonical" href="{{ url('/structural_repair') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Structural Repair",
    "provider": {
      "@type": "Organization",
      "name": "Shreeyash Construction"
    },
    "areaServed": "Maharashtra, India",
    "description": "Structural repair, house foundation repair, concrete wall repair for residential, commercial, and industrial projects.",
    "serviceType": "Structural repair, foundation repair, wall repair",
    "url": "{{ url('/structural_repair') }}"
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
      .service-card:hover{transform:translateY(-5px);box-shadow:0 10px 20px rgba(0,0,0,0.1)}
      .spec-row:nth-child(odd){background-color:rgba(28,44,62,0.04)}
      .chip{display:inline-block;padding:.5rem .75rem;border-radius:.75rem;background:#f3f4f6}
    </style>
  @endonce

{{-- Page Header Section --}}

<section class="hero-pattern text-white shadow-lg bg-center bg-no-repeat h-[430px]"
         style="background-image: url('/storage/logo/header/Retrofitting.png'); background-size: 100% auto;">
  <div class="container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
        Structural Repair
      </h1>
    </div>
  </div>
</section>
{{-- Content Section --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-8xl mx-auto text-center">
      <p class="text-xl text-yellow-500 font-semibold mb-6">
        Restoring safety, strength, and service life of your building
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left">
        <p class="mb-4">
          Shreeyash Construction is a trusted leader in <strong>structural repair</strong>, delivering
          expert solutions to restore the <strong>safety</strong>, <strong>strength</strong>, and
          <strong>longevity</strong> of residential, commercial, and industrial structures across Maharashtra.
          From <strong>house foundation repair</strong> to <strong>retaining wall repair</strong>, we provide
          diagnosis-driven, code-compliant restoration.
        </p>

        <div class="mt-6 p-5 rounded-lg bg-gray-50 border border-gray-200">
          <p class="text-base md:text-lg font-medium text-gray-900">
            Need “structural repair contractors near me” you can trust?
          </p>
          <p class="mt-2 text-gray-700">
            Our team conducts on-site inspections, prepares detailed repair plans, and executes with high-quality
            workmanship—covering crack injection, corrosion treatment, member jacketing/strengthening,
            waterproofing interfaces, and durable reinstatement.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- What is Structural Repair -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">What is Structural Repair?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">
          Structural Repair restores damaged or deteriorated components—<strong>foundations, walls, beams, columns</strong>—to original strength and stability. It’s essential for properties affected by:
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="font-semibold mb-1">Soil settlement or shifting</h3>
          <p class="text-gray-600 text-sm">Differential settlement causing cracks & tilting.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="font-semibold mb-1">Water damage & erosion</h3>
          <p class="text-gray-600 text-sm">Seepage, capillary rise, washouts around footings.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="font-semibold mb-1">Earthquake / vibration impact</h3>
          <p class="text-gray-600 text-sm">Lateral drift, shear cracks, loosened connections.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="font-semibold mb-1">Corrosion of reinforcement</h3>
          <p class="text-gray-600 text-sm">Spalling, reduced section, bond loss.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="font-semibold mb-1">Structural overloading</h3>
          <p class="text-gray-600 text-sm">Change of use, storage loads, equipment loads.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Shreeyash Construction for Structural Repairs?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Specialized Expertise</h3>
          <p class="text-gray-600 text-sm">Decades of experience in residential & concrete foundation repair and complex rehab.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Advanced Methods</h3>
          <p class="text-gray-600 text-sm">Epoxy injection, carbon fiber (FRP), underpinning, micro-piles & more.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Local Service</h3>
          <p class="text-gray-600 text-sm">Trusted for “home foundation repair near me” across Maharashtra.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Code Compliance</h3>
          <p class="text-gray-600 text-sm">All repairs follow IS codes, NBC, and municipal regulations.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Comprehensive Solutions</h3>
          <p class="text-gray-600 text-sm">We fix root causes, not just visible symptoms.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Structural Repairs -->
  <section class="py-16 bg-white" id="services">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Types of Structural Repairs We Offer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Foundation Repairs -->
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-3">1) Foundation Repairs</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li><strong>House Foundation Repair</strong> – Strengthening or replacing compromised footings/slabs.</li>
            <li><strong>Residential Foundation Repair</strong> – Uneven floors, cracks, sinking remediation.</li>
            <li><strong>Concrete Foundation Repair</strong> – Crack repair, restoring load capacity.</li>
            <li><strong>Pier & Beam Foundation Repair</strong> – Specialized beam-supported home fixes.</li>
          </ul>
        </div>

        <!-- Wall & Structural Repairs -->
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-3">2) Wall & Structural Repairs</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li><strong>Concrete Wall Repair</strong> – Cracks, spalling, seepage solutions.</li>
            <li><strong>Retaining Wall Repair</strong> – Stabilization/rebuild vs soil pressure & erosion.</li>
            <li><strong>Structural Foundation Repair</strong> – Base component restoration.</li>
          </ul>
        </div>

        <!-- Load-Bearing Member Repairs -->
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-3">3) Load-Bearing Member Repairs</h3>
          <ul class="text-gray-700 text-sm list-disc pl-5 space-y-2">
            <li>Column strengthening with jacketing or FRP wrapping.</li>
            <li>Beam repairs for increased load support.</li>
            <li>Slab restoration for distressed concrete decks.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Data -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Technical Data for Structural Repair Work</h2>
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
              <td class="py-3 px-4 font-medium">Inspection Methods</td>
              <td class="py-3 px-4">Visual survey, rebound hammer, ultrasonic pulse velocity (UPV), core cutting</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Repair Materials</td>
              <td class="py-3 px-4">M25–M40 concrete, epoxy resins, FRP sheets, corrosion inhibitors</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Foundation Methods</td>
              <td class="py-3 px-4">Underpinning, micro-piling, grouting</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Wall Repair Methods</td>
              <td class="py-3 px-4">Epoxy injection, shotcrete, sealing compounds</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Compliance</td>
              <td class="py-3 px-4">IS 456:2000, IS 3370 (water retaining), IS 13920 (ductile detailing)</td>
            </tr>
            <tr class="spec-row">
              <td class="py-3 px-4 font-medium">Project Duration</td>
              <td class="py-3 px-4">Varies with extent of damage & building occupancy</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Our Structural Repair Process</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <h3 class="font-semibold mb-2">1) Inspection & Assessment</h3>
          <p class="text-gray-600 text-sm">Structural audit & NDT to determine damage extent.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <h3 class="font-semibold mb-2">2) Designing the Repair Plan</h3>
          <p class="text-gray-600 text-sm">Tailored solutions for foundation, wall, or column issues.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <h3 class="font-semibold mb-2">3) Execution of Repairs</h3>
          <p class="text-gray-600 text-sm">Safe, precise work with minimal disruption to occupants.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <h3 class="font-semibold mb-2">4) Quality Checks & Certification</h3>
          <p class="text-gray-600 text-sm">Load testing, final inspection, and compliance documentation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Industries & Properties We Serve</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="bg-white rounded-xl p-8 shadow-md">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
          <span class="chip text-[color:var(--brand)] font-medium text-center">Residential buildings & apartments</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Commercial complexes & offices</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Industrial warehouses & factories</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Institutional campuses</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Hospitals & healthcare</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Heritage & government structures</span>
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
