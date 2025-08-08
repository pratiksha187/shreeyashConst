@extends('layouts.app')

@section('title', 'GSB & Wet Mix Macadam (WMM) Laying Services – Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Expert contractors for GSB & WMM laying. Shreeyash Construction offers wet mix macadam laying with technical precision & MoRTH specifications in Maharashtra.">
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
        <div class="max-w-5xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">GSB & WMM Laying Services</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">Reliable GSB and Wet Mix Macadam Laying Contractors in Maharashtra</p>
            <div class="bg-white/10 rounded-lg p-6 inline-block text-left">
                <p class="opacity-90">
                    Shreeyash Construction is a top road building company in Maharashtra specializing in GSB (Granular Sub Base) and WMM (Wet Mix Macadam) laying. 
                    We deliver road foundation works with precision, using modern equipment and adhering to MoRTH & IRC standards for durability and performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- GSB Explanation -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="section-title text-center">What is GSB in Road Construction?</h2>
            <div class="section-underline"></div>
            <p class="text-gray-700 max-w-4xl mx-auto text-center">
                GSB stands for Granular Sub Base, the bottom-most layer of a road pavement that provides a strong foundation for upper layers. 
                It distributes load, prevents capillary action, and enhances drainage.
            </p>
            <ul class="list-disc list-inside text-gray-700 mt-4 max-w-3xl mx-auto">
                <li><strong>Materials Used:</strong> Crushed stone aggregates, river bed materials</li>
                <li><strong>Purpose:</strong> Acts as a supportive and drainage-friendly layer beneath WMM</li>
            </ul>
        </div>
    </div>
</section>

<!-- WMM Process -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">WMM (Wet Mix Macadam) Laying Process</h2>
            <div class="section-underline"></div>
        </div>
        <p class="text-gray-700 max-w-4xl mx-auto text-center mb-6">
            WMM is the base layer laid over the GSB, consisting of well-graded aggregates mixed with water, laid using a paver finisher, followed by compaction.
        </p>
        <ul class="list-disc list-inside text-gray-700 max-w-3xl mx-auto space-y-2">
            <li>Subgrade Preparation</li>
            <li>GSB Layer Laying & Compaction</li>
            <li>WMM Laying Using Paver</li>
            <li>Rolling & Compaction with Vibratory Rollers</li>
            <li>Quality Testing & Surface Inspection</li>
        </ul>
    </div>
</section>

<!-- Technical Specifications -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Technical Specifications for GSB & WMM Laying</h2>
            <div class="section-underline"></div>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-yellow-600 text-white">
                        <th class="py-3 px-4 text-left">Parameter</th>
                        <th class="py-3 px-4 text-left">GSB Specification</th>
                        <th class="py-3 px-4 text-left">WMM Specification</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Material</td><td class="py-3 px-4">Crushed Stone</td><td class="py-3 px-4">Graded Aggregate + Water</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Layer Thickness</td><td class="py-3 px-4">150 mm (standard)</td><td class="py-3 px-4">100–250 mm</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Max Aggregate Size</td><td class="py-3 px-4">75 mm</td><td class="py-3 px-4">26.5 mm</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Compaction Density</td><td class="py-3 px-4">98% of MDD</td><td class="py-3 px-4">98% of MDD</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Moisture Content</td><td class="py-3 px-4">Optimum Moisture Content</td><td class="py-3 px-4">Optimum Moisture Content</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Rolling Equipment</td><td class="py-3 px-4">8-10 Ton Vibratory Roller</td><td class="py-3 px-4">Tandem Roller / PTR</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Surface Tolerance</td><td class="py-3 px-4">±10 mm</td><td class="py-3 px-4">±5 mm</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Testing</td><td class="py-3 px-4">Gradation, MDD, Field Density</td><td class="py-3 px-4">Gradation, MDD, Field Density</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Why Choose Us?</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 max-w-3xl mx-auto space-y-2">
            <li>Experienced Team & Engineers</li>
            <li>High-Efficiency Paver Finishers</li>
            <li>Accurate Moisture Control & Rolling</li>
            <li>Adherence to MoRTH & IRC Guidelines</li>
            <li>On-Time Execution with Quality Testing</li>
        </ul>
    </div>
</section>

<!-- Applications -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Applications</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 max-w-3xl mx-auto space-y-2">
            <li>National Highways</li>
            <li>Rural Roads (PMGSY)</li>
            <li>Industrial Parks</li>
            <li>Residential Layouts</li>
            <li>SEZs and Logistics Parks</li>
        </ul>
    </div>
</section>

<!-- Contact -->
<section class="py-16 bg-yellow-800 text-white text-center">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-4">GSB Contact – Reach Out to Us Today!</h2>
        <p class="mb-6 max-w-3xl mx-auto">
            Searching for GSB contractors or laying of WMM near you? Shreeyash Construction is your go-to partner. We are known for technical accuracy, project integrity, and dependable timelines.
        </p>
        <a href="/contact" class="bg-white text-yellow-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Contact Us</a>
    </div>
</section>
@endsection
