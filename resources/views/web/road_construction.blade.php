@extends('layouts.app')

@section('title', 'Top Road Contractors in Maharashtra – Shreeyash Construction')

@section('meta')
<meta name="title" content="Top Road Contractors in Maharashtra – Shreeyash Construction">
<meta name="description" content="Expert road construction services across Maharashtra. Shreeyash Construction delivers quality roads with durability and precision.">
@endsection

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<style>
    :root {
        --primary: #b8994c;
        --dark: #333333;
        --light: #f5f5f5;
    }

    body {
        box-sizing: border-box;
        color: var(--dark);
        background-color: var(--light);
    }

    .container-custom {
        max-width: 1250px;
        margin-left: auto;
        margin-right: auto;
    }

    .section-spacing {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .btn {
        padding: 12px 26px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 16px;
        display: inline-block;
        transition: 0.3s ease;
    }

    .btn.primary {
        background: var(--primary);
        color: #fff;
    }

    .btn.primary:hover {
        background: #9e8240;
    }

    .btn.outline {
        border: 2px solid #fff;
        color: #fff;
    }

    .btn.outline:hover {
        background: rgba(255,255,255,0.2);
    }

    .service-card {
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card img {
        height: 200px;
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    footer {
        background-color: var(--dark);
        color: white;
    }
</style>

<!-- ================= HERO SECTION ================= -->
<header class="relative text-white py-24 bg-center bg-cover"
        style="background-image: url('{{ asset('storage/logo/main/roadconst.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

    <div class="relative container-custom px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Top-rated Road Construction Civil Work Systems in Maharashtra</h1>
        <p class="text-xl mb-1">Road Construction Experts in Maharashtra</p>
        <p class="text-lg opacity-90 mb-8">Building Strong Roads. Delivering Trusted Quality.</p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="#contact" class="btn primary">Get a Fast Quote</a>
            <a href="tel:+919326216153" class="btn outline">Call +91 93262 16153</a>
        </div>
    </div>
</header>

<!-- ================= SERVICES ================= -->
<section class="section-spacing bg-gray-50">
    <div class="container-custom px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">🏗️ Our Road Construction Services</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- ITEM LOOP -->
            @php
            $services = [
                ['title'=>'Asphalt / Bitumen Road Construction','img'=>'roadconst.jpg','desc'=>'Complete asphalt road solutions with high-quality bitumen & advanced compaction.','link'=>route('asphalt_paving')],
                ['title'=>'Cement Concrete (CC) Road Construction','img'=>'header/Cement.png','desc'=>'High-strength M30+ CC roads with laser screed leveling.','link'=>route('inset_concrete_paving')],
                ['title'=>'Asphalt Compaction Services','img'=>'header/Compaction.png','desc'=>'PTRs, tandem rollers & pneumatic rollers for uniform density.','link'=>route('asphalt_compaction')],
                ['title'=>'GSB & WMM Laying','img'=>'header/GSB.png','desc'=>'Expert GSB & WMM laying with precision thickness control.','link'=>route('gsb_wmm_laying')],
                ['title'=>'Base Layer & Subgrade Preparation','img'=>'header/BaseLayer.png','desc'=>'Soil stabilization & subgrade preparation as per MORTH.','link'=>route('base_layer_subgrade_preparation')],
            ];
            @endphp

            @foreach ($services as $s)
            <div class="service-card bg-white p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('storage/logo/'.$s['img']) }}" alt="{{ $s['title'] }}">
                <h3 class="text-xl font-bold mt-4 mb-3">{{ $s['title'] }}</h3>
                <p class="text-gray-600 mb-3">{{ $s['desc'] }}</p>
                <a href="{{ $s['link'] }}"
                   class="mt-auto inline-block bg-[var(--primary)] text-white font-semibold px-5 py-2 rounded-lg hover:bg-[#9e8240]">
                    Learn More →
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<!-- <section class="section-spacing bg-white">
    <div class="container-custom px-6">
        <div class="bg-white shadow-md p-10 rounded-2xl border">
            <h3 class="text-2xl font-semibold text-center text-[var(--primary)] mb-6">Why Choose Us</h3>

            <div class="flex flex-wrap justify-center gap-6 text-gray-700 text-lg font-medium">
                @foreach ([
                    'MORTH / IRC Compliant',
                    'Experienced Team',
                    'Modern Equipment',
                    'Quality Control',
                    'Timely Delivery',
                    'Serving Maharashtra'
                ] as $w)
                <span class="flex items-center gap-2">
                    <span class="text-[var(--primary)] text-xl">✔</span> {{ $w }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="section-spacing bg-white">
    <div class="container-custom px-6">

        <div class="bg-gray-50 shadow-lg p-12 rounded-3xl border border-gray-200">

            <h3 class="text-3xl font-bold text-center text-[var(--primary)] mb-10">
                Why Choose Us
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ([
                    'MORTH / IRC Compliant',
                    'Experienced Team',
                    'Modern Equipment',
                    'Strict Quality Control',
                    'On-Time Delivery',
                    'Serving All Maharashtra'
                ] as $w)
                <div class="flex items-center gap-4 bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="bg-[var(--primary)] text-white w-12 h-12 flex items-center justify-center rounded-full text-xl font-bold shadow-md">
                        ✔
                    </div>
                    <span class="text-lg font-semibold text-gray-700 leading-tight">
                        {{ $w }}
                    </span>
                </div>
                @endforeach

            </div>

        </div>

    </div>
</section> -->

<!-- ================= COVERAGE ================= -->
<!-- <section class="section-spacing bg-gray-50">
    <div class="container-custom px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">📍 We Deliver Projects Across Maharashtra</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            @foreach (['Pune','Mumbai','Thane','Raigad','Navi Mumbai','Konkan Region','Western Maharashtra'] as $city)
            <div class="bg-blue-50 p-4 rounded-lg font-semibold">{{ $city }}</div>
            @endforeach
        </div>

        <p class="text-gray-600 max-w-3xl mx-auto">
            Whether it's highway development, municipal work, or industrial road construction, our
            roads are known for strength, smoothness, and long-term durability.
        </p>
    </div>
</section> -->

<!-- ================= ABOUT ================= -->
<!-- <section class="section-spacing bg-white">
    <div class="container-custom px-6 text-center max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">🧱 About Shreeyash Construction</h2>
        <p class="text-gray-600 text-lg mb-4">
            At Shreeyash Construction, we believe quality roads connect communities and build progress.
        </p>
        <p class="text-gray-600">
            Our focus is on precision engineering, high performance, and sustainable practices —
            making us a trusted name in road construction across Maharashtra.
        </p>
    </div>
</section> -->
<!-- ================= COVERAGE + ABOUT (Merged Section) ================= -->
<!-- ================= MERGED: COVERAGE + ABOUT + WHY CHOOSE US ================= -->
<section class="section-spacing bg-white">
    <div class="container-custom px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- LEFT BLOCK : COVERAGE -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">📍 We Deliver Projects Across Maharashtra</h2>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    @foreach (['Pune','Mumbai','Thane','Raigad','Navi Mumbai','Konkan Region','Western Maharashtra'] as $city)
                    <div class="bg-blue-50 p-4 rounded-lg font-semibold text-center shadow-sm">
                        {{ $city }}
                    </div>
                    @endforeach
                </div>

                <p class="text-gray-600 leading-relaxed">
                    From urban highways to rural development, we deliver durable, high-performance asphalt and
                    concrete roads that stand the test of time across Maharashtra.
                </p>
            </div>

            <!-- RIGHT BLOCK : ABOUT + WHY CHOOSE US -->
            <div class="bg-gray-50 rounded-2xl shadow-lg p-10 border border-gray-200">

                <!-- ABOUT -->
                <h2 class="text-3xl font-bold text-gray-800 mb-4">🧱 About Shreeyash Construction</h2>
                <p class="text-lg text-gray-700 mb-4">
                    At Shreeyash Construction, quality roads define our identity. With engineering precision,
                    modern technology, and skilled professionals, we deliver premium infrastructure solutions.
                </p>

                <p class="text-gray-700 leading-relaxed mb-10">
                    Our roads are built for durability, sustainability, and superior performance across
                    industrial, urban, and municipal sectors.
                </p>

                <!-- WHY CHOOSE US -->
                <h3 class="text-2xl font-semibold text-center text-[var(--primary)] mb-6">
                    Why Choose Us
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    @foreach ([
                        'MORTH / IRC Compliant',
                        'Experienced Team',
                        'Modern Equipment',
                        'Strict Quality Control',
                        'On-Time Delivery',
                        'Serving All Maharashtra'
                    ] as $w)
                    <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                        <div class="bg-[var(--primary)] text-white w-10 h-10 flex items-center justify-center rounded-full text-lg font-bold shadow-md">
                            ✔
                        </div>
                        <span class="text-base font-semibold text-gray-700 leading-tight">
                            {{ $w }}
                        </span>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>
</section>


<!-- ================= CONTACT ================= -->
<section id="contact" class="section-spacing bg-gray-50">
    <div class="container-custom px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">Contact Us</h2>

        <div class="grid lg:grid-cols-2 gap-12">

            <!-- FORM -->
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Get a Free Quote</h3>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="font-medium">Full Name *</label>
                            <input type="text" required name="name"
                                   class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-400">
                        </div>

                        <div>
                            <label class="font-medium">Mobile Number *</label>
                            <input type="tel" required name="mobile"
                                   class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-400">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="font-medium">Project Type *</label>
                            <select required name="project_type"
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-400">
                                <option value="">Select Project Type</option>
                                <option>Asphalt Road Construction</option>
                                <option>Concrete Road Construction</option>
                                <option>Industrial Shed</option>
                                <option>Land Development</option>
                                <option>Compound Wall</option>
                            </select>
                        </div>

                        <div>
                            <label class="font-medium">Location *</label>
                            <select required name="location"
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-400">
                                <option value="">Select Location</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Raigad</option>
                                <option>Khopoli</option>
                                <option>Nagothane</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="font-medium">Project Details</label>
                        <textarea name="message" rows="4"
                                  class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-400"></textarea>
                    </div>

                    <button class="w-full bg-[var(--primary)] hover:bg-[#9e8240] text-white py-4 rounded-lg text-lg font-semibold">
                        Send Quote Request
                    </button>
                </form>
            </div>

            <!-- CONTACT INFO -->
            <div class="bg-gray-800 text-white p-8 rounded-xl shadow-md">
                <h3 class="text-2xl font-bold mb-6">Contact Information</h3>

                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="bg-yellow-400 p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-gray-800"></i>
                        </div>
                        <p>
                            Crescent Pearl - B, B-G/1,<br>
                            Veena Nagar, Katrang Road,<br>
                            Khopoli, Maharashtra 410203
                        </p>
                    </div>

                    <div class="flex gap-4">
                        <div class="bg-yellow-400 p-3 rounded-lg">
                            <i class="fas fa-phone text-gray-800"></i>
                        </div>
                        <p>Office: +91 93262 16153</p>
                    </div>

                    <div class="flex gap-4">
                        <div class="bg-yellow-400 p-3 rounded-lg">
                            <i class="fas fa-envelope text-gray-800"></i>
                        </div>
                        <p>sc@shreeyashconstruction.co.in</p>
                    </div>

                    <div class="flex gap-4">
                        <div class="bg-yellow-400 p-3 rounded-lg">
                            <i class="fas fa-clock text-gray-800"></i>
                        </div>
                        <p>
                            Mon–Sat: 9:00 AM – 6:00 PM <br>
                            Emergency: 24/7 Available
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
