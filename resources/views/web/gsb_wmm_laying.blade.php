@extends('layouts.app')

@section('title', 'GSB & Wet Mix Macadam (WMM) Laying Services – Shreeyash Construction')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body { font-family:'Poppins',sans-serif; background:#f8f9fa; }

    .sec-heading { font-size:2.2rem; font-weight:700; color:#1f2937; }
    .sec-line { width:70px; height:4px; background:#f59e0b; margin:10px auto 25px; border-radius:999px; }

    .yellow-bullet {
        width:10px; height:10px;
        background:#f59e0b;
        border-radius:50%;
        margin-right:10px;
        margin-top:6px;
        flex-shrink:0;
    }

    .feature-box {
        background:#fff;
        border-radius:15px;
        padding:28px;
        box-shadow:0 8px 25px rgba(0,0,0,0.07);
        transition:0.3s;
    }
    .feature-box:hover { transform:translateY(-6px); }

    .table-style thead {
        background:#f59e0b;
        color:white;
    }
    .table-style tbody tr:nth-child(odd) {
        background:#f7f7f7;
    }
</style>


<!-- ========================= HERO ========================= -->
<section class="relative h-[430px] overflow-hidden">
    <img src="/storage/logo/header/GSB.png"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative container mx-auto h-full flex items-center justify-center px-4 md:px-8">
        <div class="bg-black/50 px-10 py-5 rounded-xl text-center max-w-3xl backdrop-blur-sm">
            <h1 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                GSB & WMM Laying Services
            </h1>
            <p class="text-gray-200 mt-2 text-lg">Precision • Strength • Durability</p>
        </div>
    </div>
</section>


<!-- ========================= INTRO ========================= -->
<section class="py-20 bg-white text-center">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="sec-heading">Reliable GSB & WMM Laying Contractors in Maharashtra</h2>
        <div class="sec-line"></div>

        <p class="text-lg text-gray-700 leading-relaxed">
            Shreeyash Construction provides expert <strong>Granular Sub Base (GSB)</strong> and 
            <strong>Wet Mix Macadam (WMM)</strong> laying services for highways, industrial roads, 
            layouts and township infrastructure. Using modern paver finishers, vibratory rollers, 
            and strict <strong>MoRTH & IRC standards</strong>, we ensure long-lasting, stable road foundations.
        </p>
    </div>
</section>


<!-- ========================= TWO-COLUMN GSB + WMM FAST OVERVIEW ========================= -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-14">

        <!-- LEFT : GSB -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">What is GSB?</h3>
            <p class="text-gray-700 leading-relaxed mb-5">
                GSB (Granular Sub Base) forms the bottom-most layer of a road pavement. It distributes load, 
                improves drainage, and prevents capillary rise to protect upper layers.
            </p>

            <ul class="space-y-3 text-gray-700 text-lg leading-relaxed">
                <li class="flex"><span class="yellow-bullet"></span><span>Crushed stone & river-bed aggregates</span></li>
                <li class="flex"><span class="yellow-bullet"></span><span>Supports WMM layer above</span></li>
                <li class="flex"><span class="yellow-bullet"></span><span>Enhances load transfer & drainage</span></li>
            </ul>
        </div>

        <!-- RIGHT : WMM -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">What is WMM?</h3>
            <p class="text-gray-700 leading-relaxed mb-5">
                WMM (Wet Mix Macadam) is a mechanically mixed, well-graded aggregate layer placed above GSB, 
                ensuring strong stability and superior compaction.
            </p>

            <ul class="space-y-3 text-gray-700 text-lg leading-relaxed">
                <li class="flex"><span class="yellow-bullet"></span><span>Well-graded aggregates + water</span></li>
                <li class="flex"><span class="yellow-bullet"></span><span>Laid using mechanical paver</span></li>
                <li class="flex"><span class="yellow-bullet"></span><span>Compacted with vibratory rollers</span></li>
            </ul>
        </div>
    </div>
</section>


<!-- ========================= PROCESS CARDS ========================= -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl text-center">

        <h2 class="sec-heading">GSB & WMM Laying Process</h2>
        <div class="sec-line"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10">

            <div class="feature-box">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">GSB Layer</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✔ Leveling & Subgrade Preparation</li>
                    <li>✔ GSB Spreading</li>
                    <li>✔ Vibratory Compaction</li>
                </ul>
            </div>

            <div class="feature-box">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">WMM Laying</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✔ Mechanical Paver Laying</li>
                    <li>✔ Correct Moisture Content</li>
                    <li>✔ Layer Thickness Control</li>
                </ul>
            </div>

            <div class="feature-box">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Final Compaction</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✔ PTR / Tandem Roller</li>
                    <li>✔ Achieve Required Density</li>
                    <li>✔ Quality Inspection</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<!-- ========================= TECHNICAL SPECIFICATIONS ========================= -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-7xl text-center">

        <h2 class="sec-heading">Technical Specifications</h2>
        <div class="sec-line"></div>

        <div class="overflow-x-auto bg-white rounded-xl shadow-md mt-10">
            <table class="min-w-full text-left table-style">
                <thead>
                    <tr>
                        <th class="py-3 px-4">Parameter</th>
                        <th class="py-3 px-4">GSB</th>
                        <th class="py-3 px-4">WMM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="py-3 px-4 font-medium">Material</td><td class="py-3 px-4">Crushed Stone</td><td class="py-3 px-4">Graded Aggregate + Water</td></tr>
                    <tr><td class="py-3 px-4 font-medium">Layer Thickness</td><td class="py-3 px-4">150 mm</td><td class="py-3 px-4">100 – 250 mm</td></tr>
                    <tr><td class="py-3 px-4 font-medium">Max Aggregate Size</td><td class="py-3 px-4">75 mm</td><td class="py-3 px-4">26.5 mm</td></tr>
                    <tr><td class="py-3 px-4 font-medium">Compaction</td><td class="py-3 px-4">98% MDD</td><td class="py-3 px-4">98% MDD</td></tr>
                    <tr><td class="py-3 px-4 font-medium">Rolling Equipment</td><td class="py-3 px-4">8–10 Ton Vibratory</td><td class="py-3 px-4">PTR / Tandem Roller</td></tr>
                </tbody>
            </table>
        </div>

    </div>
</section>


<!-- ========================= WHY CHOOSE ========================= -->
<section class="py-20 bg-white text-center">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="sec-heading">Why Choose Shreeyash Construction?</h2>
        <div class="sec-line"></div>

        <ul class="space-y-3 text-gray-700 text-lg mt-6">
            <li class="flex justify-center"><span class="yellow-bullet"></span> Experienced Team & Engineers</li>
            <li class="flex justify-center"><span class="yellow-bullet"></span> High-Efficiency Paver Finishers</li>
            <li class="flex justify-center"><span class="yellow-bullet"></span> Accurate Moisture Control & Rolling</li>
            <li class="flex justify-center"><span class="yellow-bullet"></span> Adherence to MoRTH & IRC Guidelines</li>
            <li class="flex justify-center"><span class="yellow-bullet"></span> On-Time Execution with Quality Testing</li>
        </ul>
    </div>
</section>


<!-- ========================= CONTACT ========================= -->
<section class="py-20 bg-yellow-800 text-white text-center">
    <div class="container mx-auto px-4 max-w-3xl">
        <h2 class="text-2xl md:text-3xl font-bold mb-3">Need GSB or WMM Laying Services?</h2>
        <p class="text-white/90 mb-6">
            We ensure precision, durability, and professional execution for all types of road projects.
        </p>

        <a href="/contact" class="bg-white text-yellow-800 px-7 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
            Contact Us
        </a>
    </div>
</section>

@endsection
