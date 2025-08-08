@extends('layouts.app')

@section('title', 'Asphalt Compaction Services in Maharashtra – Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Shreeyash Construction offers expert asphalt compaction services with advanced machinery & skilled teams. Trusted contractors for roads across Maharashtra.">
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
    .spec-row:nth-child(odd){ background:rgba(15,76,129,0.05); }
</style>

<!-- Hero -->
<section class="hero-pattern text-white py-20">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Asphalt Compaction Services</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">Expert Asphalt Compaction Contractors in Maharashtra</p>
            <div class="bg-white/10 rounded-lg p-6 inline-block text-left">
                <p class="opacity-90">
                    Shreeyash Construction is a trusted name in road construction and infrastructure development across Maharashtra.
                    We specialize in asphalt compaction, ensuring long-lasting, high-performance roads that meet national and international quality standards.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What is Asphalt Compaction -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="section-title text-center">What is Asphalt Compaction?</h2>
            <div class="section-underline"></div>
            <p class="text-gray-700 max-w-4xl mx-auto text-center">
                Asphalt compaction is the process of densifying the asphalt mix after it has been laid using rollers. Proper compaction ensures:
            </p>
            <ul class="list-disc list-inside text-gray-700 mt-4 max-w-3xl mx-auto">
                <li>Increased load-bearing capacity</li>
                <li>Improved water resistance</li>
                <li>Reduced air voids</li>
                <li>Longer pavement life</li>
            </ul>
            <p class="text-gray-700 mt-4 max-w-4xl mx-auto text-center">
                This crucial phase determines the durability and performance of the asphalt pavement.
            </p>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Our Asphalt Compaction Process</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 max-w-3xl mx-auto space-y-4">
            <li>
                <strong>Initial Breakdown Rolling</strong>
                <ul class="list-disc list-inside ml-6">
                    <li>Performed immediately after laying the mix.</li>
                    <li>Uses vibratory steel-drum rollers.</li>
                    <li>Ensures initial compaction when the material is hottest.</li>
                </ul>
            </li>
            <li>
                <strong>Intermediate Compaction</strong>
                <ul class="list-disc list-inside ml-6">
                    <li>Achieved using pneumatic-tired rollers.</li>
                    <li>Helps to seal voids and improve density.</li>
                </ul>
            </li>
            <li>
                <strong>Finish Rolling</strong>
                <ul class="list-disc list-inside ml-6">
                    <li>Performed with smooth steel-wheel rollers.</li>
                    <li>Provides a uniform, smooth surface texture.</li>
                    <li>Eliminates roller marks.</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!-- Technical Specs -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Technical Specifications of Asphalt Compaction</h2>
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
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Target</td><td class="py-3 px-4">92%–97% of Maximum Theoretical Density (MTD)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Layer Thickness</td><td class="py-3 px-4">40mm to 100mm (depending on design)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Rolling Temperature Range</td><td class="py-3 px-4">120°C to 140°C</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Number of Roller Passes</td><td class="py-3 px-4">6 to 10 (varies by mix design and layer thickness)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Type of Rollers Used</td><td class="py-3 px-4">Tandem Vibratory, Pneumatic-Tired, Static Rollers</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Moisture Content</td><td class="py-3 px-4">&lt; 0.5%</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Air Voids in Compacted Mix</td><td class="py-3 px-4">3% to 6%</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Why Choose Shreeyash Construction?</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 max-w-3xl mx-auto space-y-2">
            <li>Experienced Engineers & Operators</li>
            <li>High-Efficiency Rollers & Paving Equipment</li>
            <li>Strict Quality Control & On-Site Testing</li>
            <li>Compliance with MoRTH, IRC, and NHAI standards</li>
            <li>On-time Project Execution</li>
        </ul>
    </div>
</section>


@endsection
