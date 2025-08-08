@extends('layouts.app')

@section('title', 'Fencing Work Services | Building Site & Construction Fencing – Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction offers expert fencing work including building site fencing, wrought iron gate repair & fence installation near you. Durable & cost-effective fencing.">
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
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Fencing Work</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">
                    Secure Your Property with Expert Fencing Solutions
                </p>
                <div class="bg-white/10 rounded-lg p-6 inline-block">
                    <p class="opacity-90">
                        Shreeyash Construction provides professional and reliable fencing work for industrial plots, residential layouts, commercial spaces, and construction site fencing requirements. With over 20 years of experience in civil and boundary development, we deliver fencing solutions that combine durability, functionality, and aesthetic value.
                        Whether it's permanent fencing for security or temporary building site fencing, we offer end-to-end services from material supply to installation and repair.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Fencing -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Types of Fencing We Offer</h2>
                <div class="section-underline"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Chain Link Fencing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Galvanized or PVC-coated</li>
                            <li>Ideal for plot demarcation and industrial fencing</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Barbed Wire Fencing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Mounted on RCC or MS poles</li>
                            <li>Cost-effective and quick to install</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Angle Frame or MS Fencing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Stronger structure with longer lifespan</li>
                            <li>Suitable for institutional and warehouse premises</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Wrought Iron Fencing & Gate Work</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Decorative yet sturdy</li>
                            <li>Includes fabrication and wrought iron gate repair</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-3">Temporary Site Fencing</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Movable panels for construction site fencing</li>
                            <li>Reusable and ideal for short-term safety enclosures</li>
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
                <h2 class="section-title">Technical Specifications</h2>
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
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Fence Height</td><td class="py-3 px-4">4 ft to 10 ft (customizable)</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Pole Type</td><td class="py-3 px-4">MS Angle / RCC / GI Pipe / T-iron</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Pole Spacing</td><td class="py-3 px-4">6 to 8 feet</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Wire Type</td><td class="py-3 px-4">Barbed / Chain Link / Concertina</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Coating</td><td class="py-3 px-4">Hot-dip galvanized or painted</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Gate Types</td><td class="py-3 px-4">Swing, sliding, or collapsible iron gates</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Depth</td><td class="py-3 px-4">400 mm to 600 mm for pole fixing</td></tr>
                        <tr class="spec-row"><td class="py-3 px-4 font-medium">Accessories</td><td class="py-3 px-4">Tension wire, clamps, turnbuckles, etc.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Where Used -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Where Our Fencing Work is Used</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Construction & Building Site Fencing</li>
                <li>Residential & bungalow plots</li>
                <li>Factory premises and industrial zones</li>
                <li>Agricultural and farm boundaries</li>
                <li>Schools, hospitals & institutional campuses</li>
                <li>Temporary fencing for events and real estate layouts</li>
            </ul>
        </div>
    </section>

    <!-- Service Areas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Looking for "Fence Work Near Me"?</h2>
                <div class="section-underline"></div>
            </div>
            <p class="text-gray-700 text-center max-w-4xl mx-auto">
                We serve across Maharashtra, including:
                📌 Khopoli | Panvel | Pune | Mumbai | Navi Mumbai | Nagpur | Nashik | Raigad | Aurangabad
            </p>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Additional Services</h2>
                <div class="section-underline"></div>
            </div>
            <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
                <li>Fence Works Maintenance & Repairs</li>
                <li>Wrought Iron Gate Repair and hinge replacement</li>
                <li>Anti-rust painting and repainting of fencing structures</li>
                <li>Custom gate fabrication with branding or logos</li>
            </ul>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="section-title">Fence Work Pricing</h2>
                <div class="section-underline"></div>
            </div>
            <p class="text-gray-700 text-center">
                Fence work prices vary based on materials (MS, RCC, chain link), fence height, and length of coverage.<br>
                <strong>Rates start from ₹120 to ₹400 per running meter</strong> depending on type and specification.
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
                <li>Skilled team for small to large-scale fencing projects</li>
                <li>Quality materials and robust installation</li>
                <li>On-time completion with site safety compliance</li>
                <li>Custom designs and long-term durability</li>
                <li>Strong client base in industrial and infrastructure sectors</li>
            </ul>
        </div>
    </section>
@endsection
