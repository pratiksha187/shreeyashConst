@extends('layouts.app')

@section('title', 'Precast Compound Walls | Readymade Boundary Wall Supplier – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Looking for precast compound wall near me? Shreeyash Construction provides durable, affordable readymade compound walls across Maharashtra. Quick install & best price!">
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
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Precast Compound Walls</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">
                    Fast, Durable & Cost-Effective Boundary Solutions
                </p>
                <div class="bg-white/10 rounded-lg p-6 inline-block">
                    <p class="opacity-90">
                        Shreeyash Construction offers high-quality precast compound walls for industrial, residential, and commercial applications across Maharashtra. These readymade compound walls are factory-manufactured using high-grade concrete and steel, ensuring faster installation, uniform finish, and long-lasting performance.
                        Whether you're securing an industrial plot, housing society, warehouse, or agricultural land, our precast boundary wall systems provide the ideal alternative to conventional masonry walls — saving both time and cost.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Precast Compound Walls -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Why Choose Precast Compound Walls?</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
                <li>Quick Installation: Installed within hours, no need for prolonged site work</li>
                <li>Cost-Effective: Saves up to 40% over traditional construction</li>
                <li>Strong & Durable: Reinforced concrete ensures a life span of 20+ years</li>
                <li>Portable & Reusable: Panels can be relocated or extended easily</li>
                <li>Clean Finish: Factory finish with optional painting or texturing</li>
            </ul>
        </div>
    </section>

    <!-- Technical Specifications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Technical Specifications</h2>
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
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Panel Size</td><td class="py-3 px-4">2100 mm × 300 mm × 50 mm (customizable)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Pillar Height</td><td class="py-3 px-4">7 ft to 12 ft RCC Posts</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Concrete Grade</td><td class="py-3 px-4">M25 or higher</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Reinforcement</td><td class="py-3 px-4">3 to 5 high-tensile steel bars (8 mm – 10 mm)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Depth</td><td class="py-3 px-4">450 mm to 600 mm (depending on height)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Panel Installation</td><td class="py-3 px-4">Slotted into pre-fixed RCC columns</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Finish</td><td class="py-3 px-4">Smooth grey / painted / textured (on request)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Wind Load Tolerance</td><td class="py-3 px-4">As per IS 875 standard for wind zones</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Types of Readymade Compound Walls -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Types of Readymade Compound Walls We Provide</h2>
                <div class="section-underline"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Industrial Precast Boundary Wall</h3>
                        <p class="text-gray-700">Suitable for factories, warehouses, and MIDC zones</p>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Residential Readymade Wall</h3>
                        <p class="text-gray-700">Ideal for plots, bungalows, and housing societies</p>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Commercial & Institutional Walls</h3>
                        <p class="text-gray-700">Used for schools, hospitals, showrooms, and godowns</p>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Custom Precast Compound Walls</h3>
                        <p class="text-gray-700">Designed as per architectural elevation or branding needs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases & Applications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Use Cases & Applications</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Factory & warehouse fencing</li>
                <li>Real estate project boundaries</li>
                <li>Farmhouses & agricultural land</li>
                <li>Parking lots, utility zones & transit yards</li>
                <li>Temporary and permanent site security</li>
            </ul>
        </div>
    </section>

    <!-- Service Areas -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Looking for “Precast Compound Wall Near Me”?</h2>
                <div class="section-underline"></div>
            </div>
            <p class="text-gray-700 max-w-4xl mx-auto text-center">
                We provide readymade compound wall installation services across:
                <br>
                <strong>Pune, Mumbai, Navi Mumbai, Raigad</strong> |
                <strong>Khopoli, Khalapur, Pen, Panvel</strong> |
                <strong>Nagpur, Nashik, Aurangabad, Satara & nearby regions</strong>
            </p>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Readymade Compound Wall Price Range</h2>
                <div class="section-underline"></div>
            </div>
            <p class="text-gray-700 text-center">
                Our readymade boundary wall pricing varies based on wall height, finish, and quantity.<br>
                <strong>Starting from ₹80 to ₹120 per sq. ft.</strong> (including material and installation)
            </p>
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
                <li>Use of ISI-grade materials and certified suppliers</li>
                <li>Trained manpower and timely delivery</li>
                <li>Custom design, color & height options available</li>
                <li>Strong presence across Maharashtra</li>
            </ul>
        </div>
    </section>
@endsection
