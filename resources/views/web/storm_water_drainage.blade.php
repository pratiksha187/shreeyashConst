@extends('layouts.app')

@section('title', 'Storm Water Drainage Construction – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction designs and constructs efficient storm water drainage systems for roads, townships, and industrial layouts with complete hydrological planning.">
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

    <!-- Hero -->
    <section class="hero-pattern text-white py-20">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Storm Water Drainage Solutions</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">
                    Efficient and Sustainable Drainage Systems for Urban and Industrial Projects
                </p>
                <div class="bg-white/10 rounded-lg p-6 inline-block">
                    <p class="opacity-90">
                        Shreeyash Construction is a leading civil engineering company in Maharashtra specializing in the design and construction of storm water drainage systems. We provide reliable drainage infrastructure for roads, industrial parks, residential layouts, and commercial campuses to ensure proper management of rainwater runoff, prevent waterlogging, and maintain structural integrity of surrounding developments.
                        Our drainage systems are designed in compliance with MoRTH, IRC, and local municipal norms, with a focus on sustainability, hydraulic performance, and long-term durability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Include -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Our Storm Water Drainage Services Include</h2>
                <div class="section-underline"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Hydrological Survey & Drainage Design</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Calculation of runoff based on rainfall intensity and catchment area</li>
                            <li>Designing drain cross-sections and slope gradients</li>
                            <li>Preparing flow diagrams and layout plans</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Construction of Drainage Structures</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Open drains (rectangular/trapezoidal)</li>
                            <li>Covered RCC drains with cast-in-situ or precast slabs</li>
                            <li>RCC Box Drains, U-drains, and Pipe Culverts</li>
                            <li>Gully pits and catch basins for road shoulders</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Inlet & Outlet Management</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Proper discharge into natural water bodies or municipal lines</li>
                            <li>Integration with rainwater harvesting or retention ponds</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Drain Covering & Finishing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Slotted covers for pedestrian or vehicular areas</li>
                            <li>Maintenance-friendly access points and chambers</li>
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
                <h2 class="section-title">Technical Specifications of Storm Water Drainage Systems</h2>
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
                            <td class="py-3 px-4 font-medium">Drain Type</td>
                            <td class="py-3 px-4">Open / Covered / RCC Box / HDPE Pipe</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Standard Slope</td>
                            <td class="py-3 px-4">1:100 to 1:200 (depends on site conditions)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Depth & Width</td>
                            <td class="py-3 px-4">As per hydraulic design (typically 300mm to 1200mm depth)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Materials</td>
                            <td class="py-3 px-4">RCC M20/M25, Brick Masonry, Precast Slabs, CI Covers</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Manhole Spacing</td>
                            <td class="py-3 px-4">Every 30–50 meters or at junctions</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Load Bearing Covers</td>
                            <td class="py-3 px-4">Available for footpath, light or heavy vehicle load</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Testing</td>
                            <td class="py-3 px-4">Flow testing, structural integrity checks, gradient verification</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Applications</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>City and Municipal Roads</li>
                <li>Industrial Zones and MIDC Layouts</li>
                <li>Township Roads and Commercial Complexes</li>
                <li>Highways and Rural Connectivity Projects</li>
                <li>Parking Lots, Warehouses, and SEZs</li>
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
                <li>Experienced in drainage projects for NHAI, PMGSY, MIDC & Municipal bodies</li>
                <li>In-house engineers, equipment, and quality control team</li>
                <li>Customized solutions based on terrain and hydrology</li>
                <li>Integration with roadworks, plot development, and site leveling</li>
                <li>Timely execution with focus on safety, slope control, and zero waterlogging</li>
            </ul>
        </div>
    </section>
@endsection
