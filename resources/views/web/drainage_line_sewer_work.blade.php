@extends('layouts.app')

@section('title', 'Drainage Line & Sewer Work')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drainage Line & Sewer Work Contractors – Shreeyash Constructionn</title>
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
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Drainage Line & Sewer Work Contractors in Maharashtra</h1>
           
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section id="why-choose" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Comprehensive Sewerage and Drainage Infrastructure Solutions</h2>
                <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
            </div>
            
          
            
            <div class="mt-8 text-center">
                <div class="bg-blue-50 inline-block rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                      
                    </div>
                    <p class="mt-2 text-gray-600">Shreeyash Construction is a trusted contractor in Maharashtra for drainage line and sewer work, offering end-to-end solutions for underground sewer systems, house connections, and surface water management. With over two decades of experience in civil infrastructure, we deliver technically sound and long-lasting solutions that comply with municipal norms, CPHEEO guidelines, and IS standards.
                    From excavation and pipe laying to manhole construction and final testing, our team ensures efficient and sustainable wastewater management systems for urban, rural, and industrial projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Scope of Drainage and Sewer Work</h2>
                
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
                        <h3 class="text-lg font-semibold mb-2">Survey & Network Design</h3>
                        <p class="text-gray-600">• Mapping of existing utilities and terrain</p>
                        <p class="text-gray-600">• Hydraulic and gradient design based on population and discharge load</p>
                        <p class="text-gray-600"> • Manhole and chamber planning at junctions and intervals</p>

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
                        <h3 class="text-lg font-semibold mb-2">Trenching & Pipeline Laying</h3>
                         <p class="text-gray-600">• Excavation and leveling to required gradient</p>
                        <p class="text-gray-600">• Pipe bedding with sand or PCC</p>
                        <p class="text-gray-600"> • Laying of RCC, HDPE, or SW pipes with proper alignment and slope</p>
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
                        <h3 class="text-lg font-semibold mb-2">Manhole & Inspection Chamber Construction</h3>
                        <p class="text-gray-600">• Cast-in-situ or precast manholes as per design</p>
                        <p class="text-gray-600">• Step iron installation, benching, and proper venting</p>
                        <p class="text-gray-600"> • Chambers for house sewer connections</p>
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
                        <h3 class="text-lg font-semibold mb-2">House/Industrial Sewer Connections</h3>
                         <p class="text-gray-600">• Lateral connection from buildings to main sewer line</p>
                        <p class="text-gray-600">• Use of inspection chambers, traps, and cleaning pipes</p>
                       
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
                        <h3 class="text-lg font-semibold mb-2">Testing & Commissioning</h3>
                          <p class="text-gray-600">• Leak tests, flow tests, and CCTV inspections (if required)</p>
                        <p class="text-gray-600">• Backfilling and surface reinstatement</p>
                    </div>
                </div>
                
            
            </div>
        </div>
    </section>

   
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-10">

        <!-- MAIN TITLE -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">
                Sewer & Drainage Work – Specifications, Applications & Why Choose Us
            </h2>
            <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4"></div>
        </div>

        <!-- 3 COLUMN GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- LEFT COLUMN – TECHNICAL SPECS -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                    Technical Specifications
                </h3>
                <div class="w-14 h-1 bg-yellow-500 mb-4"></div>

                <ul class="space-y-3 text-gray-700 text-sm leading-relaxed">
                    <li><strong>Pipe Types:</strong> RCC NP2/NP3, SW Pipes, UPVC, HDPE</li>
                    <li><strong>Pipe Diameters:</strong> 150mm to 1000mm</li>
                    <li><strong>Laying Depth:</strong> 1.0m to 4.0m below ground level</li>
                    <li><strong>Minimum Gradient:</strong> 1:200 to 1:500</li>
                    <li><strong>Bedding Material:</strong> Sand / Lean Concrete (M10)</li>
                    <li><strong>Manhole Spacing:</strong> 30m to 50m or at every change of direction</li>
                    <li><strong>Jointing Method:</strong> Collar joint / Rubber ring / Solvent weld</li>
                    <li><strong>Testing:</strong> Air test, Hydraulic test, Vacuum test</li>
                </ul>
            </div>

            <!-- CENTER COLUMN – APPLICATIONS -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                    Applications
                </h3>
                <div class="w-14 h-1 bg-yellow-500 mb-4"></div>

                <ul class="list-disc list-inside space-y-3 text-gray-700 text-sm">
                    <li>Municipal sewerage lines</li>
                    <li>Internal drainage for industrial parks</li>
                    <li>Township & residential sewage networks</li>
                    <li>School, hospital & commercial building drainage</li>
                    <li>Roadside surface water drainage systems</li>
                </ul>
            </div>

            <!-- RIGHT COLUMN – WHY CHOOSE -->
            <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                    Why Choose Shreeyash Construction?
                </h3>
                <div class="w-14 h-1 bg-yellow-500 mb-4"></div>

                <ul class="list-disc list-inside space-y-3 text-gray-700 text-sm">
                    <li>Extensive experience in public & private drainage projects</li>
                    <li>Skilled manpower & advanced trenching machinery</li>
                    <li>Compliance with ULB, MIDC, PMRDA & CPHEEO norms</li>
                    <li>Safe, leak-proof & sustainable drainage solutions</li>
                    <li>End-to-end service from planning to commissioning</li>
                </ul>
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
