@extends('layouts.app')

@section('title', 'Structural Retrofitting – Expert Retrofitting Companies')

@push('meta')
  <meta name="description" content="Leading in structural retrofitting. Among top retrofitting companies for safety upgrades. Trusted choice for retrofit companies near me searches.">
  <link rel="canonical" href="{{ url('/structural_retrofitting') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Structural Retrofitting",
    "provider": {
      "@type": "Organization",
      "name": "Shreeyash Construction"
    },
    "areaServed": "Maharashtra, India",
    "description": "Expert structural retrofitting services including seismic retrofitting, FRP wrapping, jacketing, foundation strengthening, corrosion control and industrial structure upgrades.",
    "url": "{{ url('/structural_retrofitting') }}"
  }
  </script>
@endpush

@section('content')
  <!-- Tailwind (if your layout doesn't already include it) -->
  @once
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body{font-family:'Poppins',sans-serif;background-color:#f8f9fa}
      .hero-pattern{
        background-color:#1f2937;
        background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
      .service-card:hover{transform:translateY(-5px);box-shadow:0 10px 20px rgba(0,0,0,0.1)}
      .spec-row:nth-child(odd){background-color:rgba(28,44,62,0.04)}
      :root{ --brand:#1c2c3e; --accent:#f25c05; }

      @media (min-width: 768px) {
  section.hero-pattern {
    background-size: 60% auto;
  }
}
@media (min-width: 1024px) {
  section.hero-pattern {
    background-size: 40% auto;
  }
}
    </style>
    
  @endonce

<section class="hero-pattern text-white shadow-lg bg-center bg-no-repeat h-[430px]"
         style="background-image: url('/storage/logo/header/Structural.png'); background-size: 100% auto;">
  <div class="container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
        Structural Retrofitting
      </h1>
    </div>
  </div>
</section>

{{-- Content Section --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-8xl mx-auto text-center">
      <p class="text-xl text-yellow-500 font-semibold mb-6">
        Strengthening and upgrading existing buildings to modern safety and performance standards
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left">
        <p class="mb-4">
          At Shreeyash Construction, we specialize in <strong>structural retrofitting</strong>—enhancing the safety,
          durability, and functional performance of existing <strong>residential, commercial, and industrial</strong>
          structures across Maharashtra. Our solutions are engineered to be <strong>cost-effective</strong> and to
          minimize <strong>operational downtime</strong>, while addressing issues such as capacity upgrade, material
          deterioration, and seismic resilience.
        </p>

        <div class="mt-6 p-5 rounded-lg bg-gray-50 border border-gray-200">
          <p class="text-base md:text-lg font-medium text-gray-900">
            Looking for a trusted retrofit partner?
          </p>
          <p class="mt-2 text-gray-700">
            We execute works in line with relevant <strong>IS codes</strong>, the <strong>National Building Code (NBC)</strong>,
            and applicable <strong>seismic design guidelines</strong>, working closely with structural consultants and
            following certified QA/QC processes.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- What is Structural Retrofitting -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">What is Structural Retrofitting?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">
          Retrofitting modifies existing structures to better resist <strong>seismic activity, higher loads, corrosion,</strong> and environmental impacts—extending service life, ensuring compliance with updated codes, and preventing costly failures.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gray-50 rounded-lg p-6 shadow">
          <h3 class="font-semibold mb-1">Strengthening old structures</h3>
          <p class="text-gray-600 text-sm">Improve capacity and performance of aging buildings.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow">
          <h3 class="font-semibold mb-1">Compliance with revised codes</h3>
          <p class="text-gray-600 text-sm">Meet IS/NBC and local authority requirements.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow">
          <h3 class="font-semibold mb-1">Repair after damage</h3>
          <p class="text-gray-600 text-sm">Earthquake, corrosion, settlement, and distress repairs.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow">
          <h3 class="font-semibold mb-1">Increased load capacity</h3>
          <p class="text-gray-600 text-sm">Adapt for change of use, mezzanines, equipment, archives, etc.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Shreeyash -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Shreeyash Construction?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Experienced Team</h3>
          <p class="text-gray-600 text-sm">Civil engineers & structural consultants with decades of expertise.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Advanced Methods</h3>
          <p class="text-gray-600 text-sm">FRP wrapping, steel/RCC jacketing, micro-concreting, post-tensioning.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Safety First</h3>
          <p class="text-gray-600 text-sm">Compliance with IS codes, NBC, and seismic guidelines.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">End-to-End</h3>
          <p class="text-gray-600 text-sm">Inspection & audit → design → execution → testing & certification.</p>
        </div>
        <div class="bg-white rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Local Expertise</h3>
          <p class="text-gray-600 text-sm">A go-to choice for “retrofit companies near me” searches in Maharashtra.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Retrofitting -->
  <section class="py-16 bg-white" id="services">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Types of Structural Retrofitting We Offer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Seismic Retrofitting</h3>
          <p class="text-gray-600 text-sm">Upgrades for earthquakes & lateral forces: bracing, shear walls, dampers.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Foundation Strengthening</h3>
          <p class="text-gray-600 text-sm">Underpinning, micro-piles, grouting, raft/strip enhancements.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Column & Beam Jacketing</h3>
          <p class="text-gray-600 text-sm">RCC/steel jacketing & section enlargement to increase capacities.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">FRP Wrapping</h3>
          <p class="text-gray-600 text-sm">Lightweight, high-strength CFRP/GFRP systems for members & slabs.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Corrosion Control & Repair</h3>
          <p class="text-gray-600 text-sm">Rebar treatment, crack injection, patch repair, waterproofing, CP.</p>
        </div>
        <div class="bg-gray-50 rounded-lg p-6 shadow service-card">
          <h3 class="text-lg font-semibold mb-2">Industrial Upgrades</h3>
          <p class="text-gray-600 text-sm">Upgrades for heavy equipment loads, vibrations, mezzanines & utilities.</p>
        </div>
      </div>
    </div>
  </section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- MAIN TITLE -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Structural Retrofitting – Technical Specs & Process</h2>
            <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        </div>

        <!-- LEFT - RIGHT GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT COLUMN – TECHNICAL SPECIFICATIONS -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Technical Data – Retrofitting Specifications</h3>

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
                                <td class="py-3 px-4 font-medium">Structural Audit</td>
                                <td class="py-3 px-4">NDT (rebound hammer, UPV), cover meter, core tests</td>
                            </tr>
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Materials Used</td>
                                <td class="py-3 px-4">M25–M40 concrete, micro-concrete, epoxy, FRP sheets, steel</td>
                            </tr>
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Seismic Design</td>
                                <td class="py-3 px-4">IS 1893:2016, IS 13920:2016 compliant</td>
                            </tr>
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Corrosion Protection</td>
                                <td class="py-3 px-4">Anti-corrosive coating, cathodic protection</td>
                            </tr>
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Execution Methods</td>
                                <td class="py-3 px-4">Jacketing, section enlargement, bracing, FRP wrapping</td>
                            </tr>
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Project Duration</td>
                                <td class="py-3 px-4">Based on structure size & complexity</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT COLUMN – PROCESS -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Our Retrofitting Process</h3>

                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h3 class="font-semibold mb-2">1) Inspection & Structural Audit</h3>
                        <p class="text-gray-600 text-sm">
                            Visual checks, NDT testing, strength evaluation & defect mapping.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h3 class="font-semibold mb-2">2) Design & Planning</h3>
                        <p class="text-gray-600 text-sm">
                            Engineering-based design as per IS standards & structural performance.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h3 class="font-semibold mb-2">3) Material & Method Selection</h3>
                        <p class="text-gray-600 text-sm">
                            FRP, jacketing, micro-concrete, steel bracing, epoxy injections.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h3 class="font-semibold mb-2">4) Execution</h3>
                        <p class="text-gray-600 text-sm">
                            Controlled strengthening with minimal disruption to operations.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h3 class="font-semibold mb-2">5) Testing & Certification</h3>
                        <p class="text-gray-600 text-sm">
                            QA/QC, load testing, compliance documentation & stabilization reports.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

  <!-- Industries Served -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Industries & Structures We Serve</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="bg-white rounded-xl p-8 shadow-md">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Residential Apartments</span>
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Commercial Towers & Malls</span>
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Educational Institutions</span>
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Hospitals & Healthcare</span>
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Industrial Plants & Warehouses</span>
          <span class="px-3 py-2 bg-gray-50 rounded text-center text-[color:var(--brand)] font-medium">Government & Heritage Buildings</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->


  <script>
    // Safe guard mobile menu toggles if present in layout
    (function(){
      const t=document.getElementById('menu-toggle'), m=document.getElementById('mobile-menu');
      if(t && m){ t.addEventListener('click', ()=> m.classList.toggle('hidden')); }
    })();
  </script>
@endsection
