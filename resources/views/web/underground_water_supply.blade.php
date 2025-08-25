@extends('layouts.app')

@section('title', 'Underground Water Supply Pipeline Services – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction provides reliable underground water pipeline solutions for residential, industrial & municipal projects with complete design, laying, and testing.">
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
            Underground Water Supply Pipeline
        </h1>
        </div>
    </div>
    </section>

    {{-- Content Section --}}
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
        <p class="text-xl text-gray-800 font-semibold mb-6">
            Reliable Underground Water Supply Network Contractors in Maharashtra
        </p>

        <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
            <p class="mb-4">
            Shreeyash Construction provides end-to-end solutions for the <strong>design, laying, and commissioning</strong> 
            of <strong>underground water supply pipelines</strong> for <strong>residential layouts, industrial zones, townships, 
            and infrastructure projects</strong> across Maharashtra. Our systems are engineered for <strong>durability, leak-proof performance, 
            and consistent water flow</strong>.
            </p>
            <p>
            Every project complies with <strong>IS standards</strong>, <strong>municipal regulations</strong>, and 
            <strong>CPHEEO guidelines</strong>, ensuring reliable, pressure-tested pipelines from water source integration 
            to final distribution — delivering efficiency with minimal maintenance.
            </p>
        </div>
        </div>
    </div>
    </section>


    <!-- Scope of Work -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Scope of Underground Water Pipeline Work</h2>
                <div class="section-underline"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Survey & Network Planning -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Survey & Network Planning</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Site survey and topographical mapping</li>
                            <li>Hydraulic design of water supply layout</li>
                            <li>Pipe diameters, pressure zones & control valves</li>
                        </ul>
                    </div>
                </div>

                <!-- Pipeline Laying & Jointing -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Pipeline Laying & Jointing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Excavation and bedding preparation</li>
                            <li>Laying HDPE, DI, or GI pipelines</li>
                            <li>Electro-fusion or mechanical jointing</li>
                        </ul>
                    </div>
                </div>

                <!-- Chamber & Valve Installation -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Chamber & Valve Installation</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Valve chambers, air valves & thrust blocks</li>
                            <li>Sluice valves, NRVs & bulk water meters</li>
                        </ul>
                    </div>
                </div>

                <!-- Backfilling & Restoration -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Backfilling & Surface Restoration</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Layer-wise backfilling with compaction</li>
                            <li>Road/footpath reinstatement after laying</li>
                        </ul>
                    </div>
                </div>

                <!-- Testing & Commissioning -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Testing & Commissioning</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Hydro testing & pressure checks</li>
                            <li>Flow verification & operational handover</li>
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
                <h2 class="section-title">Technical Specifications – Underground Water Supply</h2>
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
                            <td class="py-3 px-4 font-medium">Pipe Types</td>
                            <td class="py-3 px-4">HDPE (PE-100), Ductile Iron (DI), Galvanized Iron (GI)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Pipe Sizes</td>
                            <td class="py-3 px-4">40 mm to 600 mm (based on flow requirements)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Working Pressure</td>
                            <td class="py-3 px-4">6–16 bar (customized as per demand head)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Jointing Method</td>
                            <td class="py-3 px-4">Butt Fusion / Electro Fusion / Mechanical</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Depth of Laying</td>
                            <td class="py-3 px-4">900 mm to 1500 mm below NGL (as per standards)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Testing Pressure</td>
                            <td class="py-3 px-4">1.5 × Working Pressure</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Valves Used</td>
                            <td class="py-3 px-4">Gate Valves, Air Valves, NRVs, Butterfly Valves</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">IS Standards Followed</td>
                            <td class="py-3 px-4">IS 4984, IS 8329, CPHEEO Manual on Water Supply</td>
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
                <h2 class="section-title">Applications of Underground Water Pipeline Work</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Industrial Water Distribution</li>
                <li>Township & Smart City Projects</li>
                <li>Rural & Urban Water Supply Schemes</li>
                <li>MIDC & SEZ Water Networks</li>
                <li>Commercial Parks & Institutional Campuses</li>
            </ul>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Why Shreeyash Construction?</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
                <li>Skilled execution team with modern equipment</li>
                <li>Accurate trenching, jointing, and pressure testing</li>
                <li>Compliant with local development authority norms</li>
                <li>Zero-leakage assurance with long-term serviceability</li>
                <li>Integration with underground utilities & site infrastructure</li>
            </ul>
        </div>
    </section>
@endsection
