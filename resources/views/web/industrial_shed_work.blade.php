@extends('layouts.app')

@section('title', 'Industrial Shed Work – Steel Shed Contractors in Maharashtra | Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Shreeyash Construction offers expert industrial shed work including PEB & workshop sheds. Trusted industrial shed contractors with custom design & specifications.">
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
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Industrial Shed Work</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">Trusted Industrial Shed Contractors in Maharashtra</p>
            <div class="bg-white/10 rounded-lg p-6 inline-block text-left">
                <p class="opacity-90">
                    Shreeyash Construction is a leading name in industrial shed work across Maharashtra, delivering reliable, durable, and custom-built steel structures for manufacturing, warehousing, workshops, and commercial units. As experienced industrial shed contractors, we specialize in end-to-end services from design and fabrication to erection and finishing.
                    Whether you're planning an industrial workshop shed, commercial workshop shed, or exploring working shed ideas, we offer versatile, cost-effective, and long-lasting solutions tailored to your industry needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Types of Industrial Sheds -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Types of Industrial Sheds We Construct</h2>
            <div class="section-underline"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">PEB (Pre-Engineered Building) Sheds</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Fast installation</li>
                    <li>Custom design</li>
                    <li>Low maintenance</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Conventional Steel Sheds</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Suitable for heavy-duty operations</li>
                    <li>Built with hot-rolled steel sections</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Industrial Workshop Sheds</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Ideal for repair, maintenance & production</li>
                    <li>Can include integrated office spaces</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Commercial Workshop Sheds</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Showroom-cum-workshop or service center layouts</li>
                    <li>Suitable for automobile & retail industries</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Warehouse Sheds</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Optimized storage height & clear span</li>
                    <li>Fire-resistant design options</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Fabricated Sheds for Agriculture & Cold Storage</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Ventilation, insulation & humidity control</li>
                </ul>
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
                        <th class="py-3 px-4 text-left">Component</th>
                        <th class="py-3 px-4 text-left">Specification</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Structure Type</td><td class="py-3 px-4">PEB / Steel Frame</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Height (Industrial Shed Height)</td><td class="py-3 px-4">6m to 15m (customizable)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Roofing Material</td><td class="py-3 px-4">GI Sheets / Color Coated Sheets / Polycarbonate Skylights</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Cladding</td><td class="py-3 px-4">Profile Sheets / Sandwich Panels</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Type</td><td class="py-3 px-4">RCC Footings / Raft / Isolated Footings</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Bay Spacing</td><td class="py-3 px-4">5m to 8m</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Clear Span Width</td><td class="py-3 px-4">Up to 30m (without internal columns)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">EOT Crane Provisions</td><td class="py-3 px-4">Optional – based on load requirements</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Insulation</td><td class="py-3 px-4">Rockwool / Glasswool (Optional)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Ventilation</td><td class="py-3 px-4">Ridge Ventilators / Louvers / Turbo Vents</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Flooring</td><td class="py-3 px-4">Trimix / VDF / Epoxy Floor (optional)</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Industrial Shed Height Table -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Industrial Shed Height — Typical Ranges</h2>
            <div class="section-underline"></div>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-yellow-600 text-white">
                        <th class="py-3 px-4 text-left">Type of Industrial Shed</th>
                        <th class="py-3 px-4 text-left">Typical Height Range (meters)</th>
                        <th class="py-3 px-4 text-left">Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Light Industrial Shed</td><td class="py-3 px-4">4.5 – 6</td><td class="py-3 px-4">Workshops, small-scale manufacturing, packaging</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Standard Warehouse/Storage Shed</td><td class="py-3 px-4">6 – 9</td><td class="py-3 px-4">General storage, medium-scale logistics</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Automotive/Assembly Line Shed</td><td class="py-3 px-4">6 – 10</td><td class="py-3 px-4">Car workshops, assembly lines, light machinery</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Heavy Industrial Shed</td><td class="py-3 px-4">9 – 12</td><td class="py-3 px-4">Foundries, heavy equipment, large-scale production</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Container-Handling/Logistics Shed</td><td class="py-3 px-4">10 – 12</td><td class="py-3 px-4">Forklift/container handling, logistics hubs</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Crane-Operated Industrial Shed</td><td class="py-3 px-4">12 – 18+</td><td class="py-3 px-4">Facilities requiring EOT cranes or overhead gantries</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Aircraft Hangars / Shipbuilding</td><td class="py-3 px-4">15 – 25+</td><td class="py-3 px-4">Very large clearances and spans</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Working Shed Ideas -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Working Shed Ideas Tailored to Industry</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
            <li>Multi-bay Workshop Sheds for parallel operations</li>
            <li>Extended Height Sheds to accommodate cranes or tall machinery</li>
            <li>Skylight-Integrated Sheds for natural lighting and energy savings</li>
            <li>Mezzanine Floor Sheds for office/storage combo</li>
            <li>Modular Shed Extensions for future expansion</li>
        </ul>
    </div>
</section>

<!-- Process -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Our Industrial Shed Work Process</h2>
            <div class="section-underline"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card p-6"><ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Site Inspection & Soil Testing</li>
                <li>Design & Structural Planning (PEB/Custom)</li>
            </ul></div>
            <div class="card p-6"><ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Fabrication & Component Delivery</li>
                <li>Shed Erection with Heavy Machinery</li>
            </ul></div>
            <div class="card p-6"><ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Roofing, Cladding & Finishing</li>
                <li>Quality Checks & Project Handover</li>
            </ul></div>
        </div>
    </div>
</section>

<!-- Why Choose -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Why Shreeyash Construction for Industrial Shed Work?</h2>
            <div class="section-underline"></div>
        </div>
        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
            <li>Over 20 years of civil and structural experience</li>
            <li>In-house design and fabrication capabilities</li>
            <li>Projects delivered on-time and within budget</li>
            <li>Strong understanding of shed height, airflow, load specs & usage</li>
            <li>Customized solutions for Manufacturing, FMCG, Logistics, Textile, Auto</li>
        </ul>
    </div>
</section>
@endsection
