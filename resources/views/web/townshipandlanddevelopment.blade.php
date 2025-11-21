@extends('layouts.app')

@section('title', 'Township & Land Development | Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction delivers end-to-end township and land development services across Maharashtra with planning, infrastructure, and quality execution.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }
        .hero-pattern {
            background-color:#1f2937;
            background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .section-title { @apply text-3xl font-bold text-gray-800; }
        .section-underline { @apply w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6; }
        .card { @apply bg-white rounded-lg overflow-hidden shadow-md transition duration-300; }
        .card:hover { transform: translateY(-5px); box-shadow:0 10px 20px rgba(0,0,0,0.1); }
        .spec-row:nth-child(odd){ background:rgba(15,76,129,0.05); }

        
.top-bar {
    display: flex;
    gap: 10px;
    align-items: center;
    align-content: flex-start;
    justify-content: center;
}
.btn {
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
}

.btn.primary {
  background-color: #d3ab35;
  color: white;
}


  .tag-container {
    margin-top: 15px;
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    align-content: stretch;
    justify-content: center;
}
    </style>


{{-- =============== NEW HEADER SECTION =============== --}}

<header class="relative text-white py-24 bg-center bg-cover"
  style="background-image: url('{{ asset('storage/township.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4"> Township &amp; Land Development</h1>
   
    <div class="top-bar">
      <!-- <a href="#contact" class="btn primary">Get a Fast Quote</a> -->

      <a href="tel:+919326216153" class="btn outline">Call +91 93262 16153</a>
      <!-- <button class="btn secondary">WhatsApp</button> -->
    </div>
    
  
  </div>
</header>
{{-- =============== INTRO CONTENT SECTION =============== --}}
<section class="py-16 bg-gray-50">

  <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed grid md:grid-cols-2 gap-8 items-center">
  
  <!-- IMAGE -->
  <div>
      <img src="{{ asset('storage/township.jpg') }}" 
           alt="Township Infrastructure"
           class="rounded-lg shadow-md w-full">
  </div>

  <!-- TEXT -->
  <div>
      <p class="mb-4">
        Shreeyash Construction is a trusted name in <strong>township development</strong> and 
        <strong>large-scale land development</strong> projects across Maharashtra.
      </p>

      <p class="mb-4">
        With years of expertise in <strong>civil construction</strong>, infrastructure planning, 
        and site execution, we specialize in transforming raw land parcels into 
        <strong>well-planned, fully developed, and infrastructure-ready townships</strong>.
      </p>

      <p>
        Our work is backed by professional engineering standards, systematic project
        execution, and a deep understanding of local regulations, community requirements,
        and environmental considerations.
      </p>
  </div>

</div>

</section>
<section class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-10">

    <!-- MAIN HEADING -->
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
      Township & Land Development – What We Deliver & Key Components
    </h2>
    <div class="w-20 h-1 bg-yellow-600 mx-auto mb-12"></div>

    <!-- GRID WRAPPER -->
    <div class="grid md:grid-cols-2 gap-12">

      <!-- LEFT SIDE – WHAT WE DELIVER -->
      <div>
        <h3 class="text-2xl font-bold text-gray-800 mb-6">What We Deliver</h3>

        <div class="space-y-6">

          <div class="card p-6 border border-gray-200 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Land Planning & Layout Design</h4>
            <p class="text-gray-600">
              Master planning, zoning, road network design, utility integration, and compliance with development regulations.
            </p>
          </div>

          <div class="card p-6 border border-gray-200 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Infrastructure Development</h4>
            <p class="text-gray-600">
              Roads, drainage, water supply, sewer lines, street lighting, and essential civic amenities.
            </p>
          </div>

          <div class="card p-6 border border-gray-200 rounded-lg shadow-sm">
            <h4 class="text-xl font-semibold mb-2">Site Execution & Construction</h4>
            <p class="text-gray-600">
              Earthwork, levelling, retaining walls, compound walls, residential & commercial building works.
            </p>
          </div>

        </div>
      </div>

      <!-- RIGHT SIDE – KEY COMPONENTS -->
      <div>
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Key Components</h3>

        <div class="grid grid-cols-1 gap-6">

          <ul class="space-y-3 text-gray-700 text-lg">
            <li>✔ Land clearing, grading & earthwork</li>
            <li>✔ Internal & external road development</li>
            <li>✔ Drainage & stormwater management</li>
            <li>✔ Sewerage system & STP planning</li>
            <li>✔ Water supply distribution lines</li>
          </ul>

          <ul class="space-y-3 text-gray-700 text-lg">
            <li>✔ Electrical and street lighting network</li>
            <li>✔ Plot demarcation & boundary survey</li>
            <li>✔ Open spaces, green zones & amenities</li>
            <li>✔ Security, gates & compound wall</li>
            <li>✔ Documentation, approvals & NA assistance</li>
          </ul>

        </div>
      </div>

    </div>

  </div>
</section>


<section class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-10">

    <!-- MAIN HEADING -->
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-6">
      Township & Land Development – Why Choose Us, Process & Project Types
    </h2>
    <div class="w-24 h-1 bg-yellow-600 mx-auto mb-12"></div>

    <!-- ================= WHY CHOOSE US ================= -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Why Choose Shreeyash Construction?
      </h3>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="text-xl font-semibold mb-2">End-to-End Service</h4>
          <p class="text-gray-600">
            From land planning to infrastructure execution, we manage everything under one roof.
          </p>
        </div>

        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="text-xl font-semibold mb-2">Experienced Engineering Team</h4>
          <p class="text-gray-600">
            Civil engineers, project managers, and site experts ensure quality-driven work.
          </p>
        </div>

        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="text-xl font-semibold mb-2">On-Time & Accurate Execution</h4>
          <p class="text-gray-600">
            Systematic planning ensures fast approvals and timely work completion.
          </p>
        </div>
      </div>
    </div>

    <!-- ================= DEVELOPMENT PROCESS ================= -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Our Township Development Process
      </h3>

      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="font-bold text-lg mb-2">1. Land Survey & Planning</h4>
          <p class="text-gray-600">Detailed land study, contouring, and initial project layout.</p>
        </div>

        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="font-bold text-lg mb-2">2. Approvals & Compliance</h4>
          <p class="text-gray-600">NA documents, government permissions, and legal support.</p>
        </div>

        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="font-bold text-lg mb-2">3. Infrastructure Development</h4>
          <p class="text-gray-600">Roads, drainage, water, electrical & amenities execution.</p>
        </div>

        <div class="card p-6 shadow-sm border border-gray-200">
          <h4 class="font-bold text-lg mb-2">4. Handover & Final Completion</h4>
          <p class="text-gray-600">Plot marking, as-built drawings, and township readiness.</p>
        </div>
      </div>
    </div>

    <!-- ================= TYPES OF PROJECTS ================= -->
    <div>
      <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Types of Township & Land Development Projects We Undertake
      </h3>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Residential Townships</h4>
        </div>
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Industrial Layouts & MIDC Plots</h4>
        </div>
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Farmhouse & Agro-Tourism Layouts</h4>
        </div>
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Mixed-Use Urban Development</h4>
        </div>
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Resort & Villa Layouts</h4>
        </div>
        <div class="card p-6 shadow-sm border border-gray-200 text-center">
          <h4 class="font-semibold text-lg">Affordable Housing Layouts</h4>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="bg-yellow-600 py-10">
  <div class="container mx-auto text-center text-white">
    <h2 class="text-3xl font-bold mb-3">Planning a Township or Land Development Project?</h2>
    <p class="mb-4 text-lg">Get expert engineering, fast execution, and complete infrastructure development under one roof.</p>
    <a href="{{route('contact_us')}}"
       class="bg-white text-yellow-700 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">
       Contact Shreeyash Construction Today
    </a>
  </div>
</section>


@endsection
