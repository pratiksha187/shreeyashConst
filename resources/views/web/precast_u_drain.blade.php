@extends('layouts.app')

@section('title', 'Precast U Drain Installation Services – Shreeyash Construction Maharashtra')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction installs high-quality precast U drains for surface drainage across roads, industries, and layouts. Fast installation and standards-compliant work.">
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
   {{-- Page Header Section --}}
    <section class="hero-pattern text-white py-16 shadow-lg">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
            Precast U Drain Installation Services
        </h1>
        </div>
    </div>
    </section>

    {{-- Content Section --}}
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
        <p class="text-xl text-gray-800 font-semibold mb-6">
            Efficient Surface Drainage with Durable Precast U Drains
        </p>

        <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
            <p class="mb-4">
            Shreeyash Construction is a leading contractor for <strong>precast U drain installation</strong> in Maharashtra,
            delivering reliable surface drainage for <strong>industrial parks, highways, residential layouts,</strong>
            and <strong>urban infrastructure</strong>.
            </p>
            <p class="mb-4">
            We provide <strong>end-to-end execution</strong>—from trenching and bedding to placing, joint sealing,
            and finishing—ensuring <strong>long-lasting, maintenance-friendly</strong> drainage systems.
            </p>
            <p>
            Our precast U drains are manufactured with precision and installed with correct <strong>alignment, slope control,</strong>
            and <strong>hydraulic considerations</strong> for fast, efficient stormwater discharge.
            </p>
        </div>
        </div>
    </div>
    </section>


    <!-- Advantages -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Advantages of Precast U Drain Systems</h2>
                <div class="section-underline"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Speed & Quality</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Fast-track installation vs. cast-in-situ drains</li>
                            <li>Uniform quality from factory-controlled manufacturing</li>
                            <li>Minimum curing time — ready for immediate backfilling</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Maintenance & Access</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Easy maintenance and access</li>
                            <li>Suitable for heavy loads (with RCC covers)</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Standards & Compliance</h3>
                        <p class="text-gray-700">
                            Installation adheres to municipal and IRC requirements with documented QA/QC.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Technical Specifications – Precast U Drains</h2>
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
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Material</td>
                            <td class="py-3 px-4">RCC (M25 to M40 Grade)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Sizes Available</td>
                            <td class="py-3 px-4">300 mm to 1500 mm width (customized on demand)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Length per Unit</td>
                            <td class="py-3 px-4">1 to 2 meters</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Wall Thickness</td>
                            <td class="py-3 px-4">75 mm to 150 mm (based on load and size)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Installation Depth</td>
                            <td class="py-3 px-4">600 mm to 1500 mm (or as per design)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Slope</td>
                            <td class="py-3 px-4">1:200 to 1:500 (for smooth discharge)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Load Capacity</td>
                            <td class="py-3 px-4">Light to Heavy Duty (suitable for traffic areas)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Cover Type</td>
                            <td class="py-3 px-4">Precast RCC / SFRC Slotted Covers (optional)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Jointing</td>
                            <td class="py-3 px-4">Cement slurry or approved sealant for watertight finish</td>
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
                <h2 class="section-title">Precast U Drain Installation Process</h2>
                <div class="section-underline"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card"><div class="h-3 bg-yellow-500"></div><div class="p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Site survey & drain layout marking</li>
                        <li>Excavation & trench preparation</li>
                        <li>Granular bedding / PCC base (100–150 mm)</li>
                    </ul>
                </div></div>

                <div class="card"><div class="h-3 bg-yellow-500"></div><div class="p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Placing precast U units with crane/loader</li>
                        <li>Leveling and alignment checks</li>
                        <li>Joint sealing & connection to outlet/main drain</li>
                    </ul>
                </div></div>

                <div class="card"><div class="h-3 bg-yellow-500"></div><div class="p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Cover placement (if applicable)</li>
                        <li>Backfilling & surface reinstatement</li>
                        <li>Work under strict supervision to municipal/MIDC/IRC specs</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Applications of Precast U Drains</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Industrial estates and MIDC roads</li>
                <li>Township roads and commercial complexes</li>
                <li>Highway shoulders and parking areas</li>
                <li>SEZs, warehouses, and IT parks</li>
                <li>Factory campuses and utility corridors</li>
            </ul>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Why Choose Shreeyash Construction?</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
                <li>Experienced team in drainage and infrastructure works</li>
                <li>Use of high-quality precast products from certified vendors</li>
                <li>On-time project execution with precision machinery</li>
                <li>End-to-end services from layout to finishing</li>
                <li>Compliance with MoRTH, ULB, and IRC drainage standards</li>
            </ul>
            <p class="text-gray-700 mt-6 max-w-4xl mx-auto">
                We ensure your surface water drainage is efficient, low-maintenance, and built to last.
            </p>
        </div>
    </section>
@endsection
