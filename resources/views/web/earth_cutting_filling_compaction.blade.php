@extends('layouts.app')

@section('title', 'Earth Cutting, Soil Filling & Compaction Services – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction provides expert earth cutting, soil filling, and compaction services with modern machinery and quality control across Maharashtra.">
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
    </style>

 {{-- Page Header Section --}}
<section class="hero-pattern text-white py-16 shadow-lg">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto text-center">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
        Earth Cutting, Filling & Compaction
      </h1>
    </div>
  </div>
</section>

{{-- Content Section --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-xl text-gray-800 font-semibold mb-6">
        Reliable Earthwork & Soil Compaction Contractors in Maharashtra
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
        <p class="mb-4">
          Shreeyash Construction specializes in <strong>earth cutting</strong>, <strong>filling</strong>, and
          <strong>soil compaction</strong> for infrastructure, industrial, and real-estate projects across Maharashtra.
          With 20+ years of experience, modern equipment, and skilled teams, we deliver precise earthwork that meets
          structural and geotechnical requirements.
        </p>
        <p>
          Whether it’s <strong>land development</strong>, <strong>roadbed preparation</strong>, or
          <strong>site leveling</strong>, our earthwork services ensure a strong, stable formation ready for
          safe and durable construction.
        </p>
      </div>
    </div>
  </div>
</section>


    <!-- Core Earthwork Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Our Core Earthwork Services</h2>
                <div class="section-underline"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Earth Cutting -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Earth Cutting</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Excavation of high land or hard strata using hydraulic excavators</li>
                            <li>Rock cutting with controlled blasting or rock breakers (as required)</li>
                            <li>Accurate cutting as per design levels and slope</li>
                        </ul>
                    </div>
                </div>

                <!-- Filling Soil / Embankment -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Filling Soil / Earth Embankment</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Transport & placement of approved fill (earth/murrum)</li>
                            <li>Layer-wise filling for uniform distribution</li>
                            <li>Soil sourced from approved borrow areas or site excavation</li>
                        </ul>
                    </div>
                </div>

                <!-- Compaction -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Compaction</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Required density using vibratory rollers & compactors</li>
                            <li>Moisture adjustment to reach Optimum Moisture Content (OMC)</li>
                            <li>Surface dressing for next activity or roadwork</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Technical Specifications</h2>
                <div class="section-underline"></div>
            </div>

            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-yellow-600 text-white">
                            <th class="py-3 px-4 text-left">Activity</th>
                            <th class="py-3 px-4 text-left">Specification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Cutting Tolerance</td><td class="py-3 px-4">±50 mm (as per final level design)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Fill Layer Thickness</td><td class="py-3 px-4">200 mm to 300 mm (loose)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Density</td><td class="py-3 px-4">≥ 95% of Modified Proctor Density (MDD)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Equipment</td><td class="py-3 px-4">Vibratory Rollers (8–10 Ton), Plate Compactors</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Soil Moisture</td><td class="py-3 px-4">Maintained near OMC for effective compaction</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Soil Type Used</td><td class="py-3 px-4">Murrum / Red Soil / Sandy Clay (as per design)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Testing Methods</td><td class="py-3 px-4">Field Density Test, Moisture Content Test, Plate Load Test (if required)</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Applications of Our Earthwork Services</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Industrial plot development</li>
                <li>Road subgrade preparation</li>
                <li>Residential township sites</li>
                <li>Warehouse platforms and internal roads</li>
                <li>Canal and drainage embankments</li>
                <li>Airport and railway infrastructure</li>
            </ul>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Why Choose Shreeyash Construction?</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
                <li>In-house excavators, dumpers, compactors, and survey teams</li>
                <li>End-to-end service from cutting to final ground compaction</li>
                <li>Strict quality control with field and lab testing</li>
                <li>Fast-track execution without compromising on specifications</li>
                <li>Experience with MoRTH, NHAI, PMGSY, and MIDC project norms</li>
            </ul>
        </div>
    </section>
@endsection
