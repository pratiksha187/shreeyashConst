@extends('layouts.app')

@section('title', 'Industrial Shed Work – Steel Shed Contractors in Maharashtra | Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Shreeyash Construction offers expert industrial shed work including PEB & workshop sheds. Trusted industrial shed contractors with custom design & specifications.">
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
    <img src="/storage/logo/header/Industrial.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
          Industrial Shed Work
        </h1>
        
      </div>
    </div>
  </section>
{{-- Content Section --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-8xl mx-auto text-center">
            <p class="text-xl text-gray-800 font-semibold mb-6">
                Trusted Industrial Shed Contractors in Maharashtra
            </p>
            
            <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
                <p class="mb-4">
                    Shreeyash Construction is a leading name in <strong>industrial shed construction</strong> across
                    Maharashtra, delivering reliable, durable, and custom-built steel structures for
                    <strong>manufacturing units, warehouses, workshops, and commercial facilities</strong>.
                </p>
                <p>
                    As experienced industrial shed contractors, we provide <strong>end-to-end services</strong>—from design and fabrication
                    to erection and finishing. Whether you’re planning an <strong>industrial workshop shed</strong>, a
                    <strong>commercial unit</strong>, or exploring innovative <strong>working shed designs</strong>,
                    we deliver versatile, cost-effective, and long-lasting solutions tailored to your industry needs.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ================== TYPES OF SHEDS + WORKING IDEAS (LEFT–RIGHT ONE SECTION) ================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- ============= LEFT — TYPES OF INDUSTRIAL SHEDS ============= -->
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Types of Industrial Sheds We Construct</h2>
            <div class="w-20 h-1 bg-yellow-600 mb-8 rounded"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">PEB Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Fast installation</li>
                        <li>Custom design</li>
                        <li>Low maintenance</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Conventional Steel Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Heavy-duty operations</li>
                        <li>Hot-rolled steel sections</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Industrial Workshop Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Repair & production</li>
                        <li>Office integration possible</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Commercial Workshop Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Showroom / service layouts</li>
                        <li>Auto & retail industries</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Warehouse Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Clear span design</li>
                        <li>Fire-resistant options</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg mb-3">Cold Storage & Agri Sheds</h3>
                    <ul class="list-disc ml-5 text-gray-700 space-y-2">
                        <li>Ventilation & insulation</li>
                        <li>Humidity control</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- ============= RIGHT — WORKING SHED IDEAS ============= -->
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Working Shed Ideas Tailored to Industry</h2>
            <div class="w-20 h-1 bg-yellow-600 mb-8 rounded"></div>

            <ul class="list-disc ml-5 text-gray-700 space-y-4 text-lg leading-relaxed">
                <li>Multi-bay Workshop Sheds for parallel operations</li>
                <li>Extended Height Sheds for cranes or tall machinery</li>
                <li>Skylight-Integrated Sheds for natural lighting & energy savings</li>
                <li>Mezzanine Floor Sheds for office + storage combination</li>
                <li>Modular Shed Extensions for future expansion</li>
            </ul>
        </div>

    </div>
</section>



<!-- ================== COMBINED TECHNICAL + HEIGHT TABLES ================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Technical Specifications & Height Standards</h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- ================= LEFT TABLE ================= -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Technical Specifications</h3>
                
                <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4 text-left">Component</th>
                                <th class="py-3 px-4 text-left">Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Structure Type</td><td class="py-3 px-4">PEB / Steel Frame</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Height (Industrial Shed Height)</td><td class="py-3 px-4">6m to 15m (customizable)</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Roofing Material</td><td class="py-3 px-4">GI Sheets / Color Coated Sheets / Polycarbonate Skylights</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Cladding</td><td class="py-3 px-4">Profile Sheets / Sandwich Panels</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Type</td><td class="py-3 px-4">RCC Footings / Raft / Isolated Footings</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Bay Spacing</td><td class="py-3 px-4">5m to 8m</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Clear Span Width</td><td class="py-3 px-4">Up to 30m</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">EOT Crane Provisions</td><td class="py-3 px-4">Optional – based on load</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Insulation</td><td class="py-3 px-4">Rockwool / Glasswool (Optional)</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Ventilation</td><td class="py-3 px-4">Ridge Ventilators / Louvers / Turbo Vents</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Flooring</td><td class="py-3 px-4">Trimix / VDF / Epoxy</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ================= RIGHT TABLE ================= -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Industrial Shed Height – Typical Ranges</h3>

                <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4 text-left">Type of Shed</th>
                                <th class="py-3 px-4 text-left">Height (m)</th>
                                <th class="py-3 px-4 text-left">Use Case</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Light Industrial Shed</td><td class="py-3 px-4">4.5 – 6</td><td class="py-3 px-4">Workshops, packaging</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Standard Warehouse</td><td class="py-3 px-4">6 – 9</td><td class="py-3 px-4">Storage, logistics</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Assembly Line Shed</td><td class="py-3 px-4">6 – 10</td><td class="py-3 px-4">Automobile, assembly</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Heavy Industrial Shed</td><td class="py-3 px-4">9 – 12</td><td class="py-3 px-4">Foundries, machinery</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Logistics / Forklift Shed</td><td class="py-3 px-4">10 – 12</td><td class="py-3 px-4">Container handling</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Crane-Operated Shed</td><td class="py-3 px-4">12 – 18+</td><td class="py-3 px-4">EOT crane facilities</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-medium">Aircraft Hangars</td><td class="py-3 px-4">15 – 25+</td><td class="py-3 px-4">Large clear spans</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- INDUSTRIAL SHED WORK PROCESS – CARD DESIGN -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Industrial Shed Work Process
            </h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300">
                <div class="text-yellow-600 text-4xl mb-4">📍</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Site Inspection</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Soil testing, load assessment & site layout planning completed with precision.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300">
                <div class="text-yellow-600 text-4xl mb-4">📐</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Design & Planning</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    PEB/custom design, structural drawings & engineering analysis for stability.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300">
                <div class="text-yellow-600 text-4xl mb-4">🏗️</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Fabrication & Erection</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pre-fabricated steel components delivered & erected using high-end machinery.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300">
                <div class="text-yellow-600 text-4xl mb-4">✔️</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Finishing & Handover</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Roofing, cladding, painting & QA/QC checks followed by final project handover.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection
