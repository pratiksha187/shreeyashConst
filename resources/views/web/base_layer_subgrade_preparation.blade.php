@extends('layouts.app')

@section('title', 'Base Layer & Subgrade Preparation | Road Construction – Shreeyash Construction')

@push('meta')
<meta name="description" content="Shreeyash Construction provides engineered base layer and subgrade preparation for durable road construction across Maharashtra. GSB, WMM & grading works as per MoRTH & IRC standards.">
@endpush

@section('content')

<!-- GLOBAL STYLE -->
<style>
    body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }
    :root {
        --brand:#1c2c3e;
        --accent:#f25c05;
    }
    .sec-heading { font-size:2rem; font-weight:700; color:var(--brand); }
    .sec-line { width:70px; height:4px; background:var(--accent); margin:10px auto 25px; border-radius:50px; }
    .info-card { background:white; border-radius:12px; padding:24px; box-shadow:0 3px 12px rgba(0,0,0,0.08); }
    .icon-dot { width:10px; height:10px; background:var(--accent); border-radius:50%; margin-top:6px; margin-right:10px; }
    .spec-row:nth-child(odd){ background:#f1f4f7; }
</style>


<!-- ========================= HERO ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img src="/storage/logo/header/BaseLayer.png" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative container mx-auto h-full flex items-center justify-center px-6">
        <div class="bg-black/50 px-10 py-6 rounded-xl max-w-4xl text-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold">Base Layer & Subgrade Preparation</h1>
            <p class="text-gray-200 mt-2">The Foundation of Strong, Durable Roads</p>
        </div>
    </div>
</section>


<!-- ========================= OVERVIEW ========================= -->
<section class="py-20 bg-white text-center">
    <div class="container mx-auto px-4 max-w-8xl">

        <h2 class="sec-heading">Strong Foundations for Reliable Road Construction</h2>
        <div class="sec-line"></div>

        <p class="text-lg text-gray-800 leading-relaxed max-w-8xl mx-auto">
            Subgrade and base layer preparation form the core of every durable road. At Shreeyash Construction, 
            we deliver <strong>engineered foundation works</strong> designed for maximum strength, 
            long-term performance, and superior load-bearing capacity.
        </p>

        <div class="mt-8 info-card text-gray-700 text-left">
            <p class="mb-4">
                Our expert engineers ensure precise <strong>grading, leveling, moisture conditioning, and compaction</strong>,
                strictly following MoRTH & IRC standards. Whether it’s a highway, industrial road, township layout, 
                or factory pavement — strong foundations begin here.
            </p>
        </div>

    </div>
</section>


<!-- ========================= SUBGRADE + BASE LAYER ========================= -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">

            <!-- SUBGRADE -->
            <div>
                <h3 class="text-xl font-semibold text-[var(--brand)] mb-4">What is Subgrade Preparation?</h3>
                <p class="text-gray-700 mb-4">
                    Subgrade is the natural soil prepared to support the road layers above it. 
                    Its quality determines the entire road’s durability.
                </p>

                <ul class="space-y-3 text-gray-700">
                    <li class="flex"><span class="icon-dot"></span>Clearing & grubbing</li>
                    <li class="flex"><span class="icon-dot"></span>Excavation & soil filling</li>
                    <li class="flex"><span class="icon-dot"></span>Moisture conditioning (OMC)</li>
                    <li class="flex"><span class="icon-dot"></span>Compaction to required CBR</li>
                </ul>
            </div>

            <!-- BASE LAYER -->
            <div>
                <h3 class="text-xl font-semibold text-[var(--brand)] mb-4">What is Base Layer Preparation?</h3>
                <p class="text-gray-700 mb-4">
                    Base layers (GSB & WMM) provide strength, load distribution and support for asphalt or concrete surfacing.
                </p>

                <ul class="space-y-3 text-gray-700">
                    <li class="flex"><span class="icon-dot"></span>Precise leveling & grade control</li>
                    <li class="flex"><span class="icon-dot"></span>Uniform layer thickness</li>
                    <li class="flex"><span class="icon-dot"></span>Compaction using vibratory rollers</li>
                    <li class="flex"><span class="icon-dot"></span>Surface quality testing</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<!-- ========================= MATERIALS ========================= -->
<!-- <section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-6xl text-center">

        <h2 class="sec-heading">Materials Used in Base Construction</h2>
        <div class="sec-line"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">

            <div class="info-card">
                <h3 class="font-semibold text-lg text-[var(--brand)] mb-2">Granular Sub–Base (GSB)</h3>
                <p class="text-gray-700">Crushed aggregates, gravel, quarry dust — drainage-friendly and load-bearing.</p>
            </div>

            <div class="info-card">
                <h3 class="font-semibold text-lg text-[var(--brand)] mb-2">Wet Mix Macadam (WMM)</h3>
                <p class="text-gray-700">Graded aggregates mixed with water & mechanically laid using pavers.</p>
            </div>

        </div>

    </div>
</section> -->


<!-- ========================= TECHNICAL SPECS ========================= -->
<!-- <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-5xl text-center">

        <h2 class="sec-heading">Technical Specifications</h2>
        <div class="sec-line"></div>

        <div class="overflow-x-auto rounded-xl shadow bg-white mt-10">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-[var(--brand)] text-white">
                        <th class="py-3 px-4 text-left">Layer</th>
                        <th class="py-3 px-4 text-left">Material</th>
                        <th class="py-3 px-4 text-left">Thickness</th>
                        <th class="py-3 px-4 text-left">Compaction Standard</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">
                    <tr class="spec-row"><td class="py-3 px-4">Subgrade</td><td class="py-3 px-4">Natural soil / fill</td><td class="py-3 px-4">As per design</td><td class="py-3 px-4">97% MDD</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4">GSB</td><td class="py-3 px-4">Crushed aggregates</td><td class="py-3 px-4">150 – 200 mm</td><td class="py-3 px-4">98% MDD</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4">WMM</td><td class="py-3 px-4">Graded aggregates</td><td class="py-3 px-4">100 – 250 mm</td><td class="py-3 px-4">98% MDD (vibratory)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4">Tolerances</td><td class="py-3 px-4">Level: ±10mm</td><td class="py-3 px-4">Thickness: ±8mm</td><td class="py-3 px-4">Evenness: ≤12mm</td></tr>
                </tbody>
            </table>
        </div>

    </div>
</section> -->
<!-- ========================= MATERIALS + TECH SPECS (COMBINED) ========================= -->
<!-- ========================= MATERIALS + TECH SPECS (COMBINED) ========================= -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <h2 class="sec-heading text-center">Materials & Technical Specifications</h2>
        <div class="sec-line"></div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 mt-12">

            <!-- LEFT SIDE — MATERIALS -->
            <div>
                <h3 class="text-2xl font-semibold text-[var(--brand)] mb-5">
                    Materials Used in Base Construction
                </h3>

                <div class="space-y-6">
                    <div class="info-card">
                        <h4 class="font-semibold text-lg text-[var(--brand)] mb-2">Granular Sub–Base (GSB)</h4>
                        <p class="text-gray-700">Crushed aggregates, gravel, quarry dust — drainage-friendly and load-bearing.</p>
                    </div>

                    <div class="info-card">
                        <h4 class="font-semibold text-lg text-[var(--brand)] mb-2">Wet Mix Macadam (WMM)</h4>
                        <p class="text-gray-700">Well-graded aggregates mixed with water & mechanically laid using pavers.</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE — TECHNICAL TABLE -->
            <div>
                <h3 class="text-2xl font-semibold text-[var(--brand)] mb-5">Technical Specifications</h3>

                <div class="overflow-x-auto bg-white rounded-xl shadow">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4 text-left">Layer</th>
                                <th class="py-3 px-4 text-left">Material</th>
                                <th class="py-3 px-4 text-left">Thickness</th>
                                <th class="py-3 px-4 text-left">Compaction Standard</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-700">
                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Subgrade</td>
                                <td class="py-3 px-4">Natural soil / fill</td>
                                <td class="py-3 px-4">As per design</td>
                                <td class="py-3 px-4">97% MDD</td>
                            </tr>

                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">GSB</td>
                                <td class="py-3 px-4">Crushed aggregates</td>
                                <td class="py-3 px-4">150 – 200 mm</td>
                                <td class="py-3 px-4">98% MDD</td>
                            </tr>

                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">WMM</td>
                                <td class="py-3 px-4">Graded aggregates</td>
                                <td class="py-3 px-4">100 – 250 mm</td>
                                <td class="py-3 px-4">98% MDD (vibratory)</td>
                            </tr>

                            <tr class="spec-row">
                                <td class="py-3 px-4 font-medium">Tolerances</td>
                                <td class="py-3 px-4">Level: ±10mm</td>
                                <td class="py-3 px-4">Thickness: ±8mm</td>
                                <td class="py-3 px-4">Evenness: ≤12mm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- ========================= APPLICATIONS + WHY CHOOSE (MERGED) ========================= -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <h2 class="sec-heading text-center">Applications & Why Choose Shreeyash Construction?</h2>
        <div class="sec-line"></div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mt-14">

            <!-- LEFT : APPLICATIONS -->
            <div>
                <h3 class="text-2xl font-semibold text-[var(--brand)] mb-5">Applications</h3>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <span class="info-card text-sm font-medium">Highways</span>
                    <span class="info-card text-sm font-medium">Industrial Roads</span>
                    <span class="info-card text-sm font-medium">Townships</span>
                    <span class="info-card text-sm font-medium">Runways / Aprons</span>
                    <span class="info-card text-sm font-medium">Asphalt & Concrete Bases</span>
                </div>
            </div>

            <!-- RIGHT : WHY CHOOSE US -->
            <div>
                <h3 class="text-2xl font-semibold text-[var(--brand)] mb-5">Why Choose Shreeyash Construction?</h3>

                <ul class="text-gray-700 space-y-4 text-lg">
                    <li class="flex"><span class="icon-dot"></span>Specialized in GSB & WMM foundation works</li>
                    <li class="flex"><span class="icon-dot"></span>Use of modern graders, pavers & rollers</li>
                    <li class="flex"><span class="icon-dot"></span>Strict MoRTH & IRC compliance</li>
                    <li class="flex"><span class="icon-dot"></span>Accurate QC, density & level testing</li>
                    <li class="flex"><span class="icon-dot"></span>Timely execution with proven results</li>
                </ul>
            </div>

        </div>

    </div>
</section>


@endsection
