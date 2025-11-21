@extends('layouts.app')

@section('title', 'Cement Concrete Road Construction | Shreeyash Construction')

@push('meta')
<meta name="description" content="Shreeyash Construction executes cement concrete (CC/RCC) road construction across Maharashtra — rigid pavements, townships, highways, and industrial estates adhering to MoRTH & IRC standards.">
@endpush

@section('content')

<style>
    body { font-family: 'Poppins', sans-serif; }
</style>

<!-- ========================= HERO ========================= -->
<section class="relative h-[420px] w-full overflow-hidden">
    <img src="/storage/logo/header/Cement.png"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative container mx-auto h-full flex items-center justify-center px-6">
        <div class="bg-black/50 px-8 py-6 rounded-xl max-w-4xl text-center shadow-lg">
            <h1 class="text-white text-3xl md:text-5xl font-bold leading-snug">
                Cement Concrete Road Construction Contractor in Maharashtra
            </h1>
        </div>
    </div>
</section>

<!-- ========================= OVERVIEW ========================= -->
<section class="py-14 bg-white">
    <div class="container mx-auto px-6 max-w-5xl text-center">

        <p class="text-gray-700 text-lg leading-relaxed mb-6">
            Shreeyash Construction is a trusted <strong>concrete road construction company in India</strong>,
            delivering high-performance <strong>RCC roads</strong> across Maharashtra for townships, industrial parks,
            SEZs, and highways. We execute <strong>rigid pavement construction</strong> using inset/offset pavers,
            strictly as per <strong>MoRTH & IRC standards</strong>.
        </p>

        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mx-auto max-w-4xl shadow">
            <p class="text-gray-800 leading-relaxed">
                Looking for “concrete road contractors near me”?  
                As a Government-registered EPC contractor, every kilometre we pave follows
                state-level QA/QC benchmarks with assured durability.
            </p>
        </div>

    </div>
</section>

<!-- ========================= WHY CHOOSE ========================= -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">
            Why Choose Cement Concrete Roads?
        </h2>
        <div class="w-20 h-1 bg-yellow-600 mx-auto mt-3 mb-10"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach([
                ['High Durability','Typical design life of 20–30 years, far exceeding asphalt roads.','fa-shield-halved'],
                ['Low Lifecycle Cost','Minimal maintenance, no frequent resurfacing required.','fa-coins'],
                ['Superior Load Capacity','Ideal for townships, highways & industrial traffic.','fa-truck'],
                ['Monsoon-Friendly','Performs exceptionally well in heavy rains across Maharashtra.','fa-cloud-rain'],
            ] as $item)

            <div class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <div class="text-yellow-700 text-4xl mb-4">
                    <i class="fa-solid {{ $item[2] }}"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $item[0] }}</h3>
                <p class="text-gray-600">{{ $item[1] }}</p>
            </div>

            @endforeach
        </div>

    </div>
</section>

<!-- ========================= SERVICES ========================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">
            Our Cement Concrete Road Services
        </h2>
        <div class="w-20 h-1 bg-yellow-600 mx-auto mt-3 mb-10"></div>

        @php
        $services = [
            ['RCC Pavement Construction','Reinforced concrete pavements for long-life durability.'],
            ['Rigid Pavement Roads','Urban & rural rigid pavements for diverse terrains.'],
            ['Industrial Concrete Roadways','Heavy-duty RCC roads for industrial loads.'],
            ['Municipal CC Road Packages','Complete CC road packages with drainage.'],
            ['Highway CC Projects','National & State highway rigid pavement works.'],
            ['Township & Society Roads','Internal CC roads for SEZs & townships.'],
            ['Asphalt-to-CC Upgrades','Widening & conversion from asphalt to concrete.'],
            ['Paver Block & Drainage','Kerbs, pavers & drainage integration.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($services as $s)
            <div class="rounded-xl overflow-hidden shadow bg-gray-50 hover:shadow-xl transition">
                <div class="h-2 bg-yellow-600"></div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-yellow-200 flex items-center justify-center rounded-full mb-4">
                        <i class="fa-solid fa-road text-yellow-700"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ $s[0] }}</h3>
                    <p class="text-gray-600">{{ $s[1] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- ========================= MAHARASHTRA FOOTPRINT ========================= -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">
            Service Footprint Across Maharashtra
        </h2>
        <div class="w-20 h-1 bg-yellow-600 mx-auto mt-3 mb-10"></div>

        <p class="text-center text-gray-600 mb-10 max-w-3xl mx-auto">
            We mobilise quickly for township, highway, industrial & municipal CC road works across Maharashtra.
        </p>

        @php
        $cities = [
            'Mumbai','Pune','Nagpur','Nashik','Aurangabad',
            'Solapur','Kolhapur','Sangli','Jalgaon','Ahmednagar',
            'Satara','Latur','Amravati','Nanded','All Districts'
        ];
        @endphp

        <div class="bg-white p-8 rounded-xl shadow-lg">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach($cities as $c)
                <div class="bg-gray-100 p-3 rounded-lg text-center font-medium text-gray-700 hover:bg-yellow-50 shadow-sm transition">
                    {{ $c }}
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- ========================= TECHNICAL SPECS + MACHINERY ========================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-7xl">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">
            Technical Specifications & Machinery Capabilities
        </h2>
        <div class="w-20 h-1 bg-yellow-600 mx-auto mt-3 mb-10"></div>

        <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
            Designed and executed using high-performance concrete, strict QA/QC protocols, and modern construction equipment.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT — TECH TABLE -->
            <div class="bg-gray-50 rounded-xl shadow overflow-hidden">
                <h3 class="text-xl font-semibold text-gray-900 p-5 border-b bg-white">
                    Technical Specifications & Standards
                </h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-left">
                        <thead>
                            <tr class="bg-yellow-600 text-white">
                                <th class="py-3 px-4">Parameter</th>
                                <th class="py-3 px-4">Specification</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">

                            @foreach([
                                ['Design Code','IRC:58, IRC:15, IRC:SP-62, MoRTH'],
                                ['Compressive Strength','30–40 MPa (IS 456:2000)'],
                                ['Slab Thickness','150–300 mm (traffic dependent)'],
                                ['Concrete Mix','M30–M40 (IS 10262, fly-ash optional)'],
                                ['Reinforcement','Fe500 / Fe550 mesh or bars'],
                                ['Surface Finish','Broom / Trowel / Texture Roller'],
                                ['Curing','14–28 days (pond/membrane)'],
                                ['Expansion Joints','4.5–5 m spacing, pre-moulded filler'],
                                ['Dowel Bars','25–32 mm @ 300 mm c/c'],
                                ['Sub-Base & Base','GSB + DLC'],
                            ] as $spec)

                            <tr class="border-b border-gray-200">
                                <td class="py-3 px-4 font-medium">{{ $spec[0] }}</td>
                                <td class="py-3 px-4">{{ $spec[1] }}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT — MACHINERY -->
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-6">
                    Plant, Machinery & QA Capabilities
                </h3>

                @php
                $equip = [
                    ['Slip-Form & Fixed Form Pavers','Precision paving for CC roads.','fa-ruler-combined'],
                    ['30–60 m³/hr Batching Plants','On-site concrete production.','fa-industry'],
                    ['Transit Mixers & Boom Placers','Efficient placement of concrete.','fa-truck'],
                    ['Vibratory Rollers & Compactors','Proper sub-grade/base compaction.','fa-compass-drafting'],
                    ['VDF Machines & Joint Saws','Joint cutting & finishing.','fa-grip-lines'],
                    ['ISO-Certified QA/QC Labs','On-site cube testing & QA protocols.','fa-check-double'],
                ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    @foreach($equip as $e)
                    <div class="flex items-start bg-gray-50 p-5 rounded-xl shadow hover:shadow-xl transition">
                        <div class="bg-yellow-100 p-3 rounded-full mr-4">
                            <i class="fa-solid {{ $e[2] }} text-yellow-700 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">{{ $e[0] }}</h4>
                            <p class="text-gray-600 text-sm">{{ $e[1] }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================= PROJECTS ========================= -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">
            Recent Signature Projects
        </h2>
        <div class="w-20 h-1 bg-yellow-600 mx-auto mt-3 mb-10"></div>

        @php
        $projects = [
            ['Industrial CC Road – Nashik MIDC','Completed','Heavy-duty RCC road for industrial traffic.'],
            ['Smart City CC Road – Kolhapur','Completed','Urban CC road with drainage integration.'],
            ['Ahmednagar SH Conversion to CC','Completed','Highway asphalt-to-concrete conversion.'],
            ['PMGSY Rural Road – Latur','Completed','Durable rural CC roads under PMGSY.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($projects as $p)
            <div class="rounded-xl overflow-hidden shadow bg-white hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="h-44 bg-[#1c2c3e] flex items-center justify-center">
                    <i class="fa-solid fa-road text-white text-4xl opacity-30"></i>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-lg">{{ $p[0] }}</h3>
                        <span class="text-xs bg-blue-100 text-yellow-800 px-2 py-1 rounded">{{ $p[1] }}</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{ $p[2] }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

@endsection
