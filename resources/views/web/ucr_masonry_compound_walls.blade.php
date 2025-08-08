@extends('layouts.app')

@section('title', 'Masonry Compound Wall Construction – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction builds durable masonry compound walls using bricks or stone for residential, industrial, and commercial plots. Custom design & reinforced finish.">
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
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Masonry Compound Walls</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">
                    Durable and Custom-Built Compound Walls for Industrial, Residential & Commercial Projects
                </p>
                <div class="bg-white/10 rounded-lg p-6 inline-block">
                    <p class="opacity-90">
                        Shreeyash Construction is a trusted civil contractor in Maharashtra for constructing masonry compound walls that provide safety, boundary definition, and aesthetic appeal. Our compound walls are built using high-quality materials such as cement bricks, fly ash bricks, red bricks, or stone masonry as per client requirements and site conditions.
                        We undertake end-to-end execution from foundation to plastering, ensuring long-lasting structural integrity with proper reinforcement and waterproofing treatments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Masonry Compound Walls -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Types of Masonry Compound Walls We Construct</h2>
                <div class="section-underline"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Brick Masonry -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Brick Masonry Walls</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Made using red bricks, fly ash bricks, or cement blocks</li>
                            <li>Economical and durable for residential or small-scale industrial needs</li>
                        </ul>
                    </div>
                </div>

                <!-- Stone Masonry -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Stone Masonry Compound Walls</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Ideal for rural, industrial, or rugged terrain areas</li>
                            <li>Offers excellent strength and natural aesthetics</li>
                        </ul>
                    </div>
                </div>

                <!-- Plastered & Painted -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Plastered & Painted Masonry Walls</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Provides a neat and finished look</li>
                            <li>Can be painted or textured for visual appeal</li>
                        </ul>
                    </div>
                </div>

                <!-- Reinforced Masonry -->
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Reinforced Masonry Walls</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Integrated with vertical and horizontal RCC bands</li>
                            <li>Suitable for high walls or load-bearing boundary walls</li>
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
                <h2 class="section-title">Technical Specifications – Masonry Compound Wall</h2>
                <div class="section-underline"></div>
            </div>

            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-yellow-600 text-white">
                            <th class="py-3 px-4 text-left">Item</th>
                            <th class="py-3 px-4 text-left">Specification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Wall Height</td><td class="py-3 px-4">1.5 m to 3.0 m (customizable)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Depth</td><td class="py-3 px-4">600 mm to 1000 mm depending on soil and height</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Type</td><td class="py-3 px-4">Stone masonry / RCC strip foundation</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Wall Thickness</td><td class="py-3 px-4">115 mm to 230 mm (as per design)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Brick Type</td><td class="py-3 px-4">Cement bricks / Fly ash bricks / Red bricks</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Mortar Ratio</td><td class="py-3 px-4">1:4 or 1:6 Cement:Sand mix</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Plastering</td><td class="py-3 px-4">Internal & external, 12 mm to 15 mm thick</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Reinforcement</td><td class="py-3 px-4">8mm/10mm bars in RCC pillars or coping beams</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Finish</td><td class="py-3 px-4">Smooth plaster, exterior-grade paint or texture coating</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Construction Process -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Construction Process</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Site Measurement & Layout Marking</li>
                <li>Trenching and Foundation Work</li>
                <li>Brick/Stone Masonry Wall Construction</li>
                <li>Pillar Casting (if required for strength)</li>
                <li>Plastering & Finishing</li>
                <li>Painting / Texturing / Gate Pillar Work (if included)</li>
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
                <li>Industrial and factory plot boundary walls</li>
                <li>Residential housing and bungalows</li>
                <li>School, hospital, and institutional campus boundaries</li>
                <li>Farmhouse or open plot demarcation</li>
                <li>Commercial building security perimeters</li>
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
                <li>Quality-focused workmanship with skilled masons</li>
                <li>Timely project execution and cost-effective pricing</li>
                <li>Use of high-strength materials and reinforced design</li>
                <li>Custom wall height, design, and finish options available</li>
                <li>We follow IS 1905 and local municipal norms for compound wall construction</li>
            </ul>
        </div>
    </section>
@endsection
