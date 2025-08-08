@extends('layouts.app')

@section('title', 'Factory Building Construction Services – Shreeyash Construction')

@section('content')
<meta charset="UTF-8">
<meta name="description" content="Shreeyash Construction provides turnkey civil work for factory buildings. From plan approval to execution, we deliver factory work jobs & custom factory building models.">
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

<!-- Hero Section -->
<section class="hero-pattern text-white py-20">
    <div class="container mx-auto px-4 md:px-6 lg:px-8 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Factory Building</h1>
        <p class="text-lg md:text-xl mb-8 opacity-90">Turnkey Civil Work for Factory Buildings in Maharashtra</p>
        <div class="bg-white/10 rounded-lg p-6 max-w-5xl mx-auto text-left">
            <p class="opacity-90">
                Shreeyash Construction is a trusted name in civil work building projects across Maharashtra, with specialized expertise in constructing durable and efficient factory buildings. We provide complete solutions from planning and structural design to execution and final finishing — all in compliance with industrial norms and local development authority regulations.
                Whether you're building a new industrial unit, expanding operations, or relocating, we handle every phase from plan approval to custom layouts and precision execution.
            </p>
        </div>
    </div>
</section>

<!-- Types of Factory Buildings -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Types of Factory Buildings We Construct</h2>
            <div class="section-underline"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Load-Bearing Factory Structures</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Economical for small-scale industries</li>
                    <li>Made using brick masonry and RCC slabs</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Steel Frame Structures (PEB or Hybrid)</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Ideal for fast-track industrial construction</li>
                    <li>Suitable for heavy machinery and warehousing</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Reinforced Concrete Frame Buildings</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Preferred where high load and thermal control are required</li>
                    <li>Better fire resistance and durability</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Factory Sheds with Office Blocks</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Integrated production units with admin zones</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Multi-Storey Factory Buildings</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Designed for urban and land-constrained industries</li>
                </ul>
            </div>
            <div class="card p-6">
                <h3 class="text-lg font-semibold mb-3">Factory Expansion & Retrofitting</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Vertical and lateral expansion of existing structures</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="section-title">Technical Specifications – Factory Building Construction</h2>
            <div class="section-underline"></div>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-yellow-600 text-white">
                        <th class="py-3 px-4 text-left">Specification Category</th>
                        <th class="py-3 px-4 text-left">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Structure Type</td><td class="py-3 px-4">RCC Frame / Steel Frame / Hybrid</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Foundation Type</td><td class="py-3 px-4">Isolated / Raft / Pile (as per soil)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Height</td><td class="py-3 px-4">6 to 12 meters (customizable)</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Roofing</td><td class="py-3 px-4">Color Coated GI Sheets / RCC / Polycarbonate</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Cladding</td><td class="py-3 px-4">Cement Sheets / PUF Panels / Steel Cladding</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Flooring</td><td class="py-3 px-4">Trimix / VDF / Epoxy Finish</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Electrical & Plumbing</td><td class="py-3 px-4">As per industrial load & utility plan</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Mezzanine Floors</td><td class="py-3 px-4">Optional – Steel Deck or RCC</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Ventilation</td><td class="py-3 px-4">Natural Louvers / Ridge Vents / Mechanical</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Load-Bearing Capacity</td><td class="py-3 px-4">As per IS 456 & IS 875 Codes</td></tr>
                    <tr class="spec-row"><td class="py-3 px-4 font-medium">Fire Safety</td><td class="py-3 px-4">Hydrant points, extinguishers, NBC norms</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Plan Approval Support -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8 text-center">
        <h2 class="section-title">Factory Building Plan Approval Support</h2>
        <div class="section-underline"></div>
        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
            <li>MIDC, MMRDA, PMRDA, or local authority approvals</li>
            <li>Fire Department NOCs</li>
            <li>Environmental clearances (if applicable)</li>
            <li>Structural safety and stability certifications</li>
        </ul>
        <p class="mt-6 text-gray-700 max-w-4xl mx-auto">
            We ensure compliance with Factory Act, Industrial Safety Regulations, and GRIHA/Green Building norms if required.
        </p>
    </div>
</section>

<!-- Why Choose -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8 text-center">
        <h2 class="section-title">Why Choose Shreeyash Construction for Factory Work Jobs?</h2>
        <div class="section-underline"></div>
        <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
            <li>Over 20 years of experience in industrial-grade construction</li>
            <li>End-to-end support from layout to occupancy</li>
            <li>Compliance with IS Codes, MoRTH, NBC, and local bylaws</li>
            <li>Cost-effective, timely, and high-quality execution</li>
        </ul>
    </div>
</section>
@endsection
