@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cement Concrete Road Construction | Shreeyash Construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-pattern {
            background-color: #1f2937;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .spec-row:nth-child(odd) {
            background-color: rgba(15, 76, 129, 0.05);
        }
    </style>
</head>
    <!-- Hero Section -->
    <section class="hero-pattern text-white py-20">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Cement Concrete Road Construction Contractor in Maharashtra</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">Shreeyash Construction is a trusted<strong> concrete road construction company in India,</strong> delivering high-performance <strong>RCC roads across Maharashtra</strong> for townships, industrial parks, and highways. We execute <strong>rigid pavement construction using inset and offset paving techniques</strong>, adhering strictly to<strong> MORTH and IRC standards.</strong> Our concrete roads are designed for heavy-duty traffic, offering durability, strength, and minimal maintenance — ideal for both public infrastructure and private industrial use.</p>
               
                <div class="mt-12 bg-white bg-opacity-10 rounded-lg p-6 backdrop-filter backdrop-blur-sm">
                    <p class="text-lg font-medium">Looking for concrete road contractors near me you can trust?</p>
                    <p class="mt-2">As a Government‑registered firm, we follow IRC and MORTH standards to ensure every kilometre we pave meets the state's strictest quality and safety benchmarks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section id="why-choose" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Why Choose Cement Concrete Roads (CC Roads)?</h2>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-yellow-800 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#b6a618" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">High Durability</h3>
                    <p class="text-gray-600">Typical design life of 20 – 30 years, significantly outlasting traditional road materials.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-yellow-800 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#b6a618" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Low Lifecycle Cost</h3>
                    <p class="text-gray-600">Far fewer resurfacing cycles than bituminous roads, reducing long-term maintenance expenses.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-yellow-800 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg"  style="color:#b6a618" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Superior Load Capacity</h3>
                    <p class="text-gray-600">Ideal for highways, townships, and industrial estates with heavy traffic loads.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-yellow-800 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#b6a618" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Eco‑Friendly</h3>
                    <p class="text-gray-600">Longevity means lower carbon footprint over time compared to frequently replaced alternatives.</p>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <div class="bg-blue-50 inline-block rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#b6a618" class="h-8 w-8 text-yellow-800 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3 class="text-xl font-semibold">Monsoon‑Ready</h3>
                    </div>
                    <p class="mt-2 text-gray-600">Concrete performs consistently in Maharashtra's severe rains, maintaining structural integrity year-round.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Our Cement Concrete Road Construction Services</h2>
                <p class="text-gray-600 mt-2">(Popular with clients searching "concrete road contractors near me")</p>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">RCC Pavement Construction</h3>
                        <p class="text-gray-600">Reinforced cement concrete pavements for maximum durability and load-bearing capacity.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Rigid Pavement Roads</h3>
                        <p class="text-gray-600">Urban & rural rigid pavement solutions designed for Maharashtra's diverse terrain.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Industrial Concrete Roadways</h3>
                        <p class="text-gray-600">Heavy-duty concrete roads for industrial zones with specialized load requirements.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Municipal CC Road Packages</h3>
                        <p class="text-gray-600">Comprehensive municipal road development packages for urban infrastructure.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">National & State Highway CC Projects</h3>
                        <p class="text-gray-600">Large-scale highway construction with concrete for longevity and safety.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Township & Housing Society Roads</h3>
                        <p class="text-gray-600">Internal roads for residential complexes, townships, and Special Economic Zones.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Asphalt‑to‑CC Upgrades</h3>
                        <p class="text-gray-600">Road widening and conversion from asphalt to concrete for improved performance.</p>
                    </div>
                </div>
                
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="h-3 bg-yellow-500"></div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-200 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Paver Block & Drainage Integration</h3>
                        <p class="text-gray-600">Comprehensive solutions including kerbs and drainage systems for complete infrastructure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Footprint -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Service Footprint Across Maharashtra</h2>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">We mobilise quickly to any district, so when you search concrete road contractors near me in cities across Maharashtra—Shreeyash Construction is just a call away.</p>
            </div>
            
            <div class="bg-blue-50 rounded-xl p-8 shadow-md">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Mumbai</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Pune</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Nagpur</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Nashik</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Aurangabad</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Solapur</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Kolhapur</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Sangli</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Jalgaon</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Ahmednagar</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Satara</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Latur</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Amravati</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">Nanded</span>
                    </div>
                    <div class="bg-white rounded-lg p-3 text-center shadow-sm hover:shadow-md transition duration-300">
                        <span class="font-medium text-yellow-800">All Districts</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Technical Specifications & Standards</h2>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
            </div>
            
            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-yellow-600 text-white">
                            <th class="py-3 px-4 text-left">Parameter</th>
                            <th class="py-3 px-4 text-left">Specification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Design Code</td>
                            <td class="py-3 px-4">IRC:58, IRC:15, IRC:SP‑62, MORTH</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Compressive Strength</td>
                            <td class="py-3 px-4">30 – 40 MPa (IS 456:2000)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Slab Thickness</td>
                            <td class="py-3 px-4">150 – 300 mm (traffic‑class dependent)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Concrete Mix</td>
                            <td class="py-3 px-4">M30 – M40 (IS 10262, fly‑ash optional)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Reinforcement (if any)</td>
                            <td class="py-3 px-4">Fe500 / Fe550 steel mesh or rebars</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Surface Finish</td>
                            <td class="py-3 px-4">Broom / Trowel / Texture Roller</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Curing</td>
                            <td class="py-3 px-4">Membrane or Pond, 14 – 28 days</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Expansion Joint Spacing</td>
                            <td class="py-3 px-4">4.5 – 5 m with pre‑moulded filler boards</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Dowel Bars</td>
                            <td class="py-3 px-4">25 – 32 mm Ø @ 300 mm c/c (transverse joints)</td>
                        </tr>
                        <tr class="spec-row">
                            <td class="py-3 px-4 font-medium">Sub‑base & Base Layers</td>
                            <td class="py-3 px-4">GSB + DLC</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    {{-- <section id="projects" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Recent Signature Projects</h2>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">These case studies appear in search results for "concrete road contractors near me" thanks to our strong local SEO.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="h-64 bg-blue-800 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold">Industrial CC Road – Nashik MIDC</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 mb-4">Heavy-duty concrete road construction for industrial traffic in Nashik MIDC, featuring reinforced concrete with specialized load capacity.</p>
                        <button class="text-yellow-800 font-medium hover:underline flex items-center">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="h-64 bg-blue-800 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold">Smart City Urban CC Road – Kolhapur</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 mb-4">Urban road development as part of Kolhapur's Smart City initiative, featuring modern concrete roads with integrated drainage systems.</p>
                        <button class="text-yellow-800 font-medium hover:underline flex items-center">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="h-64 bg-blue-800 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold">Ahmednagar SH Widening to CC</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 mb-4">State Highway widening project in Ahmednagar, converting from asphalt to concrete for improved durability and performance.</p>
                        <button class="text-yellow-800 font-medium hover:underline flex items-center">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <div class="h-64 bg-blue-800 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold">PMGSY Rural Road – Latur District</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 mb-4">Rural road development under the Pradhan Mantri Gram Sadak Yojana in Latur District, connecting villages with durable concrete roads.</p>
                        <button class="text-yellow-800 font-medium hover:underline flex items-center">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="projects" class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-800">Recent Signature Projects</h2>
                <div class="w-16 h-1 bg-yellow-800 mx-auto mt-3 mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    These case studies appear in search results for "concrete road contractors near me" thanks to our strong local SEO.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg transition-transform transform hover:-translate-y-1">
                    <div class="h-40 bg-[#1c2c3e] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-base font-semibold text-gray-800">Industrial CC Road – Nashik MIDC</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            Heavy-duty concrete road construction for industrial traffic in Nashik MIDC.
                        </p>
                       
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg transition-transform transform hover:-translate-y-1">
                    <div class="h-40 bg-[#1c2c3e] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-base font-semibold text-gray-800">Smart City Urban CC Road – Kolhapur</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            Urban road development as part of Kolhapur's Smart City initiative.
                        </p>
                        
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg transition-transform transform hover:-translate-y-1">
                    <div class="h-40 bg-[#1c2c3e] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-base font-semibold text-gray-800">Ahmednagar SH Widening to CC</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            State Highway project in Ahmednagar converting asphalt to concrete.
                        </p>
                      
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow hover:shadow-lg transition-transform transform hover:-translate-y-1">
                    <div class="h-40 bg-[#1c2c3e] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-base font-semibold text-gray-800">PMGSY Rural Road – Latur District</h3>
                            <span class="bg-blue-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded">Completed</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            Rural road under PMGSY connecting villages in Latur District.
                        </p>
                      
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Equipment Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Plant, Machinery & QA Capabilities</h2>
                <div class="w-20 h-1 bg-blue-800 mx-auto mt-4 mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Slip‑Form Pavers & Fixed‑Form Pavers</h3>
                        <p class="text-gray-600">Advanced paving equipment for efficient and precise concrete road construction.</p>
                    </div>
                </div>
                
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">30–60 m³/hr Concrete Batching Plants</h3>
                        <p class="text-gray-600">On-site concrete production facilities ensuring consistent quality and supply.</p>
                    </div>
                </div>
                
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Transit Mixers & Boom Placers</h3>
                        <p class="text-gray-600">6–8 m³ capacity transit mixers for efficient concrete transportation and placement.</p>
                    </div>
                </div>
                
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">Vibratory Earth Compactors & Rollers</h3>
                        <p class="text-gray-600">Specialized equipment for proper sub-grade and base preparation.</p>
                    </div>
                </div>
                
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">VDF Flooring Machines & Joint‑Cutting Saws</h3>
                        <p class="text-gray-600">Specialized equipment for precision finishing and joint creation.</p>
                    </div>
                </div>
                
                <div class="flex items-start p-5 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-1">ISO‑certified QA/QC Labs</h3>
                        <p class="text-gray-600">On-site cube testing and comprehensive quality assurance protocols.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your inquiry! Our team will contact you shortly.');
            this.reset();
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'965c619350e78991',t:'MTc1MzYyMTg3MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>

@endsection
