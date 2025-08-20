@extends('layouts.app')

@section('title', 'Commercial Unit Civil Work – Shreeyash Construction')

@push('meta')
  <meta name="description" content="Expert commercial unit civil work for offices, retail, warehouses & more. Shreeyash Construction delivers quality, compliant, and timely projects.">
  <link rel="canonical" href="{{ url('/commercial_unit_civil_work') }}">

  <!-- JSON-LD: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Commercial Unit Civil Work",
    "provider": { "@type": "Organization", "name": "Shreeyash Construction" },
    "areaServed": "Maharashtra, India",
    "serviceType": "Commercial construction, interior fit-outs, structural renovation, specialized spaces, PEB units",
    "url": "{{ url('/commercial_unit_civil_work') }}",
    "description": "End-to-end commercial construction for offices, retail, warehouses & industrial units with quality, compliance and timely delivery."
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
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Commercial Unit Civil Work</h1>
        <p class="text-lg md:text-xl mb-8 opacity-90">
          Shreeyash Construction is a trusted leader in commercial unit civil work, delivering end-to-end services for offices, retail spaces, showrooms, warehouses, and industrial facilities—with quality, precision, and on-time delivery.
        </p>
        <div class="mt-12 bg-white bg-opacity-10 rounded-lg p-6 backdrop-filter backdrop-blur-sm">
          <p class="text-lg font-medium">One partner for build, retrofit, and fit-out.</p>
          <p class="mt-2">We ensure functional performance, safety compliance, and the right aesthetics for your brand.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Shreeyash Construction for Commercial Civil Work?</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Multi-Sector Experience</h3>
          <p class="text-gray-600 text-sm">Offices, malls, hotels, hospitals, schools & more.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Quality & Compliance</h3>
          <p class="text-gray-600 text-sm">IS Codes, NBC, and municipal regulations adhered to.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Turnkey Execution</h3>
          <p class="text-gray-600 text-sm">Excavation → structure → interiors, end-to-end.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Technical Expertise</h3>
          <p class="text-gray-600 text-sm">Engineers, architects & PMs overseeing each phase.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Timely Delivery</h3>
          <p class="text-gray-600 text-sm">Strict adherence to schedules and budgets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Work -->
  <section class="py-16 bg-gray-50" id="services">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Types of Commercial Unit Civil Work We Offer</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">A one-stop solution for developers, business owners, and corporates.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">New Commercial Building Construction</h3>
          <p class="text-gray-700 text-sm">RCC frameworks, steel & composite systems for large developments.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Interior Fit-Outs & Finishing</h3>
          <p class="text-gray-700 text-sm">Flooring, partitions, ceilings & wall finishes for commercial use.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Structural Renovation & Retrofitting</h3>
          <p class="text-gray-700 text-sm">Strengthening to meet new loads or functional changes.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Specialized Spaces</h3>
          <p class="text-gray-700 text-sm">Cold storage, labs, showrooms & other purpose-built areas.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="text-lg font-semibold mb-2">Pre-Engineered & Modular Units</h3>
          <p class="text-gray-700 text-sm">Quick-install structures for temporary or rapid deployment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Data -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Technical Data for Commercial Civil Work</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full">
          <thead>
            <tr class="bg-[color:var(--brand)] text-white">
              <th class="py-3 px-4 text-left">Parameter</th>
              <th class="py-3 px-4 text-left">Standard Specification</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation</td><td class="py-3 px-4">RCC (M25) or piles as per geotechnical report</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Structural Frame</td><td class="py-3 px-4">RCC columns & beams / structural steel</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Flooring</td><td class="py-3 px-4">Industrial vitrified, epoxy, or polished concrete</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Roofing</td><td class="py-3 px-4">RCC slab with insulation / PEB roofing</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Partitions</td><td class="py-3 px-4">Gypsum boards, glass, or brick masonry</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Doors & Windows</td><td class="py-3 px-4">Aluminium, uPVC, or tempered glass systems</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Electrical Systems</td><td class="py-3 px-4">ISI concealed wiring, efficient lighting</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">HVAC & Plumbing</td><td class="py-3 px-4">Ducted A/C, CPVC/UPVC pipelines</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Fire Safety</td><td class="py-3 px-4">Sprinklers, fire-rated doors, hydrants</td></tr>
            <tr class="spec-row"><td class="py-3 px-4 font-medium">Compliance</td><td class="py-3 px-4">NBC, IS Codes & local fire guidelines</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Construction Process for Commercial Units</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6">
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">1) Planning & Design</h3>
          <p class="text-gray-600 text-sm">Architectural layouts, MEP drawings, load calculations.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">2) Approvals & Clearances</h3>
          <p class="text-gray-600 text-sm">Municipal permits, environmental & utility connections.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">3) Foundation & Structure</h3>
          <p class="text-gray-600 text-sm">Excavation, formwork, steel, casting.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">4) Superstructure & Walls</h3>
          <p class="text-gray-600 text-sm">Columns, beams, slabs, masonry, cladding.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">5) Services & Utilities</h3>
          <p class="text-gray-600 text-sm">Electrical, plumbing, HVAC & fire systems.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow card">
          <h3 class="font-semibold mb-2">6) Finishing & Handover</h3>
          <p class="text-gray-600 text-sm">Painting, flooring, carpentry, final inspection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries Served -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Industries We Serve</h2>
        <div class="w-20 h-1 bg-[color:var(--accent)] mx-auto mt-4 mb-6"></div>
      </div>
      <div class="bg-gray-50 rounded-xl p-8 shadow-md">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
          <span class="chip text-[color:var(--brand)] font-medium text-center">Corporate Offices</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Retail Stores & Malls</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Hotels & Restaurants</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Warehouses & Industrial Units</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Hospitals & Healthcare</span>
          <span class="chip text-[color:var(--brand)] font-medium text-center">Educational Institutions</span>
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
