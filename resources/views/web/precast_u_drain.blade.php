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

 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/PrecastU.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         Precast U Drain Installation Services
        </h1>
        
      </div>
    </div>
  </section>
    {{-- Content Section --}}
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-8xl mx-auto text-center">
        <p class="text-xl text-yellow-500 font-semibold mb-6">
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


   <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Advantages of Precast U Drain Systems</h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-yellow-600 text-3xl">⚡</span>
                    <h3 class="text-xl font-semibold text-gray-800">Speed & Quality</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Fast-track installation compared to cast-in-situ methods</li>
                    <li>Factory-produced units ensure uniform quality</li>
                    <li>Minimal curing time → ready for backfilling quickly</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-yellow-600 text-3xl">🔧</span>
                    <h3 class="text-xl font-semibold text-gray-800">Maintenance & Access</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Excellent accessibility for inspection & cleaning</li>
                    <li>Compatible with heavy-load RCC / SFRC covers</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-yellow-600 text-3xl">📘</span>
                    <h3 class="text-xl font-semibold text-gray-800">Standards & Compliance</h3>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Designed & installed as per <strong>municipal norms</strong>,  
                    <strong>IRC standards</strong>, and complete QA/QC documentation for quality assurance.
                </p>
            </div>

        </div>
    </div>
</section>


   <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Precast U Drains – Technical Specs & Installation Process</h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <!-- Two Column Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT: Technical Specifications -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-200">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    📘 Technical Specifications
                </h3>

                <div class="overflow-x-auto rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4 text-left">Parameter</th>
                                <th class="py-3 px-4 text-left">Specification</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Material</td>
                                <td class="py-3 px-4">RCC (M25 to M40)</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Sizes Available</td>
                                <td class="py-3 px-4">300 mm – 1500 mm width</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Unit Length</td>
                                <td class="py-3 px-4">1 to 2 meters</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Wall Thickness</td>
                                <td class="py-3 px-4">75 mm – 150 mm</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Installation Depth</td>
                                <td class="py-3 px-4">600 mm – 1500 mm</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Slope</td>
                                <td class="py-3 px-4">1:200 to 1:500</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Load Capacity</td>
                                <td class="py-3 px-4">Light / Medium / Heavy Duty</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Cover Type</td>
                                <td class="py-3 px-4">RCC / SFRC Slotted Covers</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="py-3 px-4 font-medium">Jointing</td>
                                <td class="py-3 px-4">Cement slurry / Sealant</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT: Installation Process -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-200">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    🏗️ Installation Process
                </h3>

                <div class="space-y-6">

                    <!-- Step Card -->
                    <div class="bg-gray-50 p-5 rounded-lg border border-gray-200 shadow-sm">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Step 1 – Site Preparation</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Drain alignment & marking</li>
                            <li>Excavation & trench preparation</li>
                            <li>Granular bedding / PCC base (100–150 mm)</li>
                        </ul>
                    </div>

                    <!-- Step Card -->
                    <div class="bg-gray-50 p-5 rounded-lg border border-gray-200 shadow-sm">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Step 2 – Placement & Alignment</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Placing units using crane/loader</li>
                            <li>Check levels & alignment</li>
                            <li>Sealing joints and connecting flows</li>
                        </ul>
                    </div>

                    <!-- Step Card -->
                    <div class="bg-gray-50 p-5 rounded-lg border border-gray-200 shadow-sm">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Step 3 – Finishing & Handover</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Cover slab placement (if required)</li>
                            <li>Backfilling & compaction</li>
                            <li>Work as per MIDC / IRC / Municipal QA standards</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Precast U Drains – Applications & Why Choose Us</h2>
            <div class="w-20 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <!-- 2 Column Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- LEFT: Applications -->
            <div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    📍 Applications
                </h3>

                <ul class="text-gray-700 space-y-3">
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Industrial estates and MIDC roads
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Township roads and commercial complexes
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Highway shoulders and parking areas
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        SEZs, warehouses, and IT parks
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Factory campuses and utility corridors
                    </li>
                </ul>
            </div>

            <!-- RIGHT: Why Choose -->
            <div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    ⭐ Why Choose Shreeyash Construction?
                </h3>

                <ul class="text-gray-700 space-y-3">
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Experienced team in drainage and infrastructure works
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        High-quality precast products from certified vendors
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        On-time execution with precision machinery
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        End-to-end services from layout to finishing
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-yellow-600 text-xl">✔</span>
                        Compliance with MoRTH, ULB & IRC drainage standards
                    </li>
                </ul>

                <p class="text-gray-700 mt-6">
                    We ensure your surface water drainage is efficient, durable, and low-maintenance.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
