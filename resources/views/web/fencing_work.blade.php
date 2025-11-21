@extends('layouts.app')

@section('title', 'Fencing Work Services | Construction & Site Fencing – Shreeyash Construction')

@section('content')

<meta charset="UTF-8">
<meta name="description" content="Professional fencing work including chain link, barbed wire, MS frame fencing, wrought iron gates & temporary construction fencing across Maharashtra.">

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }
    .brand { color: #1c2c3e; }    /* Dark Navy */
    .accent { color: #edc33bff; }   /* Orange */
    .card { @apply bg-white rounded-xl shadow-md hover:shadow-xl transition p-6; }
    .underline { @apply w-20 h-1 bg-orange-500 mx-auto mt-3 mb-6; }
</style>

<!-- HERO -->
<section class="relative bg-[url('/storage/logo/header/fenceheader.jpg')] bg-cover bg-center h-[420px]">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="container mx-auto px-6 h-full flex items-center justify-center relative">
        <div class="text-center text-white max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Fencing Work Services</h1>
            <p class="text-lg md:text-xl opacity-90">
                Secure • Durable • Professional Boundary Solutions
            </p>
        </div>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="">
            <p class="text-gray-700 leading-relaxed ">
                Shreeyash Construction provides reliable and long-lasting <strong>industrial, residential, commercial, and site fencing</strong> across Maharashtra.
                With over <strong>20 years of experience</strong>, our fencing solutions are built for strength, security, and long-term protection.
            </p>
            <p class="text-gray-700 leading-relaxed  mt-4">
                Whether you need permanent fencing, plot protection, or temporary construction fencing, we handle everything from
                <strong>material supply to installation and repair</strong>.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        
        <!-- Section Heading -->
        <h2 class="text-3xl font-bold text-center brand">Fencing Types & Technical Specifications</h2>
        <div class="underline"></div>

        <!-- TWO COLUMN LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-12">

            <!-- LEFT SIDE — TYPES OF FENCING -->
            <div>
                <h3 class="text-2xl font-semibold brand mb-6 text-center lg:text-left">
                    Types of Fencing We Offer
                </h3>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach([
                        ['Chain Link Fencing','Galvanized/PVC-coated • Best for industrial & plot fencing'],
                        ['Barbed Wire Fencing','Cost-effective • Mounted on RCC/MS poles'],
                        ['Angle Frame / MS Fencing','Strong & sturdy • Ideal for warehouses & institutions'],
                        ['Wrought Iron Fencing','Decorative + Durable • Gate fabrication & repair'],
                        ['Temporary Construction Fencing','Reusable site barricades • Lightweight & strong'],
                    ] as [$title,$desc])
                    <div class="card">
                        <h3 class="text-lg font-semibold mb-1 brand">{{ $title }}</h3>
                        <p class="text-gray-600 text-sm">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- RIGHT SIDE — TECHNICAL SPECS -->
            <div>
                <h3 class="text-2xl font-semibold brand mb-6 text-center lg:text-left">
                    Technical Specifications
                </h3>

                <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-yellow-500 text-white">
                                <th class="py-3 px-4 text-left">Item</th>
                                <th class="py-3 px-4 text-left">Specification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm">
                            <tr><td class="py-3 px-4 font-medium">Fence Height</td><td class="py-3 px-4">4 ft – 10 ft</td></tr>
                            <tr><td class="py-3 px-4 font-medium">Poles</td><td class="py-3 px-4">MS Angle • RCC Poles • GI Pipes</td></tr>
                            <tr><td class="py-3 px-4 font-medium">Pole Spacing</td><td class="py-3 px-4">6 – 8 feet</td></tr>
                            <tr><td class="py-3 px-4 font-medium">Wire Type</td><td class="py-3 px-4">Barbed • Chain Link • Concertina</td></tr>
                            <tr><td class="py-3 px-4 font-medium">Coating</td><td class="py-3 px-4">Hot-dip galvanized or painted</td></tr>
                            <tr><td class="py-3 px-4 font-medium">Gate Types</td><td class="py-3 px-4">Swing, Sliding, Collapsible Iron Gates</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- END GRID -->

    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        
        <!-- WHERE USED -->
        <h2 class="text-3xl font-bold text-center brand">Where Our Fencing is Used</h2>
        <div class="underline"></div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 max-w-4xl mx-auto">
            @foreach([
                'Construction & Building Site Fencing',
                'Residential & Bungalow Plots',
                'Factory & Industrial Premises',
                'Agricultural / Farm Fencing',
                'Schools & Institutional Campuses',
                'Temporary Event / Real Estate Fencing'
            ] as $item)
            <div class="p-4 bg-gray-100 rounded-lg text-center text-gray-700 shadow-sm hover:bg-gray-200 transition">
                {{ $item }}
            </div>
            @endforeach
        </div>

        <!-- DIVIDER -->
        <div class="my-12 w-full h-0.5 bg-gray-200"></div>

        <!-- SERVICE AREAS -->
        <h2 class="text-3xl font-bold text-center brand">Looking for “Fence Work Near Me”?</h2>
        <div class="underline"></div>

        <p class="text-center text-gray-700 max-w-4xl mx-auto mt-6 text-lg leading-relaxed">
            We provide professional fencing services across Maharashtra:<br>
            <strong class="brand">
                Khopoli • Pune • Panvel • Mumbai • Navi Mumbai • Nagpur • Nashik • Raigad • Aurangabad
            </strong>
        </p>

    </div>
</section>
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

            <!-- LEFT SIDE — PRICING -->
            <div class="bg-gray-50 p-8 rounded-xl shadow">
                <h2 class="text-3xl font-bold brand text-center md:text-left">Fence Work Pricing</h2>
                <div class="underline md:mx-0 mx-auto"></div>

                <p class="text-gray-700 mt-4 text-lg md:text-left text-center">
                    Pricing depends on material + height + length.
                    <br>
                    <strong class="text-yellow-600">Starts at ₹120 to ₹400 per running meter</strong>
                </p>
            </div>

            <!-- RIGHT SIDE — WHY SHREEYASH -->
            <div class="bg-gray-50 p-8 rounded-xl shadow">
                <h2 class="text-3xl font-bold brand text-center md:text-left">Why Choose Shreeyash Construction?</h2>
                <div class="underline md:mx-0 mx-auto"></div>

                <div class="grid grid-cols-1 gap-4 mt-6">
                    @foreach([
                        'Skilled team for small to large-scale fencing projects',
                        'Superior material quality & strong durability',
                        'On-time work with site safety compliance',
                        'Custom options for design, height & gates',
                        'Trusted by industries, townships & developers'
                    ] as $point)
                    <div class="flex items-start gap-3">
                        <span class="text-yellow-600 text-xl font-bold">✔</span>
                        <p class="text-gray-700">{{ $point }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>


@endsection
