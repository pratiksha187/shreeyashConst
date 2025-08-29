@extends('layouts.app')

@section('title', 'RCC & Precast Chamber Installation – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction specializes in RCC and precast chamber installation for drainage, water, and utility networks. Durable, tested, and standards-compliant construction.">
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

   
 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/RCC.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         RCC & Precast Chamber Installation
        </h1>
        
      </div>
    </div>
  </section>
    {{-- Content Section --}}
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
        <p class="text-xl text-gray-800 font-semibold mb-6">
            Expert Construction of Inspection, Valve, and Utility Chambers
        </p>

        <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
            <p class="mb-4">
            Shreeyash Construction delivers specialized services in <strong>RCC</strong> and
            <strong>precast chamber installation</strong> for a range of <strong>infrastructure and utility</strong>
            projects across Maharashtra. Applications include <strong>sewerage networks, water supply lines,
            electrical ducts, and telecom corridors</strong>.
            </p>
            <p class="mb-0">
            We handle the complete workflow—from <strong>site excavation and base preparation</strong> to
            <strong>placement, alignment, watertight sealing, finishing,</strong> and <strong>surface reinstatement</strong>.
            Our chambers are built for <strong>structural integrity, long-term durability,</strong> and
            <strong>safe maintenance access</strong>.
            </p>
        </div>
        </div>
    </div>
    </section>

    <!-- Types of Chambers -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Types of RCC & Precast Chambers We Install</h2>
                <div class="section-underline"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Sewer/Drainage Manhole Chambers</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>For underground sewer and stormwater lines</li>
                            <li>Sizes as per design discharge and maintenance needs</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Water Valve Chambers</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Housing for sluice valves, NRVs, and flow meters</li>
                            <li>Easy access for operation and repair</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Electrical & Telecom Duct Chambers</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Cable jointing pits, distribution boxes, and pull chambers</li>
                            <li>Installed with anti-corrosive protective linings if needed</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">House Inspection Chambers</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Connection interface for individual buildings</li>
                            <li>Supports easy drain inspection and cleaning</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Custom Precast Box Chambers</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Ready-to-install for high-traffic zones or fast-track projects</li>
                            <li>Available in M25, M30, and above grades</li>
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
                <h2 class="section-title">Technical Specifications – RCC & Precast Chambers</h2>
                <div class="section-underline"></div>
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
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Chamber Type</td>
                            <td class="py-3 px-4">Cast-in-situ RCC / Factory-made Precast</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Grade of Concrete</td>
                            <td class="py-3 px-4">M20 to M30 (based on structural requirement)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Internal Size</td>
                            <td class="py-3 px-4">450×450 mm to 1500×1500 mm or as per design</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Cover Type</td>
                            <td class="py-3 px-4">RCC, CI, or SFRC – Light/Medium/Heavy Duty</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Load Bearing Capacity</td>
                            <td class="py-3 px-4">UDL from 2.5T to 40T (as per location)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Steps</td>
                            <td class="py-3 px-4">Galvanized CI or MS Step Iron (at 300 mm intervals)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Jointing Method</td>
                            <td class="py-3 px-4">Cement Mortar / Rubber Gasket (for precast)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Waterproofing</td>
                            <td class="py-3 px-4">Integral additives or external coating (if required)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Installation Process -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Installation Process</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Site Marking & Excavation</li>
                <li>PCC Base & Foundation Preparation</li>
                <li>Chamber Placement or Casting (as per type)</li>
                <li>Pipe Connection and Sealing</li>
                <li>Step Iron Fixing (for deep chambers)</li>
                <li>Top Slab / Cover Fitting</li>
                <li>Backfilling and Surface Finishing</li>
            </ul>
        </div>
    </section>

    <!-- Applications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Applications</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Sewerage and Drainage Networks</li>
                <li>Industrial and Residential Water Supply Lines</li>
                <li>Electrical & Communication Networks</li>
                <li>MIDC, PMAY, Smart City, and EPC Projects</li>
                <li>Roadside Utility Corridors</li>
            </ul>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Why Shreeyash Construction?</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
                <li>In-house expertise in both cast-in-situ and precast chamber works</li>
                <li>Accurate execution as per IS standards and project drawings</li>
                <li>Use of high-quality concrete, steel, and protective treatments</li>
                <li>Compliance with municipal and industrial specifications</li>
                <li>Fast, efficient installation with safety protocols in place</li>
            </ul>
        </div>
    </section>
@endsection
