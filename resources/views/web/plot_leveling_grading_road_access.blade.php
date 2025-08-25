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
<section class="hero-pattern text-white py-16 shadow-lg">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                Plot Leveling Services
            </h1>
        </div>
    </div>
</section>

{{-- Content Section --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-xl text-gray-800 font-semibold mb-6">
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
            <h2 class="section-title">Our Plot Leveling Services Include</h2>
            <div class="section-underline"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card">
                <div class="h-3 bg-yellow-500"></div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-3">Earthwork Cutting & Filling</h3>
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
                    <h3 class="text-lg font-semibold mb-3">Site Grading & Surface Drainage</h3>
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
                    <h3 class="text-lg font-semibold mb-3">Compaction & Soil Stabilization</h3>
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
                    <h3 class="text-lg font-semibold mb-3">Road Access Management</h3>
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
                        <th class="py-3 px-4 text-left">Parameter</th>
                        <th class="py-3 px-4 text-left">Specification</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Grading Tolerance</td><td class="py-3 px-4">±50 mm (depending on site size)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Density</td><td class="py-3 px-4">≥ 95% of Modified Proctor Density</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Fill Material</td><td class="py-3 px-4">Selected Earth / Murrum / GSB</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Slope for Drainage</td><td class="py-3 px-4">Min. 1% away from foundation or structure</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Machinery Used</td><td class="py-3 px-4">Bulldozers, Graders, Excavators, Vibro Rollers</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Road Base Layer</td><td class="py-3 px-4">GSB + WMM with defined camber/slope</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Drainage Provision</td><td class="py-3 px-4">Natural or RCC-lined channels if required</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Applications -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Applications of Plot Leveling</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
            <li>Industrial Plots</li>
            <li>Commercial and SEZ Land Parcels</li>
            <li>Factory or Warehouse Construction Sites</li>
            <li>Residential Townships</li>
            <li>Infrastructure Development Projects</li>
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
            <li>In-house machinery and skilled operators</li>
            <li>Geo-technical assessment and leveling reports</li>
            <li>Precision-controlled grading using GPS-enabled equipment</li>
            <li>Seamless integration of road access, drainage, and plot preparation</li>
            <li>Compliant with IRC and MoRTH standards</li>
        </ul>
    </div>
</section>
@endsection
