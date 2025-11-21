@extends('layouts.app')

@section('title', 'Plot Leveling Services – Site Grading & Road Access by Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Shreeyash Construction offers expert plot leveling, grading, and road access services for industrial and commercial sites. Precision earthwork & drainage included.">
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

<section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/Plot.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         Plot Leveling Services
        </h1>
        
      </div>
    </div>
</section>
{{-- Content Section --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-8xl mx-auto text-center">
            <p class="text-xl text-gray-800 font-bold mb-6">
                Expert Site Grading and Road Access Contractors in Maharashtra
            </p>

            <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
                <p class="mb-4">
                    Shreeyash Construction offers professional <strong>plot leveling services</strong> for
                    <strong>industrial, commercial, and residential</strong> developments. With years of expertise in
                    <strong>land development and infrastructure works</strong>, we ensure every plot is accurately
                    graded, compacted, and construction-ready.
                </p>
                <p>
                    Our services include <strong>contour mapping</strong>, <strong>soil cutting and filling</strong>,
                    <strong>slope stabilization</strong>, and <strong>access road development</strong> — all
                    meticulously tailored to the site’s geography and your project specifications for durability
                    and precision.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Our Plot Leveling Services Include</h2>
            <div class="w-20 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card">
                <div class="h-3 bg-yellow-500"></div>
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-3">Earthwork Cutting & Filling</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Removal of excess soil from high areas</li>
                        <li>Filling & compaction of low-lying zones</li>
                        <li>Ensures uniform ground level across the plot</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="h-3 bg-yellow-500"></div>
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-3">Site Grading & Surface Drainage</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Grading based on desired slope (1%–3%)</li>
                        <li>Facilitates proper stormwater runoff</li>
                        <li>Prevents water stagnation & erosion</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="h-3 bg-yellow-500"></div>
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-3">Compaction & Soil Stabilization</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Achieves desired compaction density</li>
                        <li>Use of vibratory rollers & soil compactors</li>
                        <li>Lime/cement stabilization for weak soils</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="h-3 bg-yellow-500"></div>
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-3">Road Access Management</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Construction of approach roads</li>
                        <li>Temporary or permanent road options</li>
                        <li>Includes stone soling, GSB/WMM & compaction</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- HEADING -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Land Development – Technical Specs & Advantages</h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <!-- GRID SPLIT (LEFT: TABLE • RIGHT: LISTS) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- LEFT SIDE – TECHNICAL SPEC TABLE -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Technical Specifications</h3>

                <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4 text-left font-bold">Parameter</th>
                                <th class="py-3 px-4 text-left font-bold">Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Grading Tolerance</td><td class="py-3 px-4">±50 mm (site dependent)</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Compaction Density</td><td class="py-3 px-4">≥ 95% Modified Proctor</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Fill Material</td><td class="py-3 px-4">Selected Earth / Murrum / GSB</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Slope for Drainage</td><td class="py-3 px-4">Minimum 1% outward</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Machinery Used</td><td class="py-3 px-4">Bulldozers, Graders, Excavators, Rollers</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Road Base Layer</td><td class="py-3 px-4">GSB + WMM with designed camber</td></tr>
                            <tr class="spec-row"><td class="py-3 px-4 font-bold">Drainage Provision</td><td class="py-3 px-4">Natural or RCC Channels</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT SIDE – APPLICATIONS + WHY CHOOSE -->
            <div>

                <!-- APPLICATIONS -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Applications of Plot Leveling</h3>

                <ul class="list-disc list-inside text-gray-700 space-y-2 mb-10">
                    <li>Industrial Plots</li>
                    <li>Commercial and SEZ Land Parcels</li>
                    <li>Factories & Warehouse Sites</li>
                    <li>Residential Townships</li>
                    <li>Infrastructure Development Projects</li>
                </ul>

                <!-- WHY CHOOSE -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Why Choose Shreeyash Construction?</h3>

                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>In-house machinery & trained operators</li>
                    <li>Geo-technical review & leveling report support</li>
                    <li>GPS-enabled grading & accuracy</li>
                    <li>Integrated road access & drainage planning</li>
                    <li>Works as per IRC & MoRTH standards</li>
                </ul>

            </div>

        </div>

    </div>
</section>


@endsection
